@extends('layouts.frontend.site')
@push('class-body') class="test-class" @endpush








@section('content')
<div class="banner small-agency-home-header-bg" id="top">
    <svg class="bg-shape shape-home-banner reveal-from-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="779px" height="759px">
        <defs>
            <linearGradient id="PSgrad_01" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
            </linearGradient>
        </defs>
        <path fill-rule="evenodd" fill="url(#PSgrad_01)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z" />
    </svg>

    <div class="container">
        <div class="banner-content">
            <h1>Business Goals
                <br>Achieved with Design</h1>
            <p class="section-subheading">Praesent rhoncus, felis nec accumsan mattis, urna urna
                <br>laoreet acus vel ultrices.</p>
            <a href="portfolio.html" class="custom-btn btn-big grad-style-ef page-scroll">OUR PORTFOLIO</a>
        </div>
    </div>
</div>

<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 m-b-30">
                <a href="logo-and-branding.html" class="service-box text-center content-block">
                    <div class="box-bg grad-style-cd"></div>
                    <span class="icon-container grad-style-cd-light">
                        <i class="ml-des-62-Precision-compasses-graphics-design-tool-interface txt-grad-cd"></i>
                    </span>
                    <h5 class="text-center">Logo &amp; Branding</h5>
                    <p>Pellentesque sed pellentesque felis. Nam tristique ipsum eget magna scelerisque interdum.
                        Fusce at
                        lorem eget lacus congue tristique.</p>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 m-b-30">
                <a href="website-design.html" class="service-box text-center content-block">
                    <div class="box-bg grad-style-ab"></div>
                    <span class="icon-container grad-style-ab-light">
                        <i class="ml-des-57-upload-download-sync-application-device-mobile-computer txt-grad-ab"></i>
                    </span>
                    <h5 class="text-center">Website Development</h5>
                    <p>Donec eget ex quam. Aenean id convallis mi, vitae tincidunt leo. Ut bibendum, nunc eget
                        aliquet eleifend,
                        purus lacus lobortis.</p>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 m-b-30">
                <a href="mobile-app-development.html" class="service-box text-center content-block">
                    <div class="box-bg grad-style-ef"></div>
                    <span class="icon-container grad-style-ef-light">
                        <i class="ml-tec-45-responsive-mobile-phone-tablet-computer-desktop-monitor-laptop txt-grad-ef"></i>
                    </span>
                    <h5 class="text-center">Mobile App Development</h5>
                    <p>Morbi ullamcorper ipsum ipsum, ut dictum mi hendrerit sit amet. Aliquam tincidunt rhoncus
                        ligula,
                        vel porta ante pulvinar eget suspendisse.</p>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 m-b-30">
                <a href="search-engine-optimization.html" class="service-box text-center content-block">
                    <div class="box-bg grad-style-cd"></div>
                    <span class="icon-container grad-style-cd-light">
                        <i class="ml-tec-8-search-magnifier-computer-desktop-monitor-laptop txt-grad-cd"></i>
                    </span>
                    <h5 class="text-center">Search Engine Optimization</h5>
                    <p>Morbi ullamcorper ipsum ipsum, ut dictum mi hendrerit sit amet. Aliquam tincidunt rhoncus
                        ligula,
                        vel porta ante pulvinar eget suspendisse.</p>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 m-b-30">
                <a href="pay-per-click.html" class="service-box text-center content-block">
                    <div class="box-bg grad-style-ab"></div>
                    <span class="icon-container grad-style-ab-light">
                        <i class="ml-symtwo-34-cursor-click-browser-website-arrow-computer txt-grad-ab"></i>
                    </span>
                    <h5 class="text-center">Pay-Per-Click</h5>
                    <p>Donec eget ex quam. Aenean id convallis mi, vitae tincidunt leo. Ut bibendum, nunc eget
                        aliquet eleifend,
                        purus lacus lobortis.</p>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 m-b-30">
                <a href="social-media-marketing.html" class="service-box text-center content-block">
                    <div class="box-bg grad-style-ef"></div>
                    <span class="icon-container grad-style-ef-light">
                        <i class="ml-dat-63-database-computer-network-internet-globe-server txt-grad-ef"></i>
                    </span>
                    <h5 class="text-center">Social Media Marketing</h5>
                    <p>Morbi ullamcorper ipsum ipsum, ut dictum mi hendrerit sit amet. Aliquam tincidunt rhoncus
                        ligula,
                        vel porta ante pulvinar eget suspendisse.</p>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="about-us">
    <svg class="bg-shape shape-about reveal-from-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="779px" height="759px">
        <defs>
            <linearGradient id="PSgrad_02" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
            </linearGradient>
        </defs>
        <path fill-rule="evenodd" fill="url(#PSgrad_02)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z" />
    </svg>
    <div class="video-play-bg grad-style-cd">
        <a href="http://www.youtube.com/watch?v=F85Az1VXbvg" class="video-play-btn video-popup">
            <i class="fas fa-play"></i>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto">
                <h2>We Lead from the Front</h2>
                <p>Aenean consectetur massa quis sem volutpat, a condimentum tortor pretium. Cras id ligula
                    consequat, sagittis
                    nulla at, sollicitudin lorem. Orci varius natoque penatibus et magnis dis parturient montes.</p>
                <p>Cras id ligula consequat, sagittis nulla at, sollicitudin lorem. Orci varius natoque penatibus
                    et magnis
                    dis parturient montes, nascetur ridiculus mus. Phasellus eleifend, dolor vel condimentum
                    imperdiet.</p>
                <div class="counter-wrapper d-flex justify-content-between">
                    <div class="inner-block">
                        <div class="counter-block d-block txt-grad-ef">
                            <span class="counter">450</span>+
                        </div>
                        HAPPY
                        <br>CLIENTS
                    </div>
                    <div class="inner-block">
                        <div class="counter-block d-block txt-grad-ab">
                            <span class="counter">2500</span>+
                        </div>
                        PROJECTS
                        <br>COMPLETED
                    </div>
                    <div class="inner-block">
                        <div class="counter-block d-block txt-grad-cd">
                            <span class="counter">4510</span>+
                        </div>
                        RUNNING
                        <br>PROJECTS
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="featured-projects section-padding">
    <svg class="bg-shape shape-project reveal-from-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="779px" height="759px">
        <defs>
            <linearGradient id="PSgrad_03" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
            </linearGradient>

        </defs>
        <path fill-rule="evenodd" fill="url(#PSgrad_03)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z" />
    </svg>
    <div class="container">
        <h2 class="text-center">Our Impressive Portfolio</h2>
        <p class="section-subheading text-center">
            Cras ex odio, luctus vel rhoncus quis, pellentesque a urna.
        </p>

        <div class="featured-project-showcase text-center">
            <div class="row equalHeightWrapper">
                <div class="grid-item col-md-6 col-lg-4">
                    <a href="#" class="featured-content-block content-block" data-toggle="modal" data-target="#featured-project-modal">
                        <div class="img-container">
                            <img src="{{asset('frontend/images/featured-projects/featured-project-1.jpg')}}" alt="Project image" class="img-fluid">
                        </div>
                        <h5 class="equalHeight">
                            <span class="content-block__sub-title">Web Design</span>
                            Creative Web Design
                        </h5>
                    </a>
                </div>

                <div class="grid-item col-md-6 col-lg-4">
                    <a href="#" class="featured-content-block content-block" data-toggle="modal" data-target="#featured-project-modal">
                        <div class="img-container">
                            <img src="{{asset('frontend/images/featured-projects/featured-project-2.jpg')}}" alt="Project image" class="img-fluid">
                        </div>
                        <!-- End of .img-container -->
                        <h5 class="equalHeight">
                            <span class="content-block__sub-title">Web Design</span>
                            Complex Deshboard
                        </h5>
                    </a>
                    <!-- End of .featured-content-block -->
                </div>
                <!-- End of .grid-item -->
                <div class="grid-item col-md-6 col-lg-4">
                    <a href="#" class="featured-content-block content-block" data-toggle="modal" data-target="#featured-project-modal">
                        <div class="img-container">
                            <img src="{{asset('frontend/images/featured-projects/featured-project-3.jpg')}}" alt="Project image" class="img-fluid">
                        </div>
                        <!-- End of .img-container -->
                        <h5 class="equalHeight">
                            <span class="content-block__sub-title">App Design</span>
                            Food App Design
                        </h5>
                    </a>
                    <!-- End of .featured-content-block -->
                </div>
                <!-- End of .grid-item -->
                <div class="grid-item col-md-6 col-lg-4">
                    <a href="#" class="featured-content-block content-block" data-toggle="modal" data-target="#featured-project-modal">
                        <div class="img-container">
                            <img src="{{asset('frontend/images/featured-projects/featured-project-4.jpg')}}" alt="Project image" class="img-fluid">
                        </div>
                        <!-- End of .img-container -->
                        <h5 class="equalHeight">
                            <span class="content-block__sub-title">Web Design</span>
                            Digital Agency
                        </h5>
                    </a>
                    <!-- End of .featured-content-block -->
                </div>
                <!-- End of .grid-item -->

                <div class="grid-item col-md-6 col-lg-4">
                    <a href="#" class="featured-content-block content-block" data-toggle="modal" data-target="#featured-project-modal">
                        <div class="img-container">
                            <img src="{{asset('frontend/images/featured-projects/featured-project-5.jpg')}}" alt="Project image" class="img-fluid">
                        </div>
                        <!-- End of .img-container -->
                        <h5 class="equalHeight">
                            <span class="content-block__sub-title">Web Design</span>
                            Agency Web Application
                        </h5>
                    </a>
                    <!-- End of .featured-content-block -->
                </div>
                <!-- End of .grid-item -->

                <div class="grid-item col-md-6 col-lg-4">
                    <a href="#" class="featured-content-block content-block" data-toggle="modal" data-target="#featured-project-modal">
                        <div class="img-container">
                            <img src="{{asset('frontend/images/featured-projects/featured-project-6.jpg')}}" alt="Project image" class="img-fluid">
                        </div>
                        <!-- End of .img-container -->
                        <h5 class="equalHeight">
                            <span class="content-block__sub-title">Web Design</span>
                            Digital Agency
                        </h5>
                    </a>
                    <!-- End of .featured-content-block -->
                </div>
                <!-- End of .grid-item -->
            </div>
            <!-- End of .grid -->
            <a href="portfolio.html" class="custom-btn btn-big grad-style-ef btn-full">DISCOVER MORE WORKS</a>
        </div>
        <!-- End of .template-showcase -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .featured-projects -->

