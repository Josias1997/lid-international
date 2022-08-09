@extends('layouts.app')
@section('content')
	    <!-- Bread Crumb Aerea -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--15" data-black-overlay="6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">Programs</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bread Crumb Aerea End -->

    <!-- MAin Paeg -->
    <main class="page-wrapper">
        <div class="rn-portfolio-area ptb--120 bg_color--1 line-separator">
            <div class="container">
                <div class="row">
                    @foreach ($programs as $program)
                        <div class="col-lg-6">
                            <div class="item-portfolio-static">
                                <div>
                                    <div class="portfolio-static">
                                        <div class="thumbnail-inner">
                                        @foreach (json_decode($program->images) as $image)
                                            <div class="thumbnail mt-4"><a href="{{ route('get-program', $program->id) }}"><img src="/storage/{{ $image }}" alt="Program"></a></div>
                                        @endforeach
                                        </div>
                                        <div class="content">
                                            <div class="inner">
                                                <h4>{{ $program->name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <!-- MAin Paeg End -->
@endsection