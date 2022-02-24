@extends('layouts.app')
@section('content')
	    <!-- Start BreadCrumb Area -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--15" data-black-overlay="6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End BreadCrumb Area -->

    <!-- Blog -->
    <div class="rn-blog-area ptb--120 bg_color--1">
        <div class="container">
            <div class="row mt_dec--30">
                @foreach($articles as $article)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="im_box">
                            <div class="thumbnail"><a href="{{ route('blog.details', ['id' => $article->id]) }}"><img class="w-100" src="/storage/{{ $article->image }}" alt="{{ $article->title }}"></a></div>
                            <div class="content">
                                <div class="inner">
                                    <div class="content_heading">
                                        
                                        <h4 class="title"><a href="{{ route('blog.details', ['id' => $article->id]) }}">{{ $article->title }}</a></h4>
                                    </div>
                                    <div class="content_footer"><a class="rn-btn btn-opacity" href="{{ route('blog.details', ['id' => $article->id]) }}">Read
                                            More</a></div>
                                </div><a class="transparent_link" href="{{ route('blog.details', ['id' => $article->id]) }}"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="rn-pagination text-center">
                        <ul class="page-list">
                            <li class="{{ $page == 1 ? 'active' : '' }}"><a href="{{ route('blog', ['page' => 1]) }}">1</a></li>
                            <li class="{{ $page == 2 ? 'active' : '' }}"><a href="{{ route('blog', ['page' => 2]) }}">2</a></li>
                            <li class="{{ $page == 3 ? 'active' : '' }}"><a href="{{ route('blog', ['page' => 3]) }}">3</a></li>
                            <li class="{{ $page == 4 ? 'active' : '' }}"><a href="{{ route('blog', ['page' => 4]) }}">4</a></li>
                            <li><a href="{{ route('blog', ['page' => $page + 1]) }}">
                                    <i data-feather="chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection