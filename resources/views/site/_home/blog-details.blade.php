@extends('layouts.frontend.site')

@section('content')

@push('class-body') class="body-bg-style-2 inner-page" @endpush





<div class="page-wrapper">
 
    <div class="inner-page-banner">
        <div class="container text-center">
            <h1>Blog</h1>
        </div>
    </div>

    <div class="blog-post-details">
        <div class="container">
            <svg class="bg-shape shape-blog-details reveal-from-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="779px" height="759px">
                <defs>
                    <linearGradient id="PSgrad_03" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                        <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
                    </linearGradient>

                </defs>
                <path fill-rule="evenodd" fill="url(#PSgrad_03)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z" />
            </svg>
            <div class="row">
                <div class="col-md-8">
                    <div class="article-wrapper">
                        <article class="blog-details">
                            @foreach ($postBlogs as $post)
                                <h2>
                                    <span>{{$post->SUBCAT_TITULO}}</span>
                                    {{$post->POST_TITULOCHAMADA}}
                                </h2>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="post-info">
                                            <a href="#">
                                                <i class="ml-tim-35-calander-date-schedule-clock-time-alarm-watch"></i>
                                                {{\Carbon\Carbon::parse($post->datadepostagem)->locale('pt_BR')->formatLocalized('%d %B, %Y')}}
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <ul class="social-icons text-md-right">
                                            <li>
                                                <a href="http://www.behance.net/" target="_blank" rel="noopener">
                                                    <i class="fab fa-behance"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://twitter.com/" target="_blank" rel="noopener">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://dribbble.com/" target="_blank" rel="noopener">
                                                    <i class="fab fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End of .social-icons -->
                                    </div>
                                </div>
                                
                                @if(isset($post->POST_IMAGE) && ($post->POST_IMAGE != ''))
                                    <img src="{{asset("img/fotos/$post->POST_IMAGE")}}" alt="blog details image" class="img-fluid blog-details-img" />
                                @endif

                                <p>{!! $post->POST_TEXTO !!}</p>
                            @endforeach
                        </article>
                      

                        <div class="author-details">
                            <h2>author Details</h2>
                            <div class="media">
                                <a href="#">
                                    <img class="author-thumbnail" src="images/news/author-thumbnail.jpg" alt="author thumbnail image">
                                </a>
                                <div class="media-body">
                                    <h5>Media heading</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                    Donec lacinia congue felis in faucibus.
                                </div>
                                <!-- End of .media-body -->
                            </div>
                        </div>
                        <!-- End of .author-details -->

                        <div class="blog-details-prev-next d-flex justify-content-between">
                            <a href="#">
                                <i class="ml-symone-67-arrow-left-right-up-down-increase-decrease"></i>Prev</a>
                            <a href="#">Next
                                <i class="ml-symone-68-arrow-left-right-up-down-increase-decrease"></i>
                            </a>
                        </div>
                        <!-- End of .blog-details-prev-next -->
                    </div>
                    <!-- End of .article-wrapper -->
                </div>
                <div class="col-md-4">
                    <div class="article-wrapper">
                        <article class="blog-details">
                            <div class="blog-box">
                                    <h5>Pesquisar no Blog</h5>
                                <input type="text" name="email" placeholder="Palavra(s) chave(s)"/>
                                <button type="submit">Search</button>
                            </div>


                            <div class="blog-box">
                                <h5>Postagens recentes</h5>
                                @foreach ($latestsBlogs as $latestsBlog)
                                <hr/>
                                    @if(isset($latestsBlog->POST_IMAGE) && ($latestsBlog->POST_IMAGE != ''))
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="resposive-img-thumb" src="{{asset("img/thumbs/$latestsBlog->POST_IMAGE")}}" alt="author thumbnail image" />
                                            </div>
                                            <div class="col-md-8">
                                                <h6>{{$latestsBlog->POST_TITULOCHAMADA}}</h6>
                                            </div>
                                        </div>
                                    </a>
                                    @else
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6>{{$latestsBlog->POST_TITULOCHAMADA}}</h6>
                                            </div>
                                        </div>
                                    </a>
                                    @endif
                                @endforeach

                            </div>

                            




                            

                            
                          


                            
                            
                        </article>
                        <!-- End of .blog-details -->

                        

                        <div class="blog-details-prev-next d-flex justify-content-between">
                            <a href="#">
                                <i class="ml-symone-67-arrow-left-right-up-down-increase-decrease"></i>Prev</a>
                            <a href="#">Next
                                <i class="ml-symone-68-arrow-left-right-up-down-increase-decrease"></i>
                            </a>
                        </div>
                        <!-- End of .blog-details-prev-next -->
                    </div>
                    <!-- End of .article-wrapper -->
                </div>
            </div>
        </div>
    </div>





    <section class="related-post blog-details-related-post section-padding">
        <svg class="bg-shape shape-project reveal-from-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="779px" height="759px">
            <defs>
                <linearGradient id="PSgrad_033" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                    <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                    <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
                </linearGradient>

            </defs>
            <path fill-rule="evenodd" fill="url(#PSgrad_033)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z" />
        </svg>
        <div class="container">
            <div class="blog-by-category single-cat">
                <h2 class="text-center">Related Posts</h2>
                <div class="blog-grid text-center">
                    <div class="row equalHeightWrapper">
                        <div class="item col-md-6 col-lg-4">
                            <a href="blog-details.html" class="news-content-block content-block">
                                <div class="img-container">
                                    <img src="images/news/news-3.jpg" alt="Project image" class="img-fluid">
                                </div>
                                <!-- End of .img-container -->
                                <h5 class="equalHeight">
                                    <span class="content-block__sub-title">19 May, 2018</span>
                                    How to Become A Software Engineer?
                                </h5>
                            </a>
                            <!-- End of .featured-content-block -->
                        </div>
                        <!-- End of .item -->

                        <div class="item col-md-6 col-lg-4">
                            <a href="blog-details.html" class="news-content-block content-block">
                                <div class="img-container">
                                    <img src="images/news/news-4.jpg" alt="Project image" class="img-fluid">
                                </div>
                                <!-- End of .img-container -->
                                <h5 class="equalHeight">
                                    <span class="content-block__sub-title">30 May , 2018</span>
                                    What Does a Web Designer Do?
                                </h5>
                            </a>
                            <!-- End of .featured-content-block -->
                        </div>
                        <!-- End of .item -->

                        <div class="item col-md-6 col-lg-4">
                            <a href="blog-details.html" class="news-content-block content-block">
                                <div class="img-container">
                                    <img src="images/news/news-5.jpg" alt="Project image" class="img-fluid">
                                </div>
                                <!-- End of .img-container -->
                                <h5 class="equalHeight">
                                    <span class="content-block__sub-title">2 June, 2018</span>
                                    What Do You Do As a Web Developer?
                                </h5>
                            </a>
                            <!-- End of .featured-content-block -->
                        </div>
                        <!-- End of .item -->
                    </div>
                    <!-- End of .row -->
                </div>
                <!-- End of .blog-grid -->
            </div>
            <!-- End of .blog-by-category -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .featured-projects -->

    <!-- Newsletter starts
    ======================================= -->
    

    
</div>
<!-- End of .page-wrapper -->








@push('title') <title> {{ $post->POST_TITULOCHAMADA }} - Gestão Bytes</title> @endpush
@push('description')
<meta name="description" content="Trendy HTML Template for Digital Agencies" /> @endpush
@push('keywords')
<meta name="keywords" content="trendy, digital agency, seo agency, startups" /> @endpush


@endsection