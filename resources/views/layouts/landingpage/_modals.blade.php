<!-- End of footer -->
    <!--get a quote modal-->
    <div class="modal fade verticl-center-modal" id="getAQuoteModal" tabindex="-1" role="dialog" aria-labelledby="getAQuoteModal">
            <div class="modal-dialog getguoteModal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="customise-form">
                                    <form class="email_form" method="post">
                                        <h3>Get a Free Quote</h3>
                                        <div class="form-group customised-formgroup"> <span class="icon-user"></span>
                                            <input type="text" name="full_name" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group customised-formgroup"> <span class="icon-telephone"></span>
                                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group customised-formgroup"> <span class="icon-laptop"></span>
                                            <input type="text" name="website" class="form-control" placeholder="Website">
                                        </div>
                                        <div class="form-group customised-formgroup"> <span class="icon-bubble"></span>
                                            <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary full-width">GET A QUOTE<span class="icon-chevron-right"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>What’s Next?</h3>
                                <ul class="list-with-arrow">
                                    <li><i class="icon-chevron-right"></i> An email and phone call from one of our representatives.</li>
                                    <li><i class="icon-chevron-right"></i> A time &amp; cost estimation.</li>
                                    <li><i class="icon-chevron-right"></i> An in-person meeting.</li>
                                </ul>
                                <div class="contact-info-box-wrapper">
                                    <div class="contact-info-box"> <span class="icon-telephone"></span>
                                        <div>
                                            <h6>Give us a call</h6>
                                            <p>(123) 456 7890</p>
                                        </div>
                                    </div>
                                    <div class="contact-info-box"> <span class="icon-envelope"></span>
                                        <div>
                                            <h6>Send an email</h6>
                                            <p>yourcompany@sample.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end get a quote modal-->
        <!--portfolio details  modal-->
        <div class="modal fade verticl-center-modal" id="portfolioDetModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- main slider carousel -->
                                <div id="slider">
                                    <div id="carousel-bounding-box">
                                        <div id="myCarousel" class="carousel slide myCarousel">
                                            <!-- main slider carousel items -->
                                            <div class="carousel-inner">
                                                <div class="active item" data-slide-number="0">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-one.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="1">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-two.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="2">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-three.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div id="slider-thumbs">
                                                    <!-- thumb navigation carousel items -->
                                                    <ul class="list-inline  thumb-list">
                                                        <li>
                                                            <a id="carousel-selector-0" class="carousel-selector selected"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-1.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-1" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-2.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-2" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-3.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content">
                                    <p class="gray-text">Featured - Design</p>
                                    <h2 class="b-clor">Restaurant Website Design</h2>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                                </div>
                                <h3>We delivered:</h3>
                                <ul class="list-with-arrow">
                                    <li><i class="icon-chevron-right"></i> A strategy to grow business online.</li>
                                    <li><i class="icon-chevron-right"></i> A unique website with great user experience design.</li>
                                    <li><i class="icon-chevron-right"></i> A custom content management system to maintain
                                        <br> the website flowlessly. </li>
                                </ul>
                                <a href="#" class="medium-btn2  btn btn-primary">Launch website</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="modal fade verticl-center-modal" id="portfolioDetModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- main slider carousel -->
                                <div id="slider">
                                    <div id="carousel-bounding-box">
                                        <div id="myCarousel2" class="carousel slide myCarousel">
                                            <!-- main slider carousel items -->
                                            <div class="carousel-inner">
                                                <div class="active item" data-slide-number="0">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-one.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="1">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-two.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="2">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-three.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div id="slider-thumbs">
                                                    <!-- thumb navigation carousel items -->
                                                    <ul class="list-inline  thumb-list">
                                                        <li>
                                                            <a id="carousel-selector-0" class="carousel-selector selected"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-1.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-1" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-2.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-2" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-3.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content">
                                    <p class="gray-text">Featured - Design</p>
                                    <h2 class="b-clor">Jet Airplane Design</h2>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                                </div>
                                <h3>We delivered:</h3>
                                <ul class="list-with-arrow">
                                    <li><i class="icon-chevron-right"></i> A strategy to grow business online.</li>
                                    <li><i class="icon-chevron-right"></i> A unique website with great user experience design.</li>
                                    <li><i class="icon-chevron-right"></i> A custom content management system to maintain
                                        <br> the website flowlessly. </li>
                                </ul>
                                <a href="#" class="medium-btn2  btn btn-primary">Launch website</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal" id="portfolioDetModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- main slider carousel -->
                                <div id="slider">
                                    <div id="carousel-bounding-box">
                                        <div id="myCarousel3" class="carousel slide myCarousel">
                                            <!-- main slider carousel items -->
                                            <div class="carousel-inner">
                                                <div class="active item" data-slide-number="0">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-one.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="1">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-two.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="2">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-three.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div id="slider-thumbs">
                                                    <!-- thumb navigation carousel items -->
                                                    <ul class="list-inline  thumb-list">
                                                        <li>
                                                            <a id="carousel-selector-0" class="carousel-selector selected"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-1.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-1" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-2.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-2" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-3.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content">
                                    <p class="gray-text">Featured - Design</p>
                                    <h2 class="b-clor">Spring Water Service Design</h2>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                                </div>
                                <h3>We delivered:</h3>
                                <ul class="list-with-arrow">
                                    <li><i class="icon-chevron-right"></i> A strategy to grow business online.</li>
                                    <li><i class="icon-chevron-right"></i> A unique website with great user experience design.</li>
                                    <li><i class="icon-chevron-right"></i> A custom content management system to maintain
                                        <br> the website flowlessly. </li>
                                </ul>
                                <a href="#" class="medium-btn2  btn btn-primary">Launch website</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal" id="portfolioDetModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- main slider carousel -->
                                <div id="slider">
                                    <div id="carousel-bounding-box">
                                        <div id="myCarousel4" class="carousel slide myCarousel">
                                            <!-- main slider carousel items -->
                                            <div class="carousel-inner">
                                                <div class="active item" data-slide-number="0">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-one.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="1">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-two.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="2">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-three.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div id="slider-thumbs">
                                                    <!-- thumb navigation carousel items -->
                                                    <ul class="list-inline  thumb-list">
                                                        <li>
                                                            <a id="carousel-selector-0" class="carousel-selector selected"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-1.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-1" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-2.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-2" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-3.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content">
                                    <p class="gray-text">Featured - Design</p>
                                    <h2 class="b-clor">Second Language Website</h2>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                                </div>
                                <h3>We delivered:</h3>
                                <ul class="list-with-arrow">
                                    <li><i class="icon-chevron-right"></i> A strategy to grow business online.</li>
                                    <li><i class="icon-chevron-right"></i> A unique website with great user experience design.</li>
                                    <li><i class="icon-chevron-right"></i> A custom content management system to maintain
                                        <br> the website flowlessly. </li>
                                </ul>
                                <a href="#" class="medium-btn2  btn btn-primary">Launch website</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal" id="portfolioDetModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- main slider carousel -->
                                <div id="slider">
                                    <div id="carousel-bounding-box">
                                        <div id="myCarousel5" class="carousel slide myCarousel">
                                            <!-- main slider carousel items -->
                                            <div class="carousel-inner">
                                                <div class="active item" data-slide-number="0">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-one.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="1">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-two.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="2">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-three.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div id="slider-thumbs">
                                                    <!-- thumb navigation carousel items -->
                                                    <ul class="list-inline  thumb-list">
                                                        <li>
                                                            <a id="carousel-selector-0" class="carousel-selector selected"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-1.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-1" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-2.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-2" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-3.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content">
                                    <p class="gray-text">Featured - Design</p>
                                    <h2 class="b-clor">Home Buy And Sell </h2>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                                </div>
                                <h3>We delivered:</h3>
                                <ul class="list-with-arrow">
                                    <li><i class="icon-chevron-right"></i> A strategy to grow business online.</li>
                                    <li><i class="icon-chevron-right"></i> A unique website with great user experience design.</li>
                                    <li><i class="icon-chevron-right"></i> A custom content management system to maintain
                                        <br> the website flowlessly. </li>
                                </ul>
                                <a href="#" class="medium-btn2  btn btn-primary">Launch website</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal" id="portfolioDetModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- main slider carousel -->
                                <div id="slider">
                                    <div id="carousel-bounding-box">
                                        <div id="myCarousel" class="carousel slide myCarousel">
                                            <!-- main slider carousel items -->
                                            <div class="carousel-inner">
                                                <div class="active item" data-slide-number="0">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-one.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="1">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-two.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div class="item" data-slide-number="2">
                                                    <img src="{{asset("onepage/images/portfolio/portfolio-details-slider-three.jpg")}}" alt="images" class="img-responsive">
                                                </div>
                                                <div id="slider-thumbs">
                                                    <!-- thumb navigation carousel items -->
                                                    <ul class="list-inline  thumb-list">
                                                        <li>
                                                            <a id="carousel-selector-0" class="carousel-selector selected"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-1.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-1" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-2.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                        <li>
                                                            <a id="carousel-selector-2" class="carousel-selector"> <img src="{{asset("onepage/images/portfolio/portfolio-slider-thum-3.jpg")}}" class="img-responsive" alt=""> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content">
                                    <p class="gray-text">Featured - Design</p>
                                    <h2 class="b-clor">Technical University Website</h2>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                                </div>
                                <h3>We delivered:</h3>
                                <ul class="list-with-arrow">
                                    <li><i class="icon-chevron-right"></i> A strategy to grow business online.</li>
                                    <li><i class="icon-chevron-right"></i> A unique website with great user experience design.</li>
                                    <li><i class="icon-chevron-right"></i> A custom content management system to maintain
                                        <br> the website flowlessly. </li>
                                </ul>
                                <a href="#" class="medium-btn2  btn btn-primary">Launch website</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end portfolio details modal-->
        <div class="modal fade verticl-center-modal" id="teamDetModal1" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="img_container">
                                    <img src="{{asset("onepage/images/team/team-modal-img1.jpg")}}" alt="team details image" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content team-modal-content">
                                    <h2 class="b-clor">Steve Johnson</h2>
                                    <p class="gray-text">Cheif executive officer</p>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                                    <ul class="list-inline social_icons text-left">
                                        <li><a href="#" class="text-center"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-pinterest"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal" id="teamDetModal2" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="img_container">
                                    <img src="{{asset("onepage/images/team/team-modal-img2.jpg")}}" alt="team details image" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content team-modal-content">
                                    <h2 class="b-clor">Olivia Jackson</h2>
                                    <p class="gray-text">Cheif operating officer</p>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                                    <ul class="list-inline social_icons text-left">
                                        <li><a href="#" class="text-center"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-pinterest"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal" id="teamDetModal3" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="img_container">
                                    <img src="{{asset("onepage/images/team/team-modal-img3.jpg")}}" alt="team details image" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content team-modal-content">
                                    <h2 class="b-clor">John Kenny</h2>
                                    <p class="gray-text">Head of Marketing</p>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                                    <ul class="list-inline social_icons text-left">
                                        <li><a href="#" class="text-center"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-pinterest"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
        
        <div class="modal fade verticl-center-modal" id="teamDetModal4" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="img_container">
                                    <img src="{{asset("onepage/images/team/team-modal-img4.jpg")}}" alt="team details image" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content team-modal-content">
                                    <h2 class="b-clor">Silvia Perry</h2>
                                    <p class="gray-text">Senior Design Stategist</p>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                                    <ul class="list-inline social_icons text-left">
                                        <li><a href="#" class="text-center"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-pinterest"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal" id="teamDetModal5" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="img_container">
                                    <img src="{{asset("onepage/images/team/team-modal-img5.jpg")}}" alt="team details image" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content team-modal-content">
                                    <h2 class="b-clor">David Schwimmer</h2>
                                    <p class="gray-text">Senior Software Engineer</p>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                                    <ul class="list-inline social_icons text-left">
                                        <li><a href="#" class="text-center"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-pinterest"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal" id="teamDetModal6" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="img_container">
                                    <img src="{{asset("onepage/images/team/team-modal-img6.jpg")}}" alt="team details image" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="port-modal-content team-modal-content">
                                    <h2 class="b-clor">Lowra</h2>
                                    <p class="gray-text">Office Pet</p>
                                    <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                                    <ul class="list-inline social_icons text-left">
                                        <li><a href="#" class="text-center"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-pinterest"></i></a></li>
                                        <li><a href="#" class="text-center"><i class="icon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end team details modal -->
    
        <!-- Blog details modal -->
        <div class="modal fade verticl-center-modal blogDetModal" id="blogDetModal1" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!--section title -->
                            <p class="gray-text">2 May, 2017</p>
                            <h2 class="gray-title">Digital Marketo Moved to Their New Office</h2>
                            <!--end section title -->
                            <div class="row">
                                <!--blog content box-->
                                <div class="col-sm-12">
                                    <div class="blog-details-content details-v2">
                                        <img src="{{asset("onepage/images/blog/blog-details1.jpg")}}" class="img-responsive" alt="blog details" />
                                        <div>
                                            <p class="regular-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                            <h2>Nam liber tempor cum soluta</h2>
                                            <p class="regular-text">Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                            <h2>Mirum est notare quam</h2>
                                            <p class="regular-text">Littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                            <h2>Nobis eleifend option congue nihil</h2>
                                            <p class="regular-text">Imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                        </div>
                                        <!--blog share-->
                                    </div>
                                </div>
                                <!--end blog content box-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal blogDetModal" id="blogDetModal2" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!--section title -->
                            <p class="gray-text">2 June, 2017</p>
                            <h2 class="gray-title">Welcome to Our New Head of Production</h2>
                            <!--end section title -->
                            <div class="row">
                                <!--blog content box-->
                                <div class="col-sm-12">
                                    <div class="blog-details-content details-v2">
                                        <img src="{{asset("onepage/images/blog/blog-details2.jpg")}}" class="img-responsive" alt="blog details" />
                                        <div>
                                            <p class="regular-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                            <h2>Nam liber tempor cum soluta</h2>
                                            <p class="regular-text">Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                            <h2>Mirum est notare quam</h2>
                                            <p class="regular-text">Littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                            <h2>Nobis eleifend option congue nihil</h2>
                                            <p class="regular-text">Imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                        </div>
                                        <!--blog share-->
                                    </div>
                                </div>
                                <!--end blog content box-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade verticl-center-modal blogDetModal" id="blogDetModal3" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
            <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!--section title -->
                            <p class="gray-text">5 December, 2016</p>
                            <h2 class="gray-title">Digital Marketo Launched Their Website Prototyping App</h2>
                            <!--end section title -->
                            <div class="row">
                                <!--blog content box-->
                                <div class="col-sm-12">
                                    <div class="blog-details-content details-v2">
                                        <img src="{{asset("onepage/images/blog/blog-details3.jpg")}}" class="img-responsive" alt="blog details" />
                                        <div>
                                            <p class="regular-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                            <h2>Nam liber tempor cum soluta</h2>
                                            <p class="regular-text">Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                            <h2>Mirum est notare quam</h2>
                                            <p class="regular-text">Littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                            <h2>Nobis eleifend option congue nihil</h2>
                                            <p class="regular-text">Imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                        </div>
                                        <!--blog share-->
                                    </div>
                                </div>
                                <!--end blog content box-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>