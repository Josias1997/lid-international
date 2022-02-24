@extends('layouts.app')

@section('content')
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--15" data-black-overlay="6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">Burkina Faso</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- About area Start -->
    <div class="about-area ptb--120 bg_color--1">
        <div class="about-wrapper">
            <div class="container">
                <div class="row row--35 align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="thumbnail"><img class="w-100" src="/images/blank.jpg" alt="About Images"></div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="about-inner inner">
                            <div class="section-title">
                                <h2 class="title">About Burkina Faso</h2>
                                {!! setting('site.burkina_faso') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About area End -->
@endsection