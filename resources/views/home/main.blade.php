@extends('layout.app')
@section('content')
<!--start-home-->

<!--check-->
<div class="banner" id="home">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="index.html"><h1>Appizz</h1></a>
            </div>
            <div class="banner-grids">
                <ul class="banner-imgs">
                    <li><img src="{{URL::asset('assets/images/iphone.png')}}" alt="name" /></li>
                    <li><img src="{{URL::asset('assets/images/s2.png')}}" alt="name" /></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <h2>Appizz is the easiest way to keep track of your <span>daily exercise </span> & your <lable>healthy lifestyle</lable></h2>
        </div>
    </div>
</div>
<!--/welcome-->
<div class="about-section">
    <div class="container">
        <div class="ab-text">
            <h3>About Us</h3>
            <h4>Create Your App Landing Page
                in No Time with Appizz</h4>
            <p>Koleacene anritma hasesera deyuleser kertyase socis natoqu eagnis dist mte dulmuese feugiata lecenaser stricies phaledat nas seasnec sit amm easer erment. Utdolores urliquamiserat vpstas kertyase fertase lacus uisque nullakeirta bertyasera ferrode buytasas leriuyase misutasa doloetuytse.</p>
            <p>Koleacene anritma hasesera deyuleser kertyase socis natoqu eagnis dist mte dulmuese feugiata lecenaser stricies phaledat nas seasnec sit amm easer erment. Utdolores urliquamiserat vpstas kertyase fertase lacus uisque nullakeirta bertyasera ferrode buytasas leriuyase misutasa doloetuytse.</p>
        </div>
    </div>
</div>
<!--/news-->
<!-- features -->
<div class="features">
    <!-- container -->
    <div class="col-md-6 features-right">
        <h4>Features</h4>
        <div class="features-right-grids">
            <div class="features-right-grid right-top">
                <div class="design-left"> </div>
                <div class="design-right">
                    <h5>Beautiful design</h5>
                    <p>Duis bibendum diam non erat facilaisis tincidunt. </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="features-right-grid right-middle-top">
                <div class="design-left easy"> </div>
                <div class="design-right">
                    <h5>Easy to customize</h5>
                    <p>Duis bibendum diam non erat facilaisis tincidunt. </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="features-right-grid right-middle">
                <div class="design-left developer"> </div>
                <div class="design-right">
                    <h5>Developer Friendly</h5>
                    <p>Duis bibendum diam non erat facilaisis tincidunt. </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="features-right-grid right-bottom">
                <div class="design-left fully"> </div>
                <div class="design-right">
                    <h5>Fully Responsive</h5>
                    <p>Duis bibendum diam non erat facilaisis tincidunt. </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 slid">
        <script src="{{URL::asset('assets/js/responsiveslides.min.js')}}"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                $("#slider2").responsiveSlides({
                    auto: true,
                    pager: true,
                    speed: 300,
                    namespace: "callbacks",
                });
            });
        </script>
        <!--/End-slider-script-->
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider2">
                <li>
                    <div class="mobile-device">
                        <img src="{{URL::asset('assets/images/m1.png')}}" alt="" />
                    </div>
                </li>
                <li>
                    <div class="mobile-device green-device">
                        <img src="{{URL::asset('assets/"images/m2.png')}}"  />
                    </div>
                </li>
                <li>
                    <div class="mobile-device">
                        <img src="{{URL::asset('assets/images/m1.png')}}" alt="" />
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //features -->
<!--screenshots-->
<div id="screenshots" class="screen-shots">
    <div class="container">
        <h4>Screen shots</h4>
        <div class="review-slider">
            <ul id="flexiselDemo1">
                <li><img src="{{URL::asset('assets/images/s1.png')}}" alt=""/></li>
                <li><img src="{{URL::asset('assets/images/s2.png')}}" alt=""/></li>
                <li><img src="{{URL::asset('assets/images/s3.png')}}" alt=""/></li>
                <li><img src="{{URL::asset('assets/images/s4.png')}}" alt=""/></li>
                <li><img src="{{URL::asset('assets/images/s5.png')}}" alt=""/></li>
            </ul>
            <script type="text/javascript">
                $(window).load(function() {

                    $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 2
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 3
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });
                });
            </script>
            <script type="text/javascript" src="{{URL::asset('assets/js/jquery.flexisel.js')}}"></script>
        </div>
    </div>
