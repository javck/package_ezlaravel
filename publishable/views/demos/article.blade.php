@extends('layouts.site')
@section('seo')
@isset($keywords)
<meta name="keywords" content="{{ $article->meta_keywords }}">
@endisset
@isset($description)
<meta name="description" content="{{ setting('site.description') }}">
@endisset
@stop
@section('page_title') {{ $article->title }} @stop

@section('header_class') @stop

@section('body')
<!-- ======= Blog Section ======= -->
<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

        <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry entry-single">
                    <div class="entry-img">
                        <img src="{{ $article->getPicUrl() }}" alt="{{ $article->title }}" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        {{ $article->title }}
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i>
                                {{ $article->user->name }}
                            </li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i>
                                {{ $article->created_at->diffForHumans() }}
                            </li>
                            <li class="d-flex align-items-center"><i class="icofont-comment"></i>
                                {{ $article->commentQty }}
                            </li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            {!! $article->content !!}
                        </p>

                    </div>

                    <div class="entry-footer clearfix">
                        <div class="float-left">
                            <i class="icofont-folder"></i>
                            <ul class="cats">
                                <li><a href="{{ url('/demo/articles/'.$article->cgy->id) }}">{{ $article->cgy->title }}</a>
                                </li>
                            </ul>

                            @if(count($article->tags) > 0)
                                <i class="icofont-tags"></i>
                                <ul class="tags">
                                    @foreach ($article->tags as $tag)
                                        <li><a href="#">{{ $tag->title }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <div class="float-right share">
                            <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                            <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                            <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                        </div>

                    </div>

                </article><!-- End blog entry -->

                <div class="blog-author clearfix">
                    <img src="{{ Voyager::image($article->user->avatar) }}" class="rounded-circle float-left" alt="">
                    <h4>{{ $article->user->name }}</h4>
                    <div class="social-links">
                        <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                        <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                        <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
                    </div>
                    <p>
                        Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas
                        repellat
                        voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                    </p>
                </div><!-- End blog author bio -->

                <div class="blog-comments">

                    <h4 class="comments-count"> {{$article->comments()->count() .' '. __('Comments') }}</h4>

                    @foreach ($article->comments as $comment)
                        <div id="comment-{{ $comment->id }}" class="comment clearfix">
                            <img src="{{ $comment->user->pic }}" class="comment-img  float-left" alt="">
                            <h5><a href="">{{ $comment->user->name }}</a> <a href="#" class="reply"><i class="icofont-reply"></i>
                                    {{ __('Reply') }}</a></h5>
                            <time datetime="2020-01-01">{{ $comment->created_at }}</time>
                            <p>
                                {!! $comment->content !!}
                            </p>
                        </div><!-- End comment #1 -->
                    @endforeach

                    <div class="reply-form">
                        <h4>{{ __('Reply a message') }}</h4>
                        <p>{{ __('Your email address will not be published. Required fields are marked *') }} </p>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control"
                                        placeholder="{{ __('Your Name*') }}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="text" class="form-control"
                                        placeholder="{{ __('Your Email*') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control"
                                        placeholder="{{ __('Your Website') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <textarea name="comment" class="form-control"
                                        placeholder="{{ __('Your Comment*') }}"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Post Comment') }}</button>
                        </form>
                    </div>

                </div><!-- End blog comments -->

            </div><!-- End blog entries list -->

            <div class="col-lg-4">
                <div class="sidebar">

                    <h3 class="sidebar-title">{{ __('Search') }}</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="icofont-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                    <h3 class="sidebar-title">{{ __('Category') }}</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            @foreach ($cgys as $cgy)
                            <li><a href="{{ url('/demo/articles/'.$cgy->id) }}">{{ $cgy->title }}
                                    <span>({{ $cgy->articles()->count() }})</span></a></li>
                            @endforeach
                        </ul>

                    </div><!-- End sidebar categories-->
                    @if($articles_feature != null && count($articles_feature) > 0)
                    <h3 class="sidebar-title">{{ __('Feature Articles') }}</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach ($articles_feature as $article)
                        <div class="post-item clearfix">
                            <img src="{{ $article->getPicUrl() }}" alt="">
                            <h4><a href="{{ '/demo/articles/' . $article->id }}">{{ $article->title }}</a></h4>
                            <time datetime="2020-01-01">{{ $article->created_at->diffForHumans() }}</time>
                        </div>
                        @endforeach
                    </div><!-- End sidebar recent posts-->
                    @endif

                    <h3 class="sidebar-title">{{ __('Tags') }}</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            @foreach ($tags as $tag)
                            <li><a href="#">{{ $tag->title }}</a></li>
                            @endforeach
                        </ul>

                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div><!-- End .row -->

    </div><!-- End .container -->

</section><!-- End Blog Section -->
@stop
