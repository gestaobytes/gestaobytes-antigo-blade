@extends('layouts.frontend.site')

@section('content')

<section class="blog-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-white o-hidden blog-content">
    <div class="container relative">
        <div class="row">
            <div class="col-sm-8">
                @foreach ($postBlogs as $post)
                    <h2 class="blog-item-title">{{$post->POST_TITULOCHAMADA}}</h2>

                    <div class="blog-item-data">
                        <a href="#">
                            <i class="icon-calendar-full"></i> {{\Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->formatLocalized('%d %B, %Y')}}</a>
                        <span class="separator">&nbsp;</span>
                        <a href="#">
                            <i class="icon-list4"></i> Design Category</a>
                        <span class="separator">&nbsp;</span>
                    </div>

                    <div class="blog-media">
                        <a href="blog-single-sidebar-right.html">
                            <img src="{{asset("img/fotos/$post->POST_IMAGE")}}" alt="{{$post->POST_TITULOCHAMADA}}" />
                        </a>
                    </div>

                    <div class="blog-item-body">
                        <p>{!! $post->POST_TEXTO !!}</p>
                    </div>

                    <div class="blog-post-share clearfix">
                        <ul class="social-links clearfix">
                            <li>Share this post:</li>
                            <li> <a href="#"> <span class="fa fa-facebook"></span> </a> </li>
                            <li> <a href="#"> <span class="fa fa-twitter"></span> </a> </li>
                            <li> <a href="#"> <span class="fa fa-google-plus"></span> </a> </li>
                            <li> <a href="#"> <span class="fa fa-instagram"></span> </a> </li>
                            <li> <a href="#"> <span class="fa fa-pinterest"></span> </a> </li>
                            <li> <a href="#"> <span class="fa fa-linkedin"></span> </a> </li>
                        </ul>
                    </div>

                    <section class="bg-white o-hidden blog-content author-sec ">
                        <h2 class="b-clor">Author Details</h2>
                        <hr class="dark-line">
                        <div class="row">
                            <div class="blogger-img">
                                <img src="images/blog/blog-details-pro-pic.png" class="img-responsive" alt="blog"> </div>
                            <div class="blog-description">
                                <p class="bloger-name">JOHN KENNY</p>
                                <p class="regular-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                    ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                    exerci tation ullamcorper suscipit lobortis nisl.</p>
                            </div>
                        </div>
                    </section>
                    
                    
                    
                    
                    
                    
                    
                    <section class="bg-white o-hidden blog-design-category blog-rel-post">
                        <!--blog content row one-->
                        <!--section title -->
                        <h2 class="b-clor">Artigos relacionados</h2>
                        <hr class="dark-line">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="box-content-with-img ">
                                    <img src="images/blog/blog-img-1.jpg" class="img-responsive" alt="blog image">
                                    <div class="box-content-text equalheight" style="height: 293px;">
                                        <p class="gray-text">
                                            <span class="icon-calendar-full"></span>31 August, 2016</p>
                                        <h3 class="semi-bold">
                                            <a href="#">How to design effective teams?</a>
                                        </h3>
                                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum my nibh
                                            euismod tincidunt.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end blog content box-->
                            <!--blog content box-->
                            <div class="col-sm-6">
                                <div class="box-content-with-img ">
                                    <img src="images/blog/blog-img-2.jpg" class="img-responsive" alt="blog image">
                                    <div class="box-content-text equalheight" style="height: 293px;">
                                        <p class="gray-text">
                                            <span class="icon-calendar-full"></span>28 August, 2016</p>
                                        <h3 class="semi-bold">
                                            <a href="#">Elevating design through training</a>
                                        </h3>
                                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum my nibh
                                            euismod tincidunt.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end blog content box-->
                        </div>
                        <!--end blog content row one-->
                    </section>
                    
                    

                @endforeach
            </div>

            











            <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                <!-- Search Widget -->
                <div class="widget">
                    <form class="form-inline form">
                        <div class="search-wrap">
                            <button class="search-button animate" type="submit" title="Start Search">
                                <i class="icon-magnifier"></i>
                            </button>
                            <input type="text" class="form-control search-field" placeholder="Search...">
                        </div>
                    </form>
                </div>
                <!-- End Search Widget -->
                <!-- Widget -->
                <div class="widget">
                    <h5 class="widget-title font-alt">Postagens mais recentes</h5>
                    <div class="widget-body">
                        <ul class="clearlist widget-posts">
                            @foreach ($latestsBlogs as $blog)
                            <li class="clearfix">
                                <div class="widget-posts-descr">
                                    <a href="{{url("/$blog->SUBCAT_SLUG/$blog->POST_SLUG")}}">
                                        {{$blog->POST_TITULOCHAMADA}}
                                    </a> {{\Carbon\Carbon::parse($blog->created_at)->locale('pt_BR')->formatLocalized('%d %B, %Y')}} 
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="widget">
                    <h5 class="widget-title font-alt">Categorias</h5>
                    <div class="widget-body">
                        <ul class="clearlist widget-menu">
                            @foreach ($categoriesBlogs as $categories)
                                <li>
                                    <a href="{{url("/$categories->SUBCAT_SLUG")}}" title="">{{$categories->SUBCAT_TITULO}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="widget">
                    <h5 class="widget-title font-alt">Tags</h5>
                    <div class="widget-body">
                        <div class="tags">
                            <a href="">Design</a>
                            <a href="">Development</a>
                            <a href="">Social Media</a>
                            <a href="">SEO</a>
                            <a href="">PPC</a>
                            <a href="">Online Marketing</a>
                            <a href="">Back Office</a>
                        </div>
                    </div>
                </div>
                <!-- End Widget -->
                <!-- Widget -->
                <div class="widget">
                    <h5 class="widget-title font-alt">Archive</h5>
                    <div class="widget-body">
                        <ul class="clearlist widget-menu">
                            <li>
                                <a href="#" title="">May 2017</a>
                            </li>
                            <li>
                                <a href="#" title="">April 2017</a>
                            </li>
                            <li>
                                <a href="#" title="">February 2017</a>
                            </li>
                            <li>
                                <a href="#" title="">April 2017</a>
                            </li>
                            <li>
                                <a href="#" title="">January 2017</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
</section>
<!-- ++++ end blog Standard content ++++ -->
<!--footer-->










@push('title') <title> {{ $post->POST_TITULOCHAMADA }} - Gestão Bytes</title> @endpush
@push('description')
<meta name="description" content="Trendy HTML Template for Digital Agencies" /> @endpush
@push('keywords')
<meta name="keywords" content="trendy, digital agency, seo agency, startups" /> @endpush


@endsection