</div>
<!--light-box-files -->
<script src="{{URL::asset('assets/js/jquery.chocolat.js')}}"></script>
<link rel="stylesheet" href="{{URL::asset('assets/css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8" />
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('.gallery-bottom a').Chocolat();
    });
</script>
<!--gallery-starts-->
<div class="gallery" id="gallery">
    <div class="container">
        <h3>Gallery</h3>
        <div class="gallery-bottom">
            <div class="col-md-4 gallery-left">
                <a href="{{URL::asset('assets/images/g1.jpg')}}">
                    <img src="{{URL::asset('assets/images/g1.jpg')}}" alt="name" />
                </a>
            </div>
            <div class="col-md-4 gallery-left">
                <a href="{{URL::asset('assets/images/g2.jpg')}}">
                    <img src="{{URL::asset('assets/images/g2.jpg')}}" alt="name" />
                </a>
            </div>
            <div class="col-md-4 gallery-left">
                <a href="{{URL::asset('assets/images/g3.jpg')}}">
                    <img src="{{URL::asset('assets/images/g3.jpg')}}" alt="name" />
                </a>
            </div>
            <div class="col-md-4 gallery-left">
                <a href="{{URL::asset('assets/images/g4.jpg')}}">
                    <img src="{{URL::asset('assets/images/g4.jpg')}}" alt="name" />
                </a>
            </div>
            <div class="col-md-4 gallery-left">
                <a href="{{URL::asset('assets/images/g6.jpg')}}">
                    <img src="{{URL::asset('assets/images/g6.jpg')}}" alt="name" />
                </a>
            </div>
            <div class="col-md-4 gallery-left">
                <a href="{{URL::asset('assets/images/g5.jpg')}}">
                    <img src="{{URL::asset('assets/images/g5.jpg')}}" alt="name" />
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--gallery-->
<!--members-->
<div id="members" class="members">
    <div class="container">
        <div class="member-grids">
            <div class="member-grid-left">
                <h3><p>Some</p>Numbers</h3>
            </div>
            <div class="member-grid-right">
                <div class="col-md-4 member-grid-right-grid text-center">
                    <span class="m-icon1"> </span>
                    <h4>12 000</h4>
                    <label> </label>
                    <p>Real Users</p>
                </div>
                <div class="col-md-4 member-grid-right-grid text-center">
                    <span class="m-icon2"> </span>
                    <h4>12 000</h4>
                    <label> </label>
                    <p>Downloads</p>
                </div>
                <div class="col-md-4 member-grid-right-grid lost text-center">
                    <span class="m-icon3"> </span>
                    <h4>12 000</h4>
                    <label> </label>
                    <p>Events</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- members -->
