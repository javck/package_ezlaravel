<div class="container clearfix">

    <div class="heading-block center">
        <h2>{{trans('page.news')}}</h2>
    </div>

    <!-- Posts
    ============================================= -->
    <div id="posts" class="post-grid grid-container post-masonry clearfix">
        @isset($articles)
            @foreach ($articles as $article)
                @isset($article)
                    <div class="entry clearfix">
                        @if ($article->mode == 'singleImg')
                            <div class="entry-image">
                                @if (setting('admin.isShowBigPic') == 'true')
                                    <a href="{{asset('images/full/'.$article->mediums)}}" data-lightbox="image"><img class="image_fade" src="{{asset('images/'.$article->mediums)}}" alt="{{$article->title}}"></a>
                                @else
                                    <a href="{{url('articles/'.$article->id)}}"><img class="image_fade" src="{{asset('images/'.$article->mediums)}}" alt="{{$article->title}}"></a>
                                @endif
                            </div>
                        @elseif ($article->mode == 'multiImgs')
                            <div class="entry-image">
                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            @foreach ($article->getMediasAry() as $path)
                                                @if (setting('admin.isShowBigPic') == 'true')
                                                    <div class="slide"><a href="images/full/{{$path}}" data-lightbox="gallery-item"><img class="image_fade" src="images/{{$path}}" alt="{{$article->title}}"></a></div>
                                                @else
                                                    <div class="slide"><a href="{{url('articles/'.$article->id)}}" data-lightbox="gallery-item"><img class="image_fade" src="images/{{$path}}" alt="{{$article->title}}"></a></div>
                                                @endif

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif ($article->mode == 'film')
                            <div class="entry-image">
                                <iframe src="{{ $article->mediums }}" width="300" height="241" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        @elseif ($article->mode == 'puzzle')
                            <div class="entry-image clearfix">
                                <div class="portfolio-single-image masonry-thumbs col-4" data-big="3" data-lightbox="gallery">
                                    @foreach ($article->getMediasAry() as $path)
                                        <a href="images/{{$path}}" data-lightbox="gallery-item"><img class="image_fade" src="images/{{$path}}" alt="{{$article->title}}"></a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="entry-c">
                            @if ($article->mode == 'link')
                                <div class="entry-image">
                                    <a href="{{ $article->mediums }}" class="entry-link" target="_blank">
                                        {{ $article->title }}
                                        <span>- {{ $article->mediums }}</span>
                                    </a>
                                </div>
                            @elseif ($article->mode == 'quote')
                                <div class="entry-image">
                                    <blockquote>
                                        <p>{{ $article->content_small }}</p>
                                        <footer>{{ $article->user->name }}</footer>
                                    </blockquote>
                                </div>
                            @elseif ($article->mode == 'sentense')
                                <div class="entry-image">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            {!! $article->content !!}
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="entry-title">
                                    <h2><a href="{{url('articles/'.$article->id)}}">{{ $article->title }}</a></h2>
                                </div>
                            @endif

                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> {{ $article->created_at->diffForHumans() }}</li>
                                {{--<li><a href="#"><i class="icon-user"></i> {{ $article->user->name }}</a></li>--}}
                                {{--<li>--}}
                                {{--<i class="icon-tag"></i>--}}
                                {{--@for ($i = 0; $i < count($article->tags); $i++)--}}
                                {{--@if ($i != 0), @endif--}}
                                {{--<a href="{{url($article->tags[$i]->link)}}">{{$article->tags[$i]->title}}</a>--}}
                                {{--@endfor--}}
                                {{--</li>--}}
                                {{--@if ($article->mode == 'singleImg' or $article->mode == 'multiImgs')--}}
                                {{--<li><a href="#"><i class="icon-comments"></i><small> {{ trans('page.commentsCount',['count'=> $article->commentQty ]) }}</small></a></li>--}}
                                {{--@endif--}}
                                {{--<li><i class="{{$article->iconClass}}"></i></li>--}}
                            </ul>
                            @if ($article->mode != 'sentense' and $article->mode != 'quote' and $article->mode != 'link')
                                <div class="entry-content">
                                    <p>{{ $article->content_small }}</p>
                                    <a href="{{url('articles/'.$article->id)}}"class="more-link">{{trans('page.more')}}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endisset
            @endforeach
        @endisset
    </div><!-- #posts end -->

    <!-- 分頁按鈕 -->
@isset($articles)
    {!! $articles->links() !!}
@endisset

<!-- 數量顯示 -->
    @isset($articleQty)
        <p class="text-center">{{trans('page.articlesCount',['count' => $articleQty ])}}</p>
    @endisset

    {{-- <!-- Pagination
    ============================================= -->
    <ul class="pager nomargin">
        <li class="previous"><a href="#">&larr; Older</a></li>
        <li class="next"><a href="#">Newer &rarr;</a></li>
    </ul><!-- .pager end --> --}}

</div>

<div class="divider divider-rounded divider-center"><i class="icon-arrow-down"></i></div>