<!-- case-study starts
        ======================================= -->
<section class="case-study small-agency-case-study">
    <svg class="bg-shape shape-case reveal-from-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="779px" height="759px">
        <defs>
            <linearGradient id="PSgrad_04" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
            </linearGradient>

        </defs>
        <path fill-rule="evenodd" fill="url(#PSgrad_04)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z" />
    </svg>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="case-study-slider">
                    <div class="item">
                        <h2>Make Your Business Go Online Today</h2>
                        <p>Fusce consectetur sagittis metus, ut pretium purus interdum at. Suspendisse turpis et
                            nunc fringilla
                            mattis ac sed orci. Nunc suscipit blandit diam pretium. Ut risus justo, feugiat vel
                            posuere
                            in. </p>
                        <div class="btn-container">
                            <a href="case-studies-details.html" class="custom-btn btn-big grad-style-ab">SEE THE
                                CASE STUDY</a>
                            <a href="http://www.youtube.com/watch?v=F85Az1VXbvg" class="video-play-btn video-popup">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End of .item -->

                    <div class="item">
                        <h2>Make Your Business Go Online Today</h2>
                        <p>Fusce consectetur sagittis metus, ut pretium purus interdum at. Suspendisse turpis et
                            nunc fringilla
                            mattis ac sed orci. Nunc suscipit blandit diam pretium. Ut risus justo, feugiat vel
                            posuere
                            in. </p>
                        <div class="btn-container">
                            <a href="case-studies-details.html" class="custom-btn btn-big grad-style-ab">SEE THE
                                CASE STUDY</a>
                            <a href="http://www.youtube.com/watch?v=F85Az1VXbvg" class="video-play-btn video-popup">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End of .item -->

                    <div class="item">
                        <h2>Make Your Business Go Online Today</h2>
                        <p>Fusce consectetur sagittis metus, ut pretium purus interdum at. Suspendisse turpis et
                            nunc fringilla
                            mattis ac sed orci. Nunc suscipit blandit diam pretium. Ut risus justo, feugiat vel
                            posuere
                            in. </p>
                        <div class="btn-container">
                            <a href="case-studies-details.html" class="custom-btn btn-big grad-style-ab">SEE THE
                                CASE STUDY</a>
                            <a href="http://www.youtube.com/watch?v=F85Az1VXbvg" class="video-play-btn video-popup">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End of .item -->
                </div>
                <!-- End of .case-study-slider -->
            </div>
            <div class="img-container col-lg-6">
                <img src="{{asset('frontend/images/case-study/case-study-slide-1.png')}}" alt="case study image" class="img-fluid" />
            </div>
        </div>
    </div>
    <!-- End of .container -->
