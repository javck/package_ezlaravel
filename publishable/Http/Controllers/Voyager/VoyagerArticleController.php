<?php

namespace App\Http\Controllers\Voyager;

use App;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\Cgy;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Voyager\VoyagerBaseController;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Facades\Voyager;

class VoyagerArticleController extends VoyagerBaseController
{

    public function __construct()
    {
    }

    private function inputHandle(Request $request)
    {
        $inputs = $request->all();
        $request->merge(['author_id' => Auth::user()->id]);

        //附件處理
        if (isset($inputs['attachment_paths']) and $inputs['attachment_paths'][0] != null) {
            $files = $request->file('attachment_paths');
            if (!isset($inputs['attachment_names']) or strlen($inputs['attachment_names']) == 0) {
                $fileNames = array();
                foreach ($files as $file) {
                    $fileNames[] = $file->getClientOriginalName();
                }
                $request->merge(['attachment_names' => implode(',', $fileNames)]);
            }
        }

        if (!isset($inputs['content_small'])) {
            $request->merge(['content_small' => mb_substr($inputs['content'], 0, 60, "utf-8") . '...']);
        }
        return $request;
    }

    /**
     * POST BRE(A)D - Store data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows)->validate();

        //自定義資料處理================================
        $request =  $this->inputHandle($request);

        $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

        event(new BreadDataAdded($dataType, $data));

        if (!$request->has('_tagging')) {
            if (auth()->user()->can('browse', $data)) {
                $redirect = redirect()->route("voyager.{$dataType->slug}.index");
            } else {
                $redirect = redirect()->back();
            }

            return $redirect->with([
                'message'    => __('voyager::generic.successfully_added_new') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
                'alert-type' => 'success',
            ]);
        } else {
            return response()->json(['success' => true, 'data' => $data]);
        }
    }

    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Compatibility with Model binding.
        $id = $id instanceof Model ? $id->{$id->getKeyName()} : $id;

        $model = app($dataType->model_name);
        if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope' . ucfirst($dataType->scope))) {
            $model = $model->{$dataType->scope}();
        }
        if ($model && in_array(SoftDeletes::class, class_uses($model))) {
            $data = $model->withTrashed()->findOrFail($id);
        } else {
            $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
        }

        // Check permission
        $this->authorize('edit', $data);

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->editRows, $dataType->name, $id)->validate();

        //自定義資料處理================================
        $request = $this->inputHandle($request);
        //=============================================
        $this->insertUpdateData($request, $slug, $dataType->editRows, $data);
        event(new BreadDataUpdated($dataType, $data));

        return redirect()
            ->route("voyager.{$dataType->slug}.index")
            ->with([
                'message'    => __('voyager::generic.successfully_updated') . " {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }

    //儲存留言內容
    public function comment($id, Request $request)
    {
        $inputs = $request->all();
        $user = Auth::user();
        $data = array();
        if (isset($user)) {
            $data['user_id'] = $user->id;
            $data['name'] = $user->name;
            $data['email'] = $user->email;
        } else {
            if (isset($inputs['author'])) {
                $data['name'] = $inputs['author'];
            }
            if (isset($inputs['email'])) {
                $data['email'] = $inputs['email'];
            }
            if (isset($inputs['url'])) {
                $data['website'] = $inputs['url'];
            }
        }
        $article = Article::find($id);
        $data['article_id'] = $id;
        $data['content'] = $inputs['comment'];
        $comment = Comment::create($data);

        //發送Email通知
        if (App::environment() == 'production' && setting('admin.isSendNotify') == 'true') {
            $beautyMail = app()->make(\Snowfire\Beautymail\Beautymail::class);
            $beautyMail->send('emails.reminder', ['title' => '文章:' . $article->title . ' 有新留言', 'comment' => $comment, 'mode' => 'comment'], function ($m) {
                $m->from(setting('site.service_mail'), setting('site.name'));
                $m->to(setting('admin.admin_mail'), '網站管理員')->subject('您有新留言');
            });
        }

        return redirect($inputs['currentUrl']);
    }

    //下載檔案附件
    public function download($id, $index)
    {
        $article = Article::find($id);
        $filePath = json_decode($article->attachment_paths, true)[$index]['download_link'];
        $path = public_path() . $filePath;
        $fileName = $article->getAttachNameAry()[$index];
        return response()->download($path, $fileName);
    }

    //顯示某單一文章
    public function show(Request $request, $id)
    {
        //Carbon::setLocale('zh-tw'); //設定Carbon的本地化
        $currentIndex = 0;
        $article = Article::findOrFail($id);
        $articles = Article::where('cgy_id', $article->cgy_id)->where('status', 'published')->orderBy('created_at', 'desc')->orderBy('sort', 'asc')->get();
        for ($i = 0; $i < count($articles); $i++) {
            if ($articles[$i]->id == $id) {
                $currentIndex = $i;
                break;
            }
        }
        //處理上一篇.下一篇文章
        $data = ['article' => $article];
        $data['tags'] = Tag::where('enabled', 1)->where('type', 'like', '%def%')->orderBy('sort', 'asc')->get();
        $data['cgys'] = Cgy::where('enabled', 1)->get();
        $data['articles_feature'] = Article::where('featured', true)->where('status', 'published')->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        if ($currentIndex != 0) {
            $lastArticle = $articles[$currentIndex - 1];
            $data['lastArticle'] = $lastArticle;
        }
        if ($currentIndex != count($articles) - 1) {
            $nextArticle = $articles[$currentIndex + 1];
            $data['nextArticle'] = $nextArticle;
        }

        //處理關聯文章
        $related_articles = array();
        foreach ($article->tags as $_tag) {
            foreach ($_tag->articles as $_article) {
                if ($_article->mode == 'singleImg' or $_article->mode == 'multiImgs' or $_article->mode == 'puzzle') {
                    $related_articles[$_article->id] = $_article;
                }
            }
        }
        unset($related_articles[$article->id]); //把自己這篇移除掉

        if (count($related_articles) >= 3) {
            $related_articles = array_values($related_articles);
            //最多只取4篇
            if (count($related_articles) > 4) {
                $related_articles = array_slice($related_articles, 0, 4);
            }
            $data['relatedArticles'] = $related_articles;
        }

        $comments = Comment::where('article_id', $id)->where('enabled', 1)->orderBy('created_at', 'desc')->get();
        $data['comments'] = $comments;

        if (isset($data['article'])) {
            return view('demos.article', $data);
        } else {
            return abort(404);
        }
    }

    //複製該文章，並且將啟用關閉
    public function copy($id)
    {
        $article = Article::find($id);
        if (isset($article)) {
            $newArticle = $article->replicate();
            $newArticle->title = $newArticle->title . '(複製)';
            $newArticle->status = 'draft';
            $newArticle->save();
            return redirect('admin/articles/' . $newArticle->id . '/edit')->with([
                'message' => '文章複製成功',
                'alert-type' => 'success',
            ]);
        } else {
            return redirect('admin/articles')->with([
                'message' => '文章複製失敗，找不到該筆資料',
                'alert-type' => 'error',
            ]);
        }
    }
}
