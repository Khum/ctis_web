<?php
include_once('header.php');
//include_once('slider.php');
?>

            <!-- !BANNER 2 START -->
                        
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="padding:8px;background-color: #f9f9f9">
                       <a> Home</a> > <a>Products details</a>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top:20px;">
                <div class="row">

                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="min-height:920px;">

                        <div>
                            <nav class="navbar navbar-default sidebar" role="navigation">
                                <div class="container-fluid">

                                    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a  style="text-align: center;font-weight:bold;font-size:16px;">Categories<span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
                                            <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity "></span></a>
                                                <ul class="dropdown-menu forAnimate" role="menu">
                                                    <li><a href="{{URL::to('createusuario')}}">Crear</a></li>
                                                    <li><a href="#">Modificar</a></li>
                                                    <li><a href="#">Reportar</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Informes</a></li>
                                                </ul>
                                            </li>          
                                            <li ><a href="#">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity "></span></a></li>        
                                            <li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>

                    </div>

                  
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                       
                        <div class="heading_style" >
                            Product Details
                        </div>
                        
                    </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <div class="container-fluid">
                                <div class="content-wrapper">	
                                    <div class="item-container">	
                                        	
                                            <div class="col-xs-12 col-md-7">
                                                <div class="product col-md-8 service-image-left">

                                                    <center id="item_center">
                                                        <img id="item-display" data-zoom-image="image/products/large/product2.jpg" src="image/products/small/product2.jpg"></img>
                                                    </center>
                                                </div>

                                                <div class="container service1-items col-sm-2 col-md-4 pull-left">
                                                    
                                                        <a id="item-1" class="service1-item gallerythumbnail">
                                                            <img src="image/products/small/product1.jpg" alt="" />
                                                        </a>
                                                        <a id="item-2" class="service1-item gallerythumbnail">
                                                            <img src="image/products/small/product2.jpg" alt="" />
                                                        </a>
                                                        <a id="item-3" class="service1-item gallerythumbnail">
                                                            <img src="image/products/small/product3.jpg" alt="" />
                                                        </a>
                                                    
                                                </div>
                                            </div>

                                            <div class=" col-xs-12 col-md-5">
                                                <div class="product-title">Corsair GS600 600 Watt PSU</div>
                                                <div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div>
                                                <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                                                <hr>
                                                <div class="product-price">$ 1234.00</div>
                                                <div class="product-stock">In Stock</div>
                                                <hr>
                                                <div class="btn-group cart">
                                                    <button type="button" class="btn btn-success">
                                                        Add to cart 
                                                    </button>
                                                </div>
                                                <div class="btn-group wishlist">
                                                    <button type="button" class="btn btn-danger">
                                                        Add to wishlist 
                                                    </button>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class=" col-xs-12 container-fluid">		
                                        <div class="col-md-12 product-info">
                                            <ul id="myTab" class="nav nav-tabs nav_tabs">

                                                <li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
                                                <li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
                                                <li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div class="tab-pane fade in active" id="service-one">

                                                    <section class="container product-info">
                                                        The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.

                                                        <h3>Corsair Gaming Series GS600 Features:</h3>
                                                        <li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
                                                        <li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
                                                        <li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
                                                        <li>0.99 Active Power Factor Correction provides clean and reliable power</li>
                                                        <li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to select the voltage input!</li>
                                                        <li>Extra long fully-sleeved cables support full tower chassis</li>
                                                        <li>A three year warranty and lifetime access to Corsair’s legendary technical support and customer service</li>
                                                        <li>Over Current/Voltage/Power Protection, Under Voltage Protection and Short Circuit Protection provide complete component safety</li>
                                                        <li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
                                                        <li>MTBF: 100,000 hours</li>
                                                        <li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
                                                    </section>

                                                </div>
                                                <div class="tab-pane fade" id="service-two">

                                                    <section class="container">

                                                    </section>

                                                </div>
                                                <div class="tab-pane fade" id="service-three">

                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                       
                    </div>
                </div>
            

            <!-- !BANNER 2 END -->





            <!-- !FOOTER START -->
            <footer>

                <!-- !FOOTER NAV START -->
                <div class="jumbotron vivotek_footer_jumbotron">
                    <div class="container">

                        <div class="row">

                            <!-- Sitelink starts -->
                            <!-- !FOOTER SUB NAV START -->
                            <h1 class="sr-only">Sub Navigation</h1>
                            <nav>
                                <ul class="col-sm-12 col-md-8 nav nav-pills vivotek_footer_nav">
                                    <li class="dropup">
                                        <a href="about-vivotek/index.html" class="dropdown-toggle" data-toggle="dropdown"><h1>About VIVOTEK <b class="caret"></b></h1></a>
                                        <ul class="dropdown-menu vivotek_footer_nav-dropdown-menu">
                                            <li><a href="about-vivotek/index.html" target="_self"><h2>Overview</h2></a></li>
                                            <li><a href="milestones/index.html" target="_self"><h2>Milestone</h2></a></li>
                                            <li><a href="awards/index.html" target="_self"><h2>Awards</h2></a></li>
                                            <li><a href="http://green.vivotek.com/" target="_blank"><h2>Green VIVOTEK</h2></a></li>
                                            <li><a href="privacy/index.html" target="_self"><h2>Privacy Policy</h2></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropup">
                                        <a href="news/index.html" class="dropdown-toggle" data-toggle="dropdown"><h1>Pressroom <b class="caret"></b></h1></a>
                                        <ul class="dropdown-menu vivotek_footer_nav-dropdown-menu">
                                            <li><a href="news/index.html" target="_self"><h2>News</h2></a></li>
                                            <li><a href="success-stories/index.html" target="_self"><h2>Success Stories</h2></a></li>
                                            <li><a href="e-newsletters/index.html" target="_self"><h2>E-Newsletters</h2></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="http://www.vivotek.com/event/" target="_self"><h1>Events</h1></a></li>
                                    <li><a href="careers/index.html" target="_self"><h1>Career</h1></a></li>
                                    <li><a href="tw/%c3%a6%c2%8a%c2%95%c3%a8%c2%b3%c2%87%c3%a4%c2%ba%c2%ba%c3%a5%c2%9c%c2%92%c3%a5%c2%9c%c2%b0/index.html" target="_self"><h1>Investors</h1></a></li>
                                    <li><a href="contact/index.html" target="_self"><h1>Contact Us</h1></a></li>
                                    <li><a href="sitemap/index.html" target="_self"><h1>Site Map</h1></a></li>
                                    <!-- <li><a href="http://www.vivotek.com/profile/" target="_self">My Profile</a></li> -->
                                </ul>
                            </nav>
                            <!-- !FOOTER SUB NAV END -->

                            <!-- !FOOTER SOCIAL MEDIA START -->
                            <h1 class="sr-only">VIVOTEK @ Social Media</h1>
                            <nav>
                                <ul class="col-sm-12 col-md-4 list-unstyled list-inline tooltips vivotek_footer_social">
                                    <li id="enews"><a href="e-newsletters/index.html" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Subscribe eNews" target="_blank"><i class="icon-fontello-article-alt border_sol border_cicle border_w1 font_size_068"></i><span class="sr-only"><h1>Subscribe Monthly eNews</h1></span></a></li>
                                    <li id="youtube"><a href="http://www.youtube.com/vivotekweb/" data-toggle="tooltip" data-placement="top" title="" data-original-title="VIVOTEK @ YouTube" target="_blank"><i class="icon-fontello-youtube border_sol border_cicle border_w1 font_size_068"></i><span class="sr-only"><span class="sr-only"><h1>VIVOTEK @ YouTube</h1></span></a></li>
                                    <li id="facebook"><a href="http://www.facebook.com/VIVOTEK/" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Follow VIVOTEK @ Facebook" target="_blank"><i class="icon-fontello-facebook border_sol border_cicle border_w1 font_size_068"></i><span class="sr-only"><h1>Follow VIVOTEK @ Facebook</h1></span></a></li>
                                    <li id="twitter"><a href="http://twitter.com/vivotek/" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow VIVOTEK's Tweets" target="_blank"><i class="icon-fontello-twitter border_sol border_cicle border_w1 font_size_068"></i><span class="sr-only"><h1>Follow VIVOTEK's Tweets</h1></span></a></li>
                                </ul>
                            </nav>
                            <!-- !FOOTER SOCIAL MEDIA END -->
                            <!-- Sitelink ends -->

                        </div>

                    </div>
                </div>
                <!-- !FOOTER NAV END -->

                <!-- !FOOTER BOTTOM END -->
                <div class="container vivotek_footer_copyright_container">

                    <div class="row">

                        <!-- !FOOTER EMC START -->
                        <h1 class="sr-only">VIVOTEK Quality Certification</h1>
                        <section>
                            <img src="image/homepage/emc.png" alt="VIVOTEK Quality Certification" class="col-sm-12 col-md-4 pull-right vivotek_footer_emc">
                            <ul class="sr-only">
                                <li><h1>FCC</h1></li>
                                <li><h1>CE</h1></li>
                                <li><h1>TL9000</h1></li>
                                <li><h1>TUV</h1></li>
                                <li><h1>RoHS</h1></li>
                                <li><h1>IEC</h1></li>
                                <li><h1>IECQ</h1></li>
                            </ul>
                        </section>
                        <!-- !FOOTER EMC END -->
                        <!-- !FOOTER COPYRIGHT START -->
                        <h1 class="sr-only">Copyright</h1>
                        <section>
                            <h2 class="col-sm-12 col-md-8 vivotek_footer_copyright">Copyright &copy; VIVOTEK Inc. All rights reserved.</h2>
                        </section>
                        <!-- !FOOTER OVER START -->

                    </div>

                </div>
                <!-- !FOOTER BOTTOM END -->

            </footer>
            <!-- !FOOTER END -->





            <!-- !JAVASCRIPT START -->
            <script src="../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/jquery/jquery-1.10.1.min.js"><\/script>')</script>
            <script src="js/bootstrap/bootstrap.min.js"></script>
            <script src="js/bootstrap/application.js"></script>
            <script src="../cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
            <script src="js/bootstrap/h.js"></script>
            <script src="js/bootstrap/highlight.min.js"></script>
            <script src="js/bootstrap/holder.min.js"></script>
            <script src="js/bootstrap/jquery.min.js"></script>
            <script src='jquery-1.8.3.min.js'></script>
            <script src='js/zoomer/jquery.elevatezoom.js'></script>
            <!-- !OUTDATED BROWSER START -->
            
            <script>
                $(document).ready(function() {
                    
                    
                    $('.gallerythumbnail').on('click', function() {
                        
                        var src = $("#"+this.id+' img' ).attr('src');
                        var zoom = src.replace("small","large");
                        
                        console.log(zoom);
                        var img = $('<img />', {    src    : src,
                                                    
                                                'id': 'item-display',
                                                'data-zoom-image' : zoom
                                  });
                                  
                            $('#item_center').html(img).show();
                            $("#"+this.id+' img').attr('data-zoom-image', zoom);
                            
                            $('#item-display').elevateZoom({
                                zoomType: "inner",
                                cursor: "crosshair",
                                zoomWindowFadeIn: 500,
                                zoomWindowFadeOut: 750
                            }); 
                        });
                        
                        $('#item-display').elevateZoom({
                                zoomType: "inner",
                                cursor: "crosshair",
                                zoomWindowFadeIn: 500,
                                zoomWindowFadeOut: 750
                            }); 
                    });
                    
            </script>
            
            <script>
