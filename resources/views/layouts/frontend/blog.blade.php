<!DOCTYPE html>
<html lang="zxx">

@include('layouts.frontend._head')

<body class="blog-version-1">
    @include('layouts.frontend._top')
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
                    @yield('content')
                </div>
                <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
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
                    <div class="widget">
                        <h5 class="widget-title font-alt">Postagens mais recentes</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-posts">
                                @foreach ($latestsBlogs as $blog)
                                <li class="clearfix">
                                    <div class="widget-posts-descr">
                                        <a href="{{"$urlBlogs/$blog->SUBCAT_SLUG/$blog->POST_SLUG"}}">
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
                                        <a href="{{"$urlBlogs/$categories->SUBCAT_SLUG"}}" title="">{{$categories->SUBCAT_TITULO}}</a>
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
                </div>
            </div>
        </div>
    </section>
    


    @include('layouts.frontend._footer')
    @include('layouts.frontend._modals')
    @include('layouts.frontend._scripts')
    
</body>



</html>


