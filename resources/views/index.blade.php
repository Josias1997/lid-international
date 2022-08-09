@extends('layouts.app')
@section('content')
    <!-- Start Slider Area -->
    @if($message && $message === "success")
        <div class="alert alert-success">Message sent successfully</div>
    @elseif($message !== null)
        <div class="alert alert-danger">{{ $message }}</div>
    @endif
    <div class="slider-activation rn-slick-dot rn-slick-activation dot-light mb--0" data-slick-options='{
        "slidesToShow": 1, 
        "slidesToScroll": 1, 
        "arrows": true, 
        "fade": true,
        "easing": "fade",
        "autoplay": true,
        "autoplaySpeed": 2000,
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
            <h1 class="title">About Us</h1>
            <div class="about-area ptb--120 bg_color--1">
                <div class="about-wrapper">
                    <div class="container">
                        <div class="row row--35 align-items-center">
                            <div class="col-lg-5 col-md-12">
                                <div class="thumbnail"><img class="w-100" src="/images/team.jpg" alt="About Images"></div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="about-inner inner">
                                    <div class="section-title">
                                        <h2 class="title">Our Story</h2>
                                            {!! setting('site.our_story') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                @foreach($programs as $program)
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="about-us-list">
                                            <h5 class="title"><a href="{{ route('get-program', $program->id) }}">{{ $program->name }}</a></h5>
                                            <p></p>
                                        </div>
                                    </div>
                                @endforeach
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

    <!-- Start Pricing Area -->
    <div class="rn-pricing-table-area ptb--120 bg_color--5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title service-style--3 text-center mb--25 mb_sm--0"><span class="subtitle">Ways to donate</span>
                        <h2 class="title">Donations</h2>
                        <p>There are many ways to donate.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mt--30">
                    <div class="rn-pricing active">
                        <div class="pricing-table-inner">
                            <div class="pricing-header">
                                <h4 class="title">Make a donation</h4>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-style--1">
                                    <li><i data-feather="check"></i>Make a donation</li>
                                </ul>
                            </div>
                            <div class="pricing-footer"><a class="rn-btn" href="{{ route('donation') }}">Proceed</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->
<div class="rn-contact-top-area ptb--120 bg_color--5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb--30 text-center"><span class="subtitle">Our contact address</span>
                        <h2 class="title">Quick Contact Address</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rn-address">
                        <div class="icon">
                            <i data-feather="headphones"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Contact Phone Number</h4>
                            <p><a href="tel:{{ setting('site.phone_number') }}">{{ setting('site.phone_number') }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rn-address">
                        <div class="icon">
                            <i data-feather="mail"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Email Address</h4>
                            <p><a href="mailto:{{ setting('site.first_email') }}">{{ setting('site.first_email') }}</a></p>
                            <p><a href="mailto:{{ setting('site.second_email') }}">{{ setting('site.second_email') }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rn-address">
                        <div class="icon">
                            <i data-feather="map-pin"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Location</h4>
                            <p>{{ setting('site.address') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- adderss ENd -->
        <div class="rn-contact-page ptb--120 bg_color--1">
        <div class="container">
            <div class="row row--35 align-items-start">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="section-title text-left mb--50">
                        <h2 class="title">Contact</h2>
                        <div class="im_address">
                            <span>Call us directly:</span><a class="link im-hover" href="phone">{{ setting('site.phone_number') }}</a>
                        </div>
                        <div class="im_address mt--5">
                            <span>Contact Email:</span><a class="link im-hover" href="email">contact@lidinternational.org</a>
                        </div>
                    </div>
                    <form id="contact-form" method="POST" action="{{ route('contact') }}" class="rwt-dynamic-form row contact-form--1">
                        {{ csrf_field() }}
                        <input type="hidden" id="home" name="home" value="home" />
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name"></label>
                                <input name="name" id="name" type="text" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="phone"></label>
                                <input type="text" name="phone" id="phone" placeholder="Your Phone">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="email"></label>
                                <input name="email" id="email" type="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="message"></label>
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-submit">
                                <button type="submit" id="submit" class="btn-default btn-block btn-primary">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail mb_md--30 mb_sm--30">
                        <img src="/images/logo.jpg" alt="imroz">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact area End -->
@endsection