<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stech</title>

    <!-- Assets  -->
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/custom-style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <!-- Header -->
    <section id="headerSection">
        <div class="container-fuild">
            <div class="header">
                <?php
                    include_once("header.php")
                ?>
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4500">
                
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                
                
                    <div class="carousel-inner">
                        <div class="item active">
                
                            <img src="assets/images/banner/banner.png" alt="Banner 1" style="width:100%;" class="img-responsive">
                            <div class="carousel-caption">
                                <img src="assets/images/banner/shield.png" alt="Shield" class="img-responsive">
                                <div class="captionText">
                                    <h1>Designing <span>SMART</span></h1>
                                    <h2>commercial spaces</h2>
                                    <a href="#">Know More
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/banner/banner.png" alt="Banner 2" style="width:100%;"  class="img-responsive">
                            <div class="carousel-caption">
                                <img src="assets/images/banner/shield.png" alt="Shield" class="img-responsive">
                                <div class="captionText">
                                    <h1>Designing
                                        <span>SMART</span>
                                    </h1>
                                    <h2>commercial spaces</h2>
                                    <a href="#">Know More
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/banner/banner.png" alt="Banner 3" style="width:100%;" class="img-responsive">
                            <div class="carousel-caption">
                                <img src="assets/images/banner/shield.png" alt="Shield" class="img-responsive">
                                <div class="captionText">
                                    <h1>Designing
                                        <span>SMART</span>
                                    </h1>
                                    <h2>commercial spaces</h2>
                                    <a href="#">Know More
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
                        <img src="assets/images/who/banner-arrow.png" alt="Banner Arow" class="img-responsive">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                        <img src="assets/images/who/banner-arrow.png" alt="Banner Arow" class="img-responsive">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <!-- /Header -->

    <section id="who_we_are">
        <div class="container" style="padding: 40px;">
            <div class="row">
                <!-- Left Div -->
                <div class="col-md-8">
                    <div class="leftDiv">
                        <h1>Who we are</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusamus</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex unde impedit beatae sit quam similique harum debitis consequatur quod, eligendi suscipit. Quos, rem animi! Quas dolor praesentium repellat eligendi quod.</p>
                        <a href="#">Know More
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                <!-- Right Div -->
                <div class="col-md-4">
                    <div class="rightDiv">
                        <img src="assets/images/who/intro-img.png" alt="Who we are" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fuild container-who">
            <div class="container">
            <!-- Slider Row -->
            <div class="row">
                <div class="col-md-12 sliderDiv">
                    <div class="whoWeAreSlider">
                        <div class="carousel slide" id="whoWeAreCarousel" data-ride="carousel" data-interval="2000" data-pause="hover">
                        <ol class="carousel-indicators">
                            <li data-target="#whoWeAreCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#whoWeAreCarousel" data-slide-to="1"></li>
                            <li data-target="#whoWeAreCarousel" data-slide-to="2"></li>
                            <!-- <li data-target="#whoWeAreCarousel" data-slide-to="3"></li>
                            <li data-target="#whoWeAreCarousel" data-slide-to="4"></li>
                            <li data-target="#whoWeAreCarousel" data-slide-to="5"></li> -->
                        </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-xs-4">
                                        <div class="sliderContent">
                                            <h3>Security</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <img src="assets/images/who/arrow.png" alt="Arrow" class="img-responsive">
                                        </div>
                                        
                                        <a href="#">
                                            <img src="assets/images/who/img1.png" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <div class="sliderContent">
                                            <h3>Sustainability</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <img src="assets/images/who/arrow.png" alt="Arrow" class="img-responsive">
                                        </div>
                                        <a href="#">
                                            <img src="assets/images/who/img2.png" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <div class="sliderContent">
                                            <h3>Lifestyle</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <img src="assets/images/who/arrow.png" alt="Arrow" class="img-responsive">
                                        </div>
                                        <a href="#">
                                            <img src="assets/images/who/img3.png" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="item">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/images/who/img1.png" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        
                                        <a href="#">
                                            <img src="assets/images/who/img2.png" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/images/who/img3.png" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/images/who/img1.png" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/images/who/img2.png" class="img-responsive">
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                            <a class="left carousel-control" href="#whoWeAreCarousel" data-slide="prev">
                                <i class="glyphicon glyphicon-chevron-left"></i>
                            </a>
                            <a class="right carousel-control" href="#whoWeAreCarousel" data-slide="next">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider row ends -->
        </div>
        </div>
    </section>

<!-- Who We are ends -->

