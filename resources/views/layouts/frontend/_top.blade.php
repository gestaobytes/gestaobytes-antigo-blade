<div class="header-wrapper">
    <header id="top">
        <div class="container">
            <div class="form-element hidden-xs pull-left">
                <form action="#" method="get" class="form-inline">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                    <button type="submit" class="search-btn">
                        <i class="icon-magnifier"></i>
                    </button>
                </form>
            </div>
            <div class="contact-info clearfix">
                <ul class="pull-right list-inline">
                    <li><a href="tel:06332241316"><i class="icon-telephone"></i>(63)3224.1316</a></li>
                    <li><a href="mailto:gestaobytes@gmail.com"><i class="icon-envelope"></i>gestaobytes@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container no-padding">
        <nav id="navbar-main" class="navbar main-menu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset("frontend/images/logo.png")}}" alt="Brand" class="img-responsive" />
                </a>
            </div>
            @include('layouts.frontend._menu')
        </nav>
    </div>
</div>