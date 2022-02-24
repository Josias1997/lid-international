@extends('layouts.app')
@section('content')
	    <!-- Slider area -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--14" style="background-image: url(/storage/{{ $article->image }})" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-single-page-title text-center pt--100">
                        <h2 class="title theme-gradient">{{ $article->title }}</h2>
                        <ul class="blog-meta d-flex justify-content-center align-items-center">
                            <li><i data-feather="clock"></i> {{ $article->created_at->isoFormat('dddd D')  }}</li>
                            <li> <i data-feather="user"></i> {{ $article->author }} </li>
                            <!--<li> <i data-feather="message-circle"></i> 15 Comments</li>
                            <li> <i data-feather="heart"></i> Like</li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider area End -->

    <!-- DEtails Area -->
    <div class="rn-blog-details pt--110 pb--70 bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-wrapper">
                        <div class="inner">
                            <div class="thumbnail"><img src="/storage/{{ $article->image }}" alt="Blog Images"></div>
                            {!! $article->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DEtails Area ENd -->

    <!-- contact area -->
    <!--<div class="blog-comment-form pb--120 bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner">
                        <div class="section-title"><span class="subtitle">Have a Comment?</span>
                            <h2 class="title">Leave a Reply</h2>
                        </div>
                        <form class="mt--40" action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="rnform-group"><input type="text" placeholder="Name"></div>
                                    <div class="rnform-group"><input type="email" placeholder="Email"></div>
                                    <div class="rnform-group"><input type="text" placeholder="Website"></div>
                                </div                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="rnform-group"><textarea placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="blog-btn mt--30"><a class="btn-default" href="{{ route('blog.details', ['id' => 1])}}"><span>SEND
                                                MESSAGE</span></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- contact area End -->
@endsection