//USING jQuery
$(document).ready(function () {
    outdatedBrowser({
        bgColor: '#f25648',
        color: '#ffffff',
        lowerThan: 'transform',
        languagePath: '/js/outdatedbrowser/lang/en.html'
    })
})
            </script>
            <!-- !OUTDATED BROWSER END -->
            <!-- !ICONIC 字型 START -->
            <script src="js/iconic/iconic.min.js"></script>
            <!-- !ICONIC 字型 END -->
            <!-- !MEGA MENU UNIVERSAL JAVASCRIPT START -->
            <script src="js/mgmenu_universal/mgmenu_plugins.js"></script>
            <script src="js/mgmenu_universal/mgmenu.js"></script>
            <script>
$(document).ready(function ($) {
    $('#mgmenu1').universalMegaMenu({
        menu_effect: 'hover_fade',
        menu_speed_show: 300,
        menu_speed_hide: 200,
        menu_speed_delay: 200,
        menu_click_outside: true,
        menubar_trigger: true,
        menubar_hide: false,
        menu_responsive: true
    });
    megaMenuContactForm();
});
            </script>
            <!-- !MEGA MENU UNIVERSAL JAVASCRIPT END -->
            <!-- ROYALSLIDER START -->
            <script src="js/royalslider/royalslider/jquery.royalslider.min.js"></script>
            <script src="js/royalslider/assets/preview-assets/js/jquery-ui-1.8.22.custom.min.html"></script>
            <script id="addJS">
