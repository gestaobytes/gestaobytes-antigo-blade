@extends('layouts.frontend.blog')

@section('content')


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
    <img src="{{asset("img/fotos/$post->POST_IMAGE")}}" alt="{{$post->POST_TITULOCHAMADA}}" />
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













@push('title') <title> {{ $post->POST_TITULOCHAMADA }} - Gestão Bytes</title> @endpush
@push('description')
<meta name="description" content="Trendy HTML Template for Digital Agencies" /> @endpush
@push('keywords')
<meta name="keywords" content="trendy, digital agency, seo agency, startups" /> @endpush


@endsection