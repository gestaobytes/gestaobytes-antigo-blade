<nav id="navbar-main" class="navbar main-menu navbar-fixed-top">
    <div class="header-top">
        <div class="container">
            <div class="hidden-xs pull-left">
                <ul class="list-inline social_icons text-left">
                    <li><a href="#" class="text-center"><i class="icon-facebook"></i></a></li>
                    <li><a href="#" class="text-center"><i class="icon-twitter"></i></a></li>
                    <li><a href="#" class="text-center"><i class="icon-instagram"></i></a></li>
                    <li><a href="#" class="text-center"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#" class="text-center"><i class="icon-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="contact-info clearfix">
                <ul class="pull-right list-inline">
                    <li><a href="tel:06332241316"><i class="icon-telephone"></i>(63)3224.1316</a></li>
                    <li><a href="mailto:gestaobytes@gmail.com"><i class="icon-envelope"></i>gestaobytes@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset("onepage/images/logo.png")}}" alt="Brand" class="img-responsive" />
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="page-scroll"><a href="#services">Services</a></li>
                <li class="page-scroll"><a data-scroll href="#portfolio">Portfolio</a></li>
                <li class="page-scroll"><a data-scroll href="#case_studies">Case Studies</a></li>
                <li class="page-scroll"><a data-scroll href="#about">About</a></li>
                <li class="page-scroll"><a data-scroll href="#team">Team</a></li>
                <li class="page-scroll"><a data-scroll href="{{$urlBlogs}}">Blog</a></li>
                <li class="page-scroll"><a href="#map" class="btn btn-primary">Contact Us <i class="icon-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</nav>