jQuery(document).ready(function ($) {
    $('#content-slider-1').royalSlider({
        arrowsNav: false,
        autoHeight: true,
        autoPlay: {
            enabled: true,
            pauseOnHover: true
        },
        autoScaleSlider: false,
        fadeinLoadedSlide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'tabs',
        imageScaleMode: 'none',
        imageAlignCenter: false,
        loop: false,
        loopRewind: true,
        numImagesToPreload: 6,
        keyboardNavEnabled: true,
        usePreloader: true
    });
    $('#content-slider-2').royalSlider({
        arrowsNav: false,
        autoHeight: true,
        autoPlay: {
            enabled: false,
            pauseOnHover: false
        },
        autoScaleSlider: false,
        fadeinLoadedSlide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'tabs',
        imageScaleMode: 'none',
        imageAlignCenter: false,
        loop: false,
        loopRewind: true,
        numImagesToPreload: 6,
        keyboardNavEnabled: true,
        usePreloader: false
    });
    $('#content-slider-3').royalSlider({
        arrowsNav: false,
        autoHeight: true,
        autoPlay: {
            enabled: false,
            pauseOnHover: false
        },
        autoScaleSlider: false,
        fadeinLoadedSlide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'tabs',
        imageScaleMode: 'none',
        imageAlignCenter: false,
        loop: false,
        loopRewind: true,
        numImagesToPreload: 6,
        keyboardNavEnabled: true,
        usePreloader: false
    });
    $('#content-slider-5').royalSlider({
        arrowsNav: false,
        autoHeight: true,
        autoPlay: {
            enabled: false,
            pauseOnHover: false
        },
        autoScaleSlider: false,
        autoScaleSliderWidth: 2,
        autoScaleSliderHeight: 1,
        fadeinLoadedSlide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'tabs',
        imageScaleMode: 'none',
        imageAlignCenter: false,
        loop: false,
        loopRewind: true,
        numImagesToPreload: 6,
        keyboardNavEnabled: true,
        usePreloader: false
    });
});
            </script>
            <!-- ROYALSLIDER END -->
            <!-- !VU START -->
            <script type="text/javascript">
                adroll_adv_id = "Q5EVWUESQNFYTBVCGGOK6E";
                adroll_pix_id = "QGLQD55G7ZGWLCEJ2KWV4X";
                (function () {
                    var oldonload = window.onload;
                    window.onload = function () {
                        __adroll_loaded = true;
                        var scr = document.createElement("script");
                        var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                        scr.setAttribute('async', 'true');
                        scr.type = "text/javascript";
                        scr.src = host + "/j/roundtrip.js";
                        ((document.getElementsByTagName('head') || [null])[0] ||
                                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                        if (oldonload) {
                            oldonload()
                        }
                    };
                }());
            </script>
            <!-- !VU END -->
            <!-- !GOOGLE-ANALYTICS START -->
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-1877002-1', 'auto');
                ga('send', 'pageview');

            </script>
            <!-- !GOOGLE-ANALYTICS END -->
            <!-- !JAVASCRIPT END -->
        </body>

        <!-- Mirrored from www.vivotek.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Aug 2015 04:17:50 GMT -->
    </html>