</section>
<!-- End of .case-study -->

<!-- Partners starts
        ======================================= -->
<div class="clients">
    <div class="container">
        <div class="row justify-content-center clients-wrapper">
            <div class="client">
                <img src="{{asset('frontend/images/clients/client-1.png')}}" alt="clients' logo">
            </div>
            <div class="client">
                <img src="{{asset('frontend/images/clients/client-2.png')}}" alt="clients' logo">
            </div>
            <div class="client">
                <img src="{{asset('frontend/images/clients/client-3.png')}}" alt="clients' logo">
            </div>
            <div class="client">
                <img src="{{asset('frontend/images/clients/client-4.png')}}" alt="clients' logo">
            </div>
            <div class="client">
                <img src="{{asset('frontend/images/clients/client-5.png')}}" alt="clients' logo">
            </div>
            <div class="client">
                <img src="{{asset('frontend/images/clients/client-6.png')}}" alt="clients' logo">
            </div>
            <div class="client">
                <img src="{{asset('frontend/images/clients/client-7.png')}}" alt="clients' logo">
            </div>
        </div>
    </div>
</div>


<section class="latest-news section-padding">
    <div class="container">
        <h2>Artigos mais recentes</h2>
    </div>
    <div class="news-slider common-slider">
        <div class="carousel-container equalHeightWrapper">
            @foreach ($blogs as $blog)
            <div class="item">
                <a href="{{url("/$blog->SUBCAT_SLUG/$blog->POST_SLUG")}}" class="news-content-block content-block">
                    <div class="img-container">
                        <img src="{{asset("img/thumbs/$blog->POST_IMAGE")}}" alt="Project image" class="img-fluid">
                    </div>
                    <h5 class="equalHeight">
                        <span class="content-block__sub-title">
                            {{\Carbon\Carbon::parse($blog->created_at)->locale('pt_BR')->formatLocalized('%d %B, %Y')}}
                        </span>
                        {{$blog->POST_TITULOCHAMADA}}
                    </h5>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


@push('title') <title>Gestão Bytes</title> @endpush
@push('description') <meta name="description" content="Trendy HTML Template for Digital Agencies"/> @endpush
@push('keywords') <meta name="keywords" content="trendy, digital agency, seo agency, startups"/> @endpush


@endsection