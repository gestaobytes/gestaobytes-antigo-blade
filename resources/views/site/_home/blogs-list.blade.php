@extends('layouts.frontend.blog')

@section('content')

@foreach ($blogs as $post)
<div class="blog-item">
    <h2 class="blog-item-title">
        <a href="{{"$urlBlogs/$post->SUBCAT_SLUG/$post->POST_SLUG"}}">{{$post->POST_TITULOCHAMADA}}</a>
    </h2>
    <div class="blog-item-data">
        <a href="#"><i class="icon-calendar-full"></i> {{\Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->formatLocalized('%d %B, %Y')}}</a>
        <span class="separator">&nbsp;</span>
        <a href="{{url("$post->SUBCAT_SLUG")}}"><i class="icon-list4"></i> {{$post->SUBCAT_TITULO}}</a> 
        <span class="separator">&nbsp;</span>
        <br class="visible-xs">
    </div>


    @if(isset($post->POST_IMAGE) && $post->POST_IMAGE!='')
    <div class="blog-media">
        <img src="{{asset("img/fotos/$post->POST_IMAGE")}}" alt="{{$post->POST_TITULOCHAMADA}}" />
    </div>
    @endif


    {{$post->SUBCAT_TITULO}}

    <div class="blog-item-body">
        <p></p>
    </div>


    <div class="blog-item-foot">
        <a href="{{"$urlBlogs/$post->SUBCAT_SLUG/$post->POST_SLUG"}}" class="medium-btn3 btn btn-nofill green-text">Veja o artigo</a>
    </div>
</div>



@endforeach













@push('title') <title> Blogs - Gestão Bytes</title> @endpush
@push('description')
<meta name="description" content="Artigos e matérias sobre gestão pública e privada e diversos assuntos tecnológicos" /> @endpush
@push('keywords')
<meta name="keywords" content="trendy, digital agency, seo agency, startups" /> @endpush


@endsection