<!-- Our partners -->
<div class="container-fuild" id="OurPartners">
    <div class="row">
        <div class="col-md-12">
            <div class="OurPartnersHeading">
                <h1>Our partners</h1>
            </div>
        </div>
    </div>

         <section class="center slider our-partners-section">
            <div>
                <img src="assets/images/partners/partner1.png" class="img-responsive" alt="ADI">
            </div>
            <div>
            <img src="assets/images/partners/partner2.png" class="img-responsive" alt="Cisco">
            </div>
            <div>
                <img src="assets/images/partners/partner3.png" class="img-responsive" alt="Elcom">
            </div>
            <div>
                <img src="assets/images/partners/partner4.png" class="img-responsive" alt="KNX">
            </div>
            <div>
                <img src="assets/images/partners/partner5.png" class="img-responsive" alt="Schenider">
            </div>
            <div>
                <img src="assets/images/partners/partner6.png" class="img-responsive" alt="Satel">
            </div>
            
        </section>
</div>
<!-- Our Partners -->

<!-- Testimonials -->
<section id="testimonials">
    <div class="container-fuild">
        <div class="row">
            <div class="col-md-12">
                <div class="TestimonialsHeading">
                    <h1>Testimonials</h1>
                </div>
            </div>
        </div>
        <section class="testimonialsSlider regular slider">
            <div class="inner">
        
                <div class="col-md-8">
                    <p class='mainContent'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis molestiae ipsum quas laudantium aliquam odit numquam pariatur quis veniam error? Officia eos, facilis veniam non illum praesentium dignissimos ullam iusto!</p>
                </div>

                <div class="col-md-4">
                    <img src="assets/images/testimonials/testimonial-place-holder.png" alt="Testimonials" class="img-responsive">
                    <h4 class='name'>Venkey</h4>
                    <p class='desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

            </div>
            <div class="inner">
            
                <div class="col-md-8">
                    <p class='mainContent'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis molestiae ipsum quas laudantium aliquam odit numquam
                        pariatur quis veniam error? Officia eos, facilis veniam non illum praesentium dignissimos ullam iusto!</p>
                </div>
            
                <div class="col-md-4">
                    <img src="assets/images/testimonials/testimonial-place-holder.png" alt="Testimonials" class="img-responsive">
                    <h4 class='name'>Venkey</h4>
                    <p class='desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            
            </div>
            <div class="inner">
            
                <div class="col-md-8">
                    <p class='mainContent'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis molestiae ipsum quas laudantium aliquam odit numquam
                        pariatur quis veniam error? Officia eos, facilis veniam non illum praesentium dignissimos ullam iusto!</p>
                </div>
            
                <div class="col-md-4">
                    <img src="assets/images/testimonials/testimonial-place-holder.png" alt="Testimonials" class="img-responsive">
                    <h4 class='name'>Venkey</h4>
                    <p class='desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            
            </div>
            <div class="inner">
            
                <div class="col-md-8">
                    <p class='mainContent'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis molestiae ipsum quas laudantium aliquam odit numquam
                        pariatur quis veniam error? Officia eos, facilis veniam non illum praesentium dignissimos ullam iusto!</p>
                </div>
            
                <div class="col-md-4">
                    <img src="assets/images/testimonials/testimonial-place-holder.png" alt="Testimonials" class="img-responsive">
                    <h4 class='name'>Venkey</h4>
                    <p class='desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            
            </div>
        
        </section>

    </div>
</section>
<!-- Testimonials End -->

<!-- Stech Banner Last -->
<section id="stechLast">
    <div class="container-fuild">
        <div class="container">
          <div class="row">
                <div class="col-md-5 col-xs-12">
                    <div class="Logo">
                        <img src="assets/images/banner/logo.png" alt="stech" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-7 col-xs-12 links_social">
                    <div class="col-md-5 col-xs-5">
                        <div class="link">
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Home Automation</a>
                                </li>
                                <li>
                                    <a href="#">Commercial Automation</a>
                                </li>
                            </ul>
                        
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <div class="link">
                            <ul>
                                <li>
                                    <a href="#">FAQ's</a>
                                </li>
                                <li>
                                    <a href="#">Blogs</a>
                                </li>
                                <li>
                                    <a href="#">Connect</a>
                                </li>
                            </ul>
                    
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-4 social_icons_last">
                        <div class="linkSocial">
                            <ul>
                                <li>
                                    <a href="#"><img src="assets/images/Social_icons/facebook.png" alt="Facebook" class="img-responsive"></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/Social_icons/linkedin.png" alt="linkedin" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                <a href="#">
                                    <img src="assets/images/Social_icons/twitter.png" alt="Twitter" class="img-responsive">
                                </a>
                                </li>
                            </ul>
                    
                        </div>
                    </div>
                </div>
          </div>
        </div>
    </div>
</section>
<!-- Stech Banner End -->

<!-- Footer Section -->
<section id="footer">
   <?php 
    include_once("footer.php");
   ?>
</section>
<!-- Footer Section -->


<!-- Assets -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

<!-- Custom Script -->
<script src="assets/js/custom-script.js"></script>
<script src="assets/js/slick.js"></script>
</body>
</html>