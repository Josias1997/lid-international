@extends('layouts.app')
@section('content')
	    <!-- Start Breadcrumb Area -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--15" data-black-overlay="6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">Perspectives</h2>
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
                                <h2 class="title">Mission</h2>
                               
                                {!! setting('site.missions') !!}  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About area End -->

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
                                <h2 class="title">Vision</h2>
                               
                                {!! setting('site.vision') !!}  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                <h2 class="title">Values</h2>
                               
                                {!! setting('site.values') !!}  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Team Area Start -->
    <div class="rn-team-area ptb--120 bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--25 mb_sm--0">
                        <h2 class="title">Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <!-- Single team Area -->
                    @foreach ($team_members as $team_member)
                        <div class="about-area ptb--120 bg_color--1">
                            <div class="about-wrapper">
                                <div class="container">
                                    <div class="row row--35 align-items-center">
                                        <div class="col-lg-5 col-md-12">
                                            <div class="thumbnail"><img class="w-100" src="/storage/{{ $team_member->image }}" alt="About Images"></div>
                                        </div>
                                        <div class="col-lg-7 col-md-12">
                                            <div class="about-inner inner">
                                                <div class="section-title">
                                                    <h3 class="title">{{ $team_member->position }}</h3>
                                                    <h4 class="title">{{ $team_member->name }}</h4>
                                                    {{ $team_member->biography }}  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Single Member area -->
                </div>
            </div>
        </div>
    </div>
    <!-- Team Area End -->
@endsection