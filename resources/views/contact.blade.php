@extends('layouts.app')

@section('content')
	    <!-- Bread Crumb Area -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--15" data-black-overlay="6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bread Crumb  End -->

    <!-- adderss -->
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

    <!-- Contact area -->
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
                            <span>Contact Email:</span><a class="link im-hover" href="email">example@gmail.com</a>
                        </div>
                    </div>
                    @if($message && $message === "success")
                        <div class="alert alert-success">Message sent successfully</div>
                    @elseif($message !== null)
                        <div class="alert alert-danger">{{ $message }}</div>
                    @endif
                    <form id="contact-form" method="POST" action="{{ route('contact') }}" class="rwt-dynamic-form row contact-form--1">
                        {{ csrf_field() }}
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
                        <img src="/images/logo/logo.jpg" alt="imroz">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact area End -->

    <!-- map area -->
    <div class="rn-contact-map-area position-relative">
        <div style="height: 650px; width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Ouagadougou+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/">Circle area map</a></div>
            </div>
    <!-- map area End -->
@endsection