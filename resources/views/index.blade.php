@extends('layouts.app')
@section('content')
    <!-- Start Slider Area -->
    <div class="slider-activation rn-slick-dot rn-slick-activation dot-light mb--0" data-slick-options='{
        "slidesToShow": 1, 
        "slidesToScroll": 1, 
        "arrows": true, 
        "fade": true,
        "infinite": true,
        "easing": "fade",
        "infinite": true,
        "adaptiveHeight": true,
        "dots": true 
    }'>

        <!-- Start Single Slide  -->
        <div class="single-slider">
            <div class="slide slide-style-2 slider-box-content without-overlay d-flex align-items-center justify-content-end bg_image bg_image--32" data-black-overlay="2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner text-left">
                                <h1 class="title">{{ setting('site.title') }}</h1>
                                <p class="description">{{ setting('site.description') }}</p>
                               <!-- <div class="slide-btn"><a class="btn-default" href="{{ route('contact') }}">Contact Us</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide  -->

        <!-- Start Single Slide  -->
        <div class="single-slider">
            <div class="slide slide-style-2 slider-box-content without-overlay d-flex align-items-center justify-content-center bg_image bg_image--31" data-black-overlay="3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner text-left">
                                <h1 class="title">{{ setting('site.title') }}</h1>
                                <p class="description">{{ setting('site.description') }}</p>
                               <!-- <div class="slide-btn"><a class="btn-default" href="{{ route('contact') }}">Contact Us</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide  -->
    </div>
    <!-- End Slider Area -->

    <!-- Start Services area -->
    <div class="service-area ptb--120 bg_color--1">
        <div class="container">
            <div class="row service-main-wrapper">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('perspectives') }}">
                        <div class="service service__style--2 text-left bg-gray">
                            <div class="icon">
                                <i data-feather="cast"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Mission</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('perspectives') }}">
                        <div class="service service__style--2 text-left bg-gray">
                            <div class="icon">
                                <i data-feather="layers"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Vision</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('perspectives') }}">
                        <div class="service service__style--2 text-left bg-gray">
                            <div class="icon">
                                <i data-feather="users"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Values</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services area -->

    <!-- Start Corporate business area -->
    <div class="about-area rm-about-style-2 ptb--120 bg_color--5" id="about">
        <div class="about-wrapper">
            <div class="container">
                <div class="row row--20 align-items-center">
                    <!-- image area -->
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <img class="w-100" src="/storage/{{ setting('site.last_program_image') }}" alt="About Images">
                        </div>
                    </div>
                    <!-- Image Area End -->

                    <!-- Content Area Start -->
                    <div class="col-lg-6">
                        <div class="about-inner inner">
                            <div class="section-title"><span class="subtitle">LID-International</span>
                                <h2 class="title">Programs</h2>
                                <p class="description">Programs are many structures
                                    <br>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="about-us-list">
                                        <h5 class="title"><a href="{{ route('programs') }}">Education Program</a></h5>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="about-us-list">
                                        <h5 class="title"><a href="{{ route('programs') }}">Heath Program</a></h5>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="about-us-list">
                                        <h5 class="title"><a href="{{ route('programs') }}">Wash Program</a></h5>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="about-us-list">
                                        <h5 class="title"><a href="{{ route('programs') }}">Job booster Program</a></h5>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="about-us-list">
                                        <h5 class="title"><a href="{{ route('programs') }}">Evangelization Program</a></h5>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="about-us-list">
                                        <h5 class="title"><a href="{{ route('programs') }}">Relief aid</a></h5>
                                        <p></p>
                                    </div>
                                </div>

                            </div>
                            <!--<div class="purchase-btn mt--50"><a class="btn-transparent" href="about.html">WHY WE'RE
                                    DIFFERNT
                                    VALUES</a>
                                </div>-->
                        </div>
                    </div>
                    <!-- Content area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Corporate business area -->

    <!-- Start Counter Up Section -->
    <div class="counterup-area pb--80 pt--40 bg_image bg_image--17 theme-text-white" data-black-overlay="3">
        <div class="container">
            <div class="row mt--30">
                <div class="im_single_counterup col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="im_counterup">
                        <div class="inner">
                            <a href="{{ route('programs') }}">
                                <h2 ><img src="/storage/{{ setting('site.education') }}" alt=""/></h2>
                            </a>
                            <!--<p class="description">Staticfied Customers</p>-->
                        </div>
                    </div>
                </div>
                <div class="im_single_counterup col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="im_counterup">
                        <div class="inner">
                            <a href="{{ route('programs') }}">
                                <h2 ><img src="/storage/{{ setting('site.health') }}" alt=""/></h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="im_single_counterup col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="im_counterup">
                        <div class="inner">
                            <a href="{{ route('programs') }}">
                                <h2 ><img src="/storage/{{ setting('site.wash') }}" alt=""/></h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="im_single_counterup col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="im_counterup">
                        <div class="inner">
                            <a href="{{ route('programs') }}">
                                <h2 ><img src="/storage/{{ setting('site.evangelization') }}" alt=""/></h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter Up Section -->

    <!-- Start About Area -->
    <!--<div class="rn-about-area ptb--120 bg_color--5">
        <div class="container">
            <div class="row row--35 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="w-100" src="/images/about/about-4.png" alt="About Images" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner inner">
                        <div class="section-title text-left"><span class="subtitle">Our Working Plan</span>
                            <h2 class="title">Working Process</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim exercitationem
                                impedit iure quia quo recusandae?</p>
                        </div>
                        <div class="rn-accordion accodion-style--1 mt--30" id="accordion">
                            <!-Start Single Card  
                            <div class="rn-card">
                                <div class="rn-card-header accordion__heading" id="headingOne">
                                    <a href="#" class="accordion__button " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Your Business Skills But
                                        Never Stop
                                        Improving.
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="rn-card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat.
                                    </div>
                                </div>
                            </div>
                            <!- End Single Card  

                            <!- Start Single Card  
                            <div class="rn-card">
                                <div class="rn-card-header accordion__heading" id="headingTwo">
                                    <a href="#" class="accordion__button collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Tactics That Can Help Your Business
                                        Grow.
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="rn-card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus
                                        terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat.
                                    </div>
                                </div>
                            </div>
                            <!- End Single Card  

                            <!- Start Single Card  ->
                            <div class="rn-card">
                                <div class="rn-card-header accordion__heading" id="headingThree">
                                    <a href="#" class="accordion__button collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">The Secret of Successful Business.
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="rn-card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus
                                        terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat.
                                    </div>
                                </div>
                            </div>
                            <!- End Single Card  ->

                            <!- Start Single Card  ->
                            <div class="rn-card">
                                <div class="rn-card-header accordion__heading" id="headingFour">
                                    <a href="#" class="accordion__button collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How To Start A Business With
                                        Business.
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="rn-card-body">Facilis fugiat hic ipsam iusto laudantium
                                        libero maiores minima molestiae mollitia repellat rerum sunt
                                        ullam voluptates? Perferendis, suscipit.
                                    </div>
                                </div>
                            </div>
                            <!- End Single Card  ->
                        </div>
                        <div class="about-button mt--30"><a class="btn-default" href="about.html">See how it works</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End About Area -->

    <!-- Start Team Area -->
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
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('perspectives') }}">
                            <div class="team team-style--bottom">
                                <div class="thumbnail"><img src="/storage/{{ $team_member->image }}" alt="Blog Images"></div>
                                <div class="content">
                                    <h4 class="title">{{ $team_member->position }}</h4>
                                    <p class="designation">{{ $team_member->name }}</p>
                                </div>
                                
                                <!--<ul class="social-icon">
                                    <li>
                                        <a href="#">
                                            <i data-feather="facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i data-feather="linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i data-feather="twitter"></i>
                                        </a>
                                    </li>
                                </ul>-->
                            </div>
                            </a>
                        </div>
                    @endforeach
                    <!-- End Single Member area -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Pricing Area -->
    <!--<div class="rn-pricing-table-area ptb--120 bg_color--5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title service-style--3 text-center mb--25 mb_sm--0"><span class="subtitle">Our
                            Budget Plan</span>
                        <h2 class="title">Pricing Plan</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, <br> but the majority have
                            suffered alteration.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt--30">
                    <div class="rn-pricing">
                        <div class="pricing-table-inner">
                            <div class="pricing-header">
                                <h4 class="title">Free</h4>
                                <div class="pricing"><span class="price">$45</span><span class="subtitle">USD Per
                                        Month</span></div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-style--1">
                                    <li><i data-feather="check"></i> 5 PPC Campaigns</li>
                                    <li><i data-feather="check"></i> Digital Marketing</li>
                                    <li><i data-feather="check"></i> Marketing Agency</li>
                                    <li><i data-feather="check"></i> Seo Friendly</li>
                                    <li><i data-feather="check"></i> UI/UX designs</li>
                                </ul>
                            </div>
                            <div class="pricing-footer"><a class="rn-btn" href="#pricing">Purchase Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt--30">
                    <div class="rn-pricing active">
                        <div class="pricing-table-inner">
                            <div class="pricing-header">
                                <h4 class="title">Business</h4>
                                <div class="pricing"><span class="price">$45</span><span class="subtitle">USD Per
                                        Month</span></div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-style--1">
                                    <li><i data-feather="check"></i> 5 PPC Campaigns</li>
                                    <li><i data-feather="check"></i> Digital Marketing</li>
                                    <li><i data-feather="check"></i> Marketing Agency</li>
                                    <li><i data-feather="check"></i> Seo Friendly</li>
                                    <li><i data-feather="check"></i> UI/UX designs</li>
                                </ul>
                            </div>
                            <div class="pricing-footer"><a class="rn-btn" href="#pricing">Purchase Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt--30">
                    <div class="rn-pricing">
                        <div class="pricing-table-inner">
                            <div class="pricing-header">
                                <h4 class="title">Advanced</h4>
                                <div class="pricing"><span class="price">$99</span><span class="subtitle">USD Per
                                        Month</span></div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-style--1">
                                    <li><i data-feather="check"></i> 5 PPC Campaigns</li>
                                    <li><i data-feather="check"></i> Digital Marketing</li>
                                    <li><i data-feather="check"></i> Marketing Agency</li>
                                    <li><i data-feather="check"></i> Seo Friendly</li>
                                    <li><i data-feather="check"></i> UI/UX designs</li>
                                </ul>
                            </div>
                            <div class="pricing-footer"><a class="rn-btn" href="#pricing">Purchase Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End Pricing Area -->

    <!-- Rn Brand Area Start -->
    <div class="rn-brand-area ptb--120 bg_color--1">
        <!--<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--25 mb_sm--0"><span class="subtitle">Top clients</span>
                        <h2 class="title">Clients Say What About Us</h2>
                    </div>
                </div>-->
            
            <div class="row">
                <div class="col-lg-10 offset-lg-1 mt--30">
                    <div class="thumbnail position-relative"><img class="w-100" src="/images/blank.jpg" alt="About Images">
                        <a href="{{ setting('site.youtube_video_url') }}" class="play__btn video-popup position-top-center theme-color"><span
                                class="play-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--<div class="row pt--120">
                <div class="col-lg-12">
                    <ul class="brand-style-2">
                        <li><img src="/images/brand/brand-01.png" alt="Logo Images"></li>
                        <li><img src="/images/brand/brand-02.png" alt="Logo Images"></li>
                        <li><img src="/images/brand/brand-03.png" alt="Logo Images"></li>
                        <li><img src="/images/brand/brand-05.png" alt="Logo Images"></li>
                        <li><img src="/images/brand/brand-04.png" alt="Logo Images"></li>
                        <li><img src="/images/brand/brand-08.png" alt="Logo Images"></li>
                        <li><img src="/images/brand/brand-06.png" alt="Logo Images"></li>
                        <li><img src="/images/brand/brand-09.png" alt="Logo Images"></li>
                        <li><img src="/images/brand/brand-07.png" alt="Logo Images"></li>
                    </ul>
                </div>
            </div>-->
        </div>
    </div>
    <!-- Rn Brand Area End -->

    <!-- Rn News Area Start -->
    <!-- Start Team Area -->
    <div class="rn-team-area ptb--120 bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--25 mb_sm--0">
                        <h2 class="title">Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <!-- Single team Area -->
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
                    </div>
                    @endforeach
                    <!-- End Single Member area -->

                </div>
            </div>
        </div>
    </div>
    <!-- Rn News Area End -->
@endsection