<!--/start-text-slider--->
<div  class="testimonials" id="testimonials">
    <h3>Testimonials</h3>
    <div class="wmuSlider example1">
        <div class="container-flueid">
            <article style="position: absolute; width:64%; opacity: 0;">
                <div class="cont span_2_of_3  client-main">
                    <div class="client">
                        <img src="images/client.jpg" alt="">
                    </div>
                    <h4>Alif noor</h4>
                    <p>Love this app!gravida proin nibh vel velit autor.Aenean sollicitudin,I am an experienced and passionate user interface designer with interaction design background.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500.</p>
                    <span> </span>
                </div>
            </article>
            <article style="position: absolute; width:64%; opacity: 0;">
                <div class="cont span_2_of_3  client-main">
                    <div class="client">
                        <img src="images/client2.jpg" alt="">
                    </div>
                    <h4>Alif noor</h4>
                    <p>Love this app!gravida proin nibh vel velit autor.Aenean sollicitudin,I am an experienced and passionate user interface designer with interaction design background.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500.</p>
                    <span> </span>
                </div>
            </article>
            <article style="position: absolute; width:64%; opacity: 0;">
                <div class="cont span_2_of_3  client-main">
                    <div class="client">
                        <img src="images/client.jpg" alt="">
                    </div>
                    <h4>Alif noor</h4>
                    <p>Love this app!gravida proin nibh vel velit autor.Aenean sollicitudin,I am an experienced and passionate user interface designer with interaction design background.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500.</p>
                    <span> </span>
                </div>
            </article>

            <script src="{{URL::asset('assets/js/jquery.wmuSlider.js')}}"></script>
            <script>
                $('.example1').wmuSlider();
            </script>
        </div>
    </div>
</div>
<!---/text-slider-->
<!-- Contact start-->
<div class="contact" id="contact">
    <div class="container">
        <h3>Contact</h3>
        <div class="row contact-row">
            <div class="col-md-6 contact-row-left">
                <h3>Curabitur ornare neque </h3>
                <p>id sagittis commodo. Vivamus rhoncus feugiat leo id dictum. Nulla fermentum nibh eu velit molestie ultricies. Curabitur non gravida urna, at varius tortor. Donec feugiat, nisl ultrices adipiscing pharetra, augue lorem pharetra tortor, non tincidunt urna diam in libero. Nam et neque ut nisi consectetur tempor. Maecenas gravida est eu nisi dignissim gravida. Proin mollis sodales ullamcorper.</p>
                <p class="add-mark"><span><img src="{{URL::asset('assets/images/point.png')}}" /></span>Venenatis neque sit amet ante aliquam sollicitudin</p>
                <p class="cel-mark"><span><img src="{{URL::asset('assets/images/ph.png')}}" /></span>0888-7738-21   /   0977-333-222-111</p>
                <p class="ema-mark"><span><img src="{{URL::asset('assets/images/ema-sy.png')}}" /></span><a href="mailto:example@mail.com">example@mail.com</a></p>
            </div>
            <div class="col-md-6 contact-row-right">
                <form>
                    <input type="text" placeholder="Type Your Name" required=""/>
                    <input type="text" placeholder="Type Your Email" required=""/>
                    <textarea placeholder="Type Your Message" required=""></textarea>
                    <input type="reset"/><input type="submit" />
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<!-- Contact End-->
<!--map-->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675115.8258740564!2d-98.4671417929578!3d34.91371150021706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1434956093308" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<!-- /footer-->
<div class="footer">
    <div class="footer-content">
        <div class="footer-main">
            <div class="col-md-6 footer-logo ">
                <div class="logo two">
                    <a href="index.html"><h3>Appizz</h3></a>
                </div>
            </div>
            <div class="col-md-6 footer-button">
                <div class="footer-button"><a href="#">download</a></div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="social-icons">
            <ul class="top-social-icons" list-unstyled>
                <li> <a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
                <li> <a class="twitter simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
                <li> <a class="pin simptip-position-bottom simptip-movable" data-tooltip="Pinterest" href="#"> </a> </li>
                <li> <a class="youtube simptip-position-bottom simptip-movable" data-tooltip="Youtube" href="#"> </a> </li>
                <li> <a class="vimeo simptip-position-bottom simptip-movable" data-tooltip="Vimeo" href="#"> </a> </li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="copy-right">
            <!-- <p> &#169; 2015 Appizz. All Rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a></p> -->
        </div>
    </div>
</div>
<!-- //footer-->
<!--start-smoth-scrolling-->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!--start-smoth-scrolling-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    @endsection
