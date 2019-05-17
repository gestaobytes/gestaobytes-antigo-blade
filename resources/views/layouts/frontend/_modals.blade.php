<div class="modal fade verticl-center-modal" id="getAQuoteModal" tabindex="-1" role="dialog" aria-labelledby="getAQuoteModal">
    <div class="modal-dialog getguoteModal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-cross-circle"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="customise-form">
                            <form class="email_form" method="post">
                                <h3>Get a Free Quote</h3>
                                <div class="form-group customised-formgroup">
                                    <span class="icon-user"></span>
                                    <input type="text" name="full_name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group customised-formgroup">
                                    <span class="icon-envelope"></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group customised-formgroup">
                                    <span class="icon-telephone"></span>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group customised-formgroup">
                                    <span class="icon-laptop"></span>
                                    <input type="text" name="website" class="form-control" placeholder="Website">
                                </div>
                                <div class="form-group customised-formgroup">
                                    <span class="icon-bubble"></span>
                                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-fill full-width">GET A QUOTE
                                        <span class="icon-chevron-right"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>What’s Next?</h3>
                        <ul class="list-with-arrow">
                            <li>An email and phone call from one of our representatives.</li>
                            <li>A time &amp; cost estimation.</li>
                            <li>An in-person meeting.</li>
                        </ul>
                        <div class="contact-info-box-wrapper">
                            <div class="contact-info-box">
                                <span class="icon-telephone"></span>
                                <div>
                                    <h6>Give us a call</h6>
                                    <p>(123) 456 7890</p>
                                </div>
                            </div>
                            <div class="contact-info-box">
                                <span class="icon-envelope"></span>
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


<div class="modal fade verticl-center-modal" id="portfolioDetModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal1">
    <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="icon-cross-circle"></span>
            </button>
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
                                            <img src="{{asset("frontend/images/portfolio/portfolio-details-slider-one.jpg")}}" alt="images" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="1">
                                            <img src="{{asset("frontend/images/portfolio/portfolio-details-slider-two.jpg")}}" alt="images" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="2">
                                            <img src="{{asset("frontend/images/portfolio/portfolio-details-slider-three.jpg")}}" alt="images" class="img-responsive">
                                        </div>
                                        <div id="slider-thumbs">
                                            <!-- thumb navigation carousel items -->
                                            <ul class="list-inline  thumb-list">
                                                <li>
                                                    <a id="carousel-selector-0" class="carousel-selector selected">
                                                        <img src="{{asset("frontend/images/portfolio/portfolio-slider-thum-1.jpg")}}" class="img-responsive" alt=""> </a>
                                                </li>
                                                <li>
                                                    <a id="carousel-selector-1" class="carousel-selector">
                                                        <img src="{{asset("frontend/images/portfolio/portfolio-slider-thum-2.jpg")}}" class="img-responsive" alt=""> </a>
                                                </li>
                                                <li>
                                                    <a id="carousel-selector-2" class="carousel-selector">
                                                        <img src="{{asset("frontend/images/portfolio/portfolio-slider-thum-3.jpg")}}" class="img-responsive" alt=""> </a>
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
                            <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                        </div>
                        <h3>We delivered:</h3>
                        <ul class="list-with-arrow">
                            <li>
                                <i class="icon-chevron-right"></i> A strategy to grow business online.</li>
                            <li>
                                <i class="icon-chevron-right"></i> A unique website with great user experience design.</li>
                            <li>
                                <i class="icon-chevron-right"></i> A custom content management system to maintain
                                <br> the website flowlessly. </li>
                        </ul>
                        <a href="#" class="medium-btn2  btn btn-fill">Launch website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade verticl-center-modal" id="portfolioDetModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal2">
    <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="icon-cross-circle"></span>
            </button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7">
                        <!-- main slider carousel -->
                        <div id="slider2">
                            <div id="carousel-bounding-box2">
                                <div id="myCarousel2" class="carousel slide myCarousel">
                                    <!-- main slider carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="{{asset("frontend/images/portfolio/portfolio-details-slider-one.jpg")}}" alt="images" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="1">
                                            <img src="{{asset("frontend/images/portfolio/portfolio-details-slider-two.jpg")}}" alt="images" class="img-responsive">
                                        </div>
                                        <div class="item" data-slide-number="2">
                                            <img src="{{asset("frontend/images/portfolio/portfolio-details-slider-three.jpg")}}" alt="images" class="img-responsive">
                                        </div>
                                        <div id="slider-thumbs2">
                                            <!-- thumb navigation carousel items -->
                                            <ul class="list-inline  thumb-list">
                                                <li>
                                                    <a id="carousel-selector-2-0" class="carousel-selector selected">
                                                        <img src="{{asset("frontend/images/portfolio/portfolio-slider-thum-1.jpg")}}" class="img-responsive" alt=""> </a>
                                                </li>
                                                <li>
                                                    <a id="carousel-selector-2-1" class="carousel-selector">
                                                        <img src="{{asset("frontend/images/portfolio/portfolio-slider-thum-2.jpg")}}" class="img-responsive" alt=""> </a>
                                                </li>
                                                <li>
                                                    <a id="carousel-selector-2-2" class="carousel-selector">
                                                        <img src="{{asset("frontend/images/portfolio/portfolio-slider-thum-3.jpg")}}" class="img-responsive" alt=""> </a>
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
                            <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                        </div>
                        <h3>We delivered:</h3>
                        <ul class="list-with-arrow">
                            <li>
                                <i class="icon-chevron-right"></i> A strategy to grow business online.</li>
                            <li>
                                <i class="icon-chevron-right"></i> A unique website with great user experience design.</li>
                            <li>
                                <i class="icon-chevron-right"></i> A custom content management system to maintain
                                <br> the website flowlessly. </li>
                        </ul>
                        <a href="#" class="medium-btn2  btn btn-fill">Launch website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
