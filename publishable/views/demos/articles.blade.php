@extends('layouts.site')
@section('seo')
@isset($keywords)
<meta name="keywords" content="{{ $cgy->title }}">
@endisset
@isset($description)
<meta name="description" content="{{ setting('site.description') }}">
@endisset
@stop
@section('page_title') {{ $cgy->title }} @stop

@section('header_class') @stop

@section('body')
<!-- ======= Blog Section ======= -->
<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

        <div class="row">

            <div class="col-lg-8 entries">

                @isset($articles)
                @foreach ($articles as $article)
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{ $article->getPicUrl() }}" alt="{{ $article->title }}" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="{{ '/demo/article/' . $article->id }}">
                            {{ $article->title }}
                        </a>
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
                            {!! $article->content_small !!}
                        </p>
                        <div class="read-more">
                            <a href="{{ '/demo/article/' . $article->id }}">{{ __('Read More') }}</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->
                @endforeach
                @endisset

                @isset($articles)
                    <div class="blog-pagination">
                        {!! $articles->links() !!}
                    </div>
                @endisset

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
                                <li><a href="{{ url('/demo/articles/'.$cgy->id) }}">{{ $cgy->title }} <span>({{ $cgy->articles()->count() }})</span></a></li>
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
