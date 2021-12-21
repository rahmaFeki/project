<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from v.bootstrapmb.com/2021/4/ty75l10013/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 19:19:37 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Home One || Erdunt || Responsive HTML 5 Template</title><!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/aos.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/imp.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/custom-animate.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/flaticon.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/font-awesome.min.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/owl.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/magnific-popup.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/scrollbar.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/hiddenbar.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/icomoon.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/color.css")}}>
    <link href={{secure_asset("assetsFront/css/color/theme-color.css")}} id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/rtl.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/style.css")}}>
    <link rel="stylesheet" href={{secure_asset("assetsFront/css/responsive.css")}}><!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href={{secure_asset("assetsFront/images/favicon/apple-touch-icon.png")}}>
    <link rel="icon" type="image/png" href={{secure_asset("assetsFront/images/favicon/favicon-32x32.png")}} sizes="32x32">
    <link rel="icon" type="image/png" href={{secure_asset("assetsFront/images/favicon/favicon-16x16.png")}} sizes="16x16">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="assets/js/html5shiv.js"></script><![endif]-->
</head>

<body>
    <div class="boxed_wrapper ltr">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div><!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div><!-- page-direction end -->
        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn"><button><img src="assetsFront/images/icon/color-palette.png"
                        alt="Color Palette"></button></div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li><a href="javascript: void(0)" data-theme="blue" class="blue-color"></a></li>
                        <li><a href="javascript: void(0)" data-theme="pink" class="pink-color"></a></li>
                        <li><a href="javascript: void(0)" data-theme="violet" class="violet-color"></a></li>
                        <li><a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a></li>
                        <li><a href="javascript: void(0)" data-theme="orange" class="orange-color"></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- end switcher menu -->
        <!-- Main header-->
        <header class="main-header header-style-one">
            <!--Start Header Top-->

            <!--End Header Top-->
            <!--Start Header-->
            <div class="header">
                <div class="container">
                    <div class="outer-box clearfix">
                        <div class="header-left clearfix pull-left">
                            <div class="logo"><a href="index.html"><img src={{asset("assetsFront/images/logoMSM.png")}}
                                        width="200px" height="150px" alt="Awesome Logo" title=""></a></div>
                        </div>
                        <div class="header-right pull-right">
                            <div class="header-contact-info clearfix">
                                <ul class="clearfix">
                                    <li>
                                     
                                    @foreach($telephone as $prop) 
   
   
   <div class="icon"><span class="flaticon-incoming-call clr1"></span></div>
                                        <div class="text">
                                            <p>{{$sections[0]}}</p>
                                            <h4><a href="tel:123456789">{{$prop->num}}</a></h4>
                                        </div>


                                          @break;
                                    
                                    @endforeach
                                 
                                    </li>
                                    <li>
                                        <div class="icon"><span class="flaticon-envelope-1 clr1"></span></div>
                                        <div class="text col-3">
                                            @if(isset($entrep->email))
                                            <p>{{$sections[1]}}</p>
                                            <h4>{{$entrep->email}} </h4>
                                            @endif
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End header-->
            <!--Start Header-->
            <div class="header-bottom">
                <div class="container">
                    <div class="outer-box clearfix">
                        <div class="header-bottom_left pull-left">
                            <div class="nav-outer style1 clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <div class="inner"><span class="icon-bar"></span><span class="icon-bar"></span><span
                                            class="icon-bar"></span></div>
                                </div><!-- Main Menu -->
                                <nav class="main-menu style1 navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="dropdown current"><a class="home" href="#"><span
                                                        class="home_text"></span><span
                                                        class="flaticon-home home_icon"></span></a>

                                            </li>
                                            <li><a href="#sommes">{{$sections[2]}}</a>

                                            </li>
                                            <li><a href="#service">{{$sections[3]}}</a>

                                            </li>
                                            <li class="dropdown"><a href="#">{{$sections[4]}}</a>
                                                <ul>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="error.html">404 Error page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#choisir">{{$sections[5]}}</a>

                                            </li>
                                            <li><a href="#galler">{{$sections[6]}}</a>

                                            <li class="dropdown"><a href="{{ route('page.index',$langCode)}}"> <img
                                                        src="{{asset("assetsFront/images/$langCode.png")}}"
                                                        height="20px" width="20px" />
                                                    {{$lang}}</a>
                                                <ul>
                                                    <li ><a href="{{ route('page.index',1)}}"> <img
                                                                src="{{asset("assetsFront/images/1.png")}}"
                                                                height="20px" width="20px" />
                                                            FR</a>
                                                    <li><a href="{{ route('page.index',2)}}"><img
                                                                src="{{asset("assetsFront/images/2.png")}}"
                                                                height="20px" width="20px" />
                                                            EN</a></li>


                                                </ul>
                                            </li>
                                            </li>

                                        </ul>
                                    </div>
                                </nav><!-- Main Menu End-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End header-->
            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="container">
                    <div class="clearfix">
                        <!--Logo-->

                        <!--Right Col-->
                        <div class="right-col float-right">
                            <!-- Main Menu -->
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->
            <!-- Mobile Menu -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src={{asset("assetsFront/images/logoMSM.png")}}
                                alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->
        </header><!-- Start Main Slider -->
        <section class="main-slider style1">
            <div class="top_shadow"></div>
            <div class="slider-box">
                <!-- Banner Carousel -->
                <div class="banner-carousel owl-theme owl-carousel">
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assetsFront/images/slides/slide-v1-2.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content text-center">
                                <h3>{{$intit1}}</h3>
                                <div class="big-title">
                                    <h2>{{$intit2}}<br>{{$intit3}}</h2>
                                </div>

                            </div>
                        </div>
                    </div><!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-2.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content text-center">
                                <h3>{{$intit1}}</h3>
                                <div class="big-title">
                                    <h2>{{$intit2}}<br>{{$intit3}}</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Main Slider -->
        <!--Start Features Style1 Area-->
        <section class="features-style1-area" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="features-style1_title clearfix">
                            <div class="thm-logo wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="icon_outer paroller"><span class="icon-logo"></span></div>
                            </div>
                            <div class="sec-title">
                                <div class="sub-title"><span class="border-box"></span>
                                    <h5>MSM Est Le Leader de l'industrie</h5>
                                </div>
                                @if($langCode==1)
                                <h2>Notre Entreprise Offre<br>Les Services Suivants:</h2>
                           @else
                           <h2>Our Entreprise Offers<br>These Services</h2>
                           @endif
                            </div>
                            <!-- /.features-style1_top__text -->
                        </div><!-- /.features-style1-title -->
                    </div><!-- /.col-xl-12 -->
                </div><!-- /.row -->
                <div class="row">
                    @foreach ($missions as $u)
                    <!--Start Single Features Style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-features-style1 wow fadeInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="counting">

                            </div><!-- /.counting -->
                            <div class="inner">
                                <div class="icon-holder"><span class="icon">
                                        <img src="<?php echo asset('storage/'.$u->image) ?>" />
                                    </span>
                                </div>
                                <div class="title-holder">
                                    <h3><a href="#">{{$u->lib}}</a></h3>
                                </div>
                            </div><!-- /.inner -->

                        </div>
                    </div>
                    @endforeach
                    <!--End Single Features Style1-->
                    <!--Start Single Features Style1-->

                    <!--End Single Features Style1-->
                    <!--Start Single Features Style1-->

                    <!--End Single Features Style1-->
                    <!--Start Single Features Style1-->

                    <!--End Single Features Style1-->
                </div>
            </div>
        </section>

        <!--End Features Style1 Area-->
        <!--Start About Style1 Area float-bob-y paroller-2 -->
        <section class="service-style2-area" id="choisir">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12">
                        <div class="about-style1-content-box text-right-rtl">
                            <div class="features-style1_title clearfix">
                                <div class="thm-logo wow slideInRight" data-wow-delay="100ms"
                                    data-wow-duration="2500ms">
                                    <div class="icon_outer paroller"><span class="icon-logo"></span></div>
                                </div>
                                <div class="sec-title">
                                    <div class="sub-title"><span class="border-box"></span>
                                        <h5>{{$sections[5]}}</h5>
                                    </div>

                                </div>
                                <!-- /.features-style1_top__text -->
                            </div>
                            <div class="inner-content">
                                <div class="top_text">
                                    <p>@if($langCode==1)Une Longue Expérience Dans Le Domaine De L'industrie.
                                        @else
                                        A long experience in the field of industry
                                        @endif
                                     </p>
                                </div>
                                <div class="row">
                                @foreach ($choix as $u)
                                
                                    <div class="col-xl-6">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <div class="inner"><span class="icon-icon-12 clr1"></span></div>
                                                    <!-- /.inner -->
                                                </div><!-- /.icon -->
                                                <div class="text">
                                                    <h3>{{$u->lib}}</h3>
                                                    <p></p>
                                                </div><!-- /.text -->
                                            </li>
                                        </ul>
                                    </div>
                                  
                                @endforeach
                                   
                               
                                </div>
 
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--End About Style1 Area-->
        <!-- Start Service Style1 Area -->
        <section class="service-style1-area" id="sommes">
            <div class="layer-outer"
                style="background-image: url(assetsFront/images/parallax-background/service-style1-bg.jpg);"></div>
            <div class="shape wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"><img class="paroller"
                    src="assetsFront/images/shape/factory.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4"></div>
                    <div class="col-xl-8">
                        <div class="service-style1_title">
                            <div class="sec-title">
                                <div class="sub-title"><span class="border-box"></span>
                                    <h5>{{$sections[2]}}</h5>
                                </div>
                                <h2>Alinjaz Mecanique & Soudure <br> Moderne</h2>
                                <p>{{$contenu}}</p>
                            </div>
                            <!-- /.service-style1_inner_box -->
                        </div><!-- /.service-style1_title -->
                    </div><!-- /.col-xl-4 -->

                    <!-- /.col-xl-8 -->
                </div>
            </div>
        </section><!-- End Service Style1 Area -->
        <!--Start Testimonial style1 Area-->

        @foreach ($sectionNew as $u)
        <section class="service-style2-area">
            <div class="container">
                <div class="sec-title style2 with_text text-center">
                    <div class="sub-title clr2"><span class="border-box"></span>
                        <h5>{{$u->titre}}</h5>
                    </div>
                 
                </div>
                <div class="row">
                 
                    <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInLeft;">
                        <div class="single-service-style2">
                            <div class="single-service-style2_bg" style="background-image: url(assets/images/shape/single-service-style2-bg.html);"></div>
                            <div class="inner_box">
                                <div class="img-holder"><img src="<?php echo asset('storage/'.$u->image) ?>" width="200px"
                                                height="200px" /></div>
                                <div class="text-holder">
                                    <h3><a href="#">{{$u->title}}</a></h3>
                                    <p>{{$u->description}}</p>
                                   
                                </div>
                            </div><!-- /.inner_box -->
                        </div>
                    </div>
                    <!--End Single Service Style2-->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        @endforeach
        <!--Start Project Style1 Area-->
        <section class="service-style2-area" id="galler">
            <div class="custom-container">
                <div class="sec-title with_text text-center">
                    <div class="sub-title"><span class="border-box"></span>
                        <h5>{{$sections[6]}}</h5>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-style1_content">
                            <div class="project-style1_carousel three-item-carousel owl-carousel owl-theme">
                                <!--Start Single Project Style1-->

                                @foreach ($gallery as $u)
                                <div class="single-project-style1 wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="<?php echo asset('storage/'.$u->nom) ?>" width="200px"
                                                height="200px" />
                                                <div class="zoom-button"><a class="lightbox-image" data-fancybox="gallery"
                                                href="assets/images/project/i2.jpg"></a></div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                       
                            </div><!-- /.project-style1_carousel -->
                        </div><!-- /.project-style1_content -->
                    </div><!-- /.col-xl-12 -->
                </div>
            </div>
        </section>
        <!--End Project Style1 Area-->
        <!--Start Faq Style1 Area paroller paroller-2-->

        <!--End Faq Style1 Area-->

        <!--End Testimonial Style1 Area-->
        <!--Start Partner Area-->
  
        <!--End Partner Area-->
        <!--Start Blog Style1 Area-->
  
        <!--End Blog Style1 Area-->
        <!--Start Subscribe Area-->

        <!--End Subscribe Area-->
        <!--Start footer area -->
        <footer class="footer-area">
            <div class="shape  wow slideInRight" data-wow-delay="500ms" data-wow-duration="3500ms"><img
                    src="assetsFront/images/shape/footer-shape-1.jpg" alt=""></div><!-- /.shape -->
            <div class="footer">
                <div class="container">
                    <div class="row text-right-rtl">
                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="footer-left-box">
                                <!--Start single footer widget-->
                                <div class="single-footer-widget marbtm wow animated fadeInUp" data-wow-delay="0.1s">
                                    <div class="our-company-info">
                                        <div class="footer-logo"><img
                                                    src={{asset("assetsFront/images/logoMSM.png")}} alt="Footer Logo"
                                                    title="Logo"></div>
                                        <div class="text-box">
                                            <p>{{$contenu}}</p>
                                        </div>
                                        <div class="footer-social-links">
                                            <div class="inner_title">
                                                <h3>Connectez Avec Nous</h3>
                                            </div>
                                            <ul class="social-links-style1">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div><!-- /.footer-social-links -->
                                    </div>
                                </div>
                                <!--End single footer widget-->
                            </div><!-- /.footer-left-box -->
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                            <div class="footer-rigth-box">
                                <div class="row">
                                    <!--Start single footer widget-->
                                   
                                    <!--End single footer widget-->
                                    <!--Start single footer widget-->

                                    <!--End single footer widget-->
                                    <!--Start single footer widget-->
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 wow animated fadeInUp"
                                        data-wow-delay="0.7s">
                                        <div class="single-footer-widget">
                                            <div class="title">
                                                @if($langCode==1)
                                                <h3>Contactez-nous</h3>
                                                @else
                                                <h3>Contact Us</h3>
                                                @endif
                                            </div>
                                            <div class="footer-contact-info">
                                                <ul>
                                              
                                                    <li>
                                                    @foreach ($telephone as $u)
                                                    @if($u!=null)
                                                        <div class="icon"><span
                                                                class="flaticon-incoming-call clr1"></span></div>
                                                               
                                                                
                                                                <div class="text">
                                                            <p class="large"><a >{{$u->num}}</a></p>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                      
                                                    </li>
                                                    
                                                    @if(isset($entrep->adr))
                                                    <li>
                                                        <div class="icon"><span
                                                                class="flaticon-placeholder clr1"></span></div>
                                                        <div class="text">
                                                            <p>{{$entrep->adr}}</p>
                                                        </div>
                                                    </li>
                                                  @endif
                                                    @if(isset($entrep->adr))
                                                    <li>
                                                        <div class="icon"><span class="flaticon-envelope-1 clr1"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p><a href="mailto:logistic@email.com">{{$entrep->email}}</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    @endif
                                                    <li>
                                                        <div class="icon"><span class="flaticon-clock-1 clr1"></span>
                                                        </div>
                                                       
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End single footer widget-->
                                </div>
                                <div class="footer-bottom">
                                    <div class="footer-bottom_left_box">
                                        <div class="copyright-text">
                                            <p>&copy;2021 By <a href="">Alinjaz Mecanique & Soudure Moderne</a>All
                                                rights reserved.</p>
                                        </div>
                                        <div class="footer-menu-style1">
                                            <ul>
                                                <li><a href="#">MSM</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div><!-- /.footer-bottom_left_box -->
                                    <!-- /.footer-bottom_left_box -->
                                </div>
                            </div><!-- /.footer-rigth-box -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End footer area--><button class="scroll-top scroll-to-target bgclr1" data-target="html"><span
                class="fa fa-angle-up"></span></button>
    </div>
    <script src={{secure_asset("assetsFront/js/jquery.js")}}></script>
    <script src={{secure_asset("assetsFront/js/aos.js")}}></script>
    <script src={{secure_asset("assetsFront/js/appear.js")}}></script>
    <script src={{secure_asset("assetsFront/js/bootstrap.bundle.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/bootstrap-select.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/isotope.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery.bxslider.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery.countdown.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery.countTo.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery.easing.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery.enllax.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery.fancybox.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery.magnific-popup.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery.paroller.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery.polyglot.language.switcher.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jQuery.style.switcher.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/jquery-ui.js")}}></script>
    <script src={{secure_asset("assetsFront/js/knob.js")}}></script>
    <script src={{secure_asset("assetsFront/js/map-script.js")}}></script>
    <script src={{secure_asset("assetsFront/js/owl.js")}}></script>
    <script src={{secure_asset("assetsFront/js/pagenav.js")}}></script>
    <script src={{secure_asset("assetsFront/js/parallax.min.js")}}></script>
    <script src={{secure_asset("assetsFront/js/scrollbar.js")}}></script>
    <script src={{secure_asset("assetsFront/js/slick.js")}}></script>
    <script src={{secure_asset("assetsFront/js/timePicker.js")}}></script>
    <script src={{secure_asset("assetsFront/js/validation.js")}}></script>
    <script src={{secure_asset("assetsFront/js/wow.js")}}></script>
    <script src={{secure_asset("assetsFront/js/TweenMax.min.js")}}></script><!-- thm custom script -->
    <script src={{secure_asset("assetsFront/js/custom.js")}}></script>
</body>
<!-- Mirrored from v.bootstrapmb.com/2021/4/ty75l10013/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 19:21:45 GMT -->

</html>