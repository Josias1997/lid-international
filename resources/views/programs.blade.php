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
                    <div class="col-lg-6">
                        <div class="item-portfolio-static">
                            <div>
                                <div class="portfolio-static">
                                    <div class="thumbnail-inner">
                                        <div class="thumbnail"><a href="{{ route('programs') }}"><img src="/images/logo/ecole.jpg" alt="Program"></a></div>
                                    </div>
                                    <div class="content">
                                        <div class="inner">
                                            <h4>Education Program</h4>
                                            <p>Eucation Program are many objectifs:
                                                <ul type="square">
                                                    <li>  Construction of classrooms in the 45 provinces of Burkina </li>

                                                    <li>  Sponsored 10.000 displaced and vulnerable children </li>

                                                    <li>  Empowered teachers capacity</li>

                                                </ul>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-portfolio-static">
                            <div>
                                <div class="portfolio-static">
                                    <div class="thumbnail-inner">
                                        <div class="thumbnail"><a href="{{ route('programs') }}"><img src="/images/logo/sanitaire.jpg" alt="Portfolio Images"></a></div>
                                    </div>
                                    <div class="content">
                                       <div class="inner">
                                            <h4>Heath Program</h4>
                                            <p>Heath Program are many objectifs:
                                                <ul type="square">
                                                    <li>  Construct and equipthe Heath center in the 45 provinces of Burkina  </li>

                                                    <li>  Build a laboratories</li>

                                                    <li>  Empowered the capacity of nurses</li>

                                                </ul>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-portfolio-static">
                            <div>
                                <div class="portfolio-static">
                                    <div class="thumbnail-inner">
                                        <div class="thumbnail"><a href="{{ route('programs') }}"><img src="/images/logo/water.jpg" alt="Portfolio Images"></a></div>
                                    </div>
                                    <div class="content">
                                       <div class="inner">
                                            <h4>Wash Program</h4>
                                            <p>Wash Program are many objectifs:
                                                <ul type="square">
                                                    <li>  Build  latrines for vulnerable people</li>

                                                    <li>  Install and equip with solar system  water pump</li>
                                                    <!--<li> Other</li>-->

                                                </ul>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-portfolio-static">
                            <div>
                                <div class="portfolio-static">
                                    <div class="thumbnail-inner">
                                        <div class="thumbnail"><a href="{{ route('programs') }}"><img src="/images/logo/evolution.jpg" alt="Portfolio Images"></a></div>
                                    </div>
                                    <div class="content">
                                        <div class="inner">
                                            <h4>Relief aid </h4>
                                            <p>Relief aid are many objectifs:
                                                <ul type="square">
                                                    <li>  Support the widow</li>

                                                    <li>  Other </li>
                                                    <!--<li> Other</li> --> 

                                                </ul>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-portfolio-static">
                            <div>
                                <div class="portfolio-static">
                                    <div class="thumbnail-inner">
                                        <div class="thumbnail"><a href="{{ route('programs') }}"><img src="/images/logo/Evangelisation.jpg" alt="Program"></a></div>
                                    </div>
                                    <div class="content">
                                        <div class="inner">
                                            <h4>Evanlization Program</h4>
                                            <p>Evanlization Program are many objectifs:
                                                <ul type="square">
                                                    <li>  Trained leaders, Evangelist to reach the unreached people for Christ</li>

                                                    <li>  Organised big crusades for 3 days each until 2025 </li>

                                                </ul>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-portfolio-static">
                            <div>
                                <div class="portfolio-static">
                                    <div class="thumbnail-inner">
                                        <div class="thumbnail"><a href="{{ route('programs') }}"><img src="/images/logo/entreprenariat.jpg" alt="Portfolio Images"></a></div>
                                    </div>
                                    <div class="content">
                                        <div class="inner">
                                            <h4>Job booster Program</h4>
                                            <p>Job booster Program are many objectifs:
                                                <ul type="square">
                                                    <li> Empowering the wifes and youth for entrepreneurship</li>
                                                    <li>  Other </li>

                                                </ul>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAin Paeg End -->
@endsection