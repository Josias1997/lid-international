@extends('layouts.app')

@section('content')
	    <!-- Bread Crumb Area -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--15" data-black-overlay="6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">Donate</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bread Crumb  End -->

    <!-- Contact area -->
    <div class="rn-contact-page ptb--120 bg_color--1">
        <div class="container">
            <div class="row row--35 align-items-start">
                <div class="col-lg-12 order-2 order-lg-1">
                    <div class="section-title text-left mb--50">
                        <h2 class="title">Contact</h2>
                        <div class="im_address">
                            <span>Call us directly:</span><a class="link im-hover" href="phone">{{ setting('site.phone_number') }}</a>
                        </div>
                        <div class="im_address mt--5">
                            <span>Contact Email:</span><a class="link im-hover" href="email">contact@lidinternational.org</a>
                        </div>
                        <div class="im_address mt--5">
                            <span>Bank account number</span><a class="link im-hover" href="email">{{ setting('site.bank_account') }}</a>
                        </div>
                    </div>
                    @if($message && $message === "success")
                        <div class="alert alert-success">Message sent successfully</div>
                    @elseif($message !== null)
                        <div class="alert alert-danger">{{ $message }}</div>
                    @endif
                    <form id="contact-form" method="POST" action="{{ route('donation') }}" class="rwt-dynamic-form row contact-form--1">
                        {{ csrf_field() }}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="currency"></label>
                                <select name="currency" id="currency" >
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="FCFA">FCFA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="amount"></label>
                                <input name="amount" id="amount" type="number" placeholder="Amount">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="type"></label>
                                <select name="type" id="type" >
                                    <option value="Sponsor a child">Sponsor a Child</option>
                                    <option value="To a widow">To a widow</option>
                                    <option value="To support the PDI">To Support the PDI</option>
                                    <option value="For the great commission">For the great commission</option>
                                    <option value="For clean water">For clean water</option>
                                </select>
                            </div>
                        </div>
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
                            <div class="form-submit">
                                <button type="submit" id="submit" class="btn-default btn-block btn-primary">Validate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact area End -->
@endsection