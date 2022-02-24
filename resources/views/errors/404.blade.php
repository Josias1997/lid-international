@extends('layouts.app')
@section('content')
	<div class="error-page-inner bg_color--4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner">
                        <h1 class="title theme-gradient">404!</h1>
                        <h3 class="sub-title">Page not found</h3><span>The page you were looking for could not be
                            found.</span>
                        <div class="error-button"><a class="btn-default" href="{{ route('home') }}">Back To Homepage</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection