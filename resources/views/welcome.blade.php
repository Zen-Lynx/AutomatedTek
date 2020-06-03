@extends('layouts.app')

@section('content')

<div class="nk-main">
<div class="materialert success blink_me" id="livecountdown111" style="margin:0px;border-radius:0px;font-family: Teky !important;font-size:13px !important;">
<div class="material-icons">check</div>
ðŸ‰ðŸš€ Dragon's Launch Success. Save 95% On Our Commissions!
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("May 30, 2020 16:22:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("livecountdown").innerHTML = "<div class='material-icons'>error_outline</div>ðŸ‰ðŸš€ Dragon's Launch : " + days + " Days " + hours + " Hours "
  + minutes + " Minutes " + seconds + " Seconds" ;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "COMPLETED AWAITING CUSTOMER";
  }
}, 1000);
</script>
            
<!-- START: Header Title -->
<!--
    Additional Classes:
        .nk-header-title-sm
        .nk-header-title-md
        .nk-header-title-lg
        .nk-header-title-xl
        .nk-header-title-full
        .nk-header-title-parallax
        .nk-header-title-parallax-opacity
        .nk-header-title-boxed
-->
<div class="nk-header-title nk-header-title-lg nk-header-title-parallax-opacity">
    <div class="bg-image">
        <img src="https://wallpaperaccess.com/full/1446066.jpg" alt="" class="jarallax-img">
    </div>
    <div class="nk-header-table" style="padding-top: 0px;background: #0000008f;">
        <div class="nk-header-table-cell">
            <div class="container">
                
                
                
                
                    <div class="nk-header-text">
                        
    <!--<h1 class="nk-title display-3">Automated Dragon</h1>-->
<img src="https://media.discordapp.net/attachments/711030906470662256/715989880588599397/atwhite.png" alt="" style="
    width: 800px;
">
    <p style="font-family: Teky !important;
">Welcome to Automated Tek! Want to play on our servers or ask for a commission for ARK Mods? We're here for you!</p>

    <!--<div class="nk-gap-2"></div>
    <a href="https://themeforest.net/item/godlike-the-game-template/17166433?ref=_nK" target="_blank" class="nk-btn nk-btn-lg nk-btn-color-main-1">
        <span>Purchase</span>
    </a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="https://nkdev.info/docs/godlike-html/" class="nk-btn nk-btn-lg link-effect-4">
        <span>Documentation</span>
    </a>-->

    <div class="nk-gap-4"></div>

                    </div>
                
                
            </div>
        </div>
    </div>
    
</div>
<!-- END: Header Title -->


        

        
    <!-- START: Rev Slider -->
    <div class="mnt-80">
        <div id="rev_slider_50_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="photography-carousel48" style="padding:0px;">
            <div id="rev_slider_50_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-185" data-transition="slideoverhorizontal" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="assets/images/gallery-3-thumb.jpg"  data-rotate="0"  data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/gallery-3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-192" data-transition="slideoververtical" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="assets/images/gallery-5-thumb.jpg"  data-rotate="0"  data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/gallery-5.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-186" data-transition="slideoverhorizontal" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="assets/images/gallery-4-thumb.jpg"  data-rotate="0"  data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/gallery-4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-183" data-transition="slideoververtical" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="assets/images/gallery-1-thumb.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/gallery-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    </div>
    <!-- END: Rev Slider -->

    <!-- START: Features -->
    <div class="container">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap lg-gap">
            <div class="col-md-4">
                <div class="nk-ibox">
                    <div class="nk-ibox-icon nk-ibox-icon-circle">
                        <span class="ion-ios-game-controller-b"></span>
                    </div>
                    <div class="nk-ibox-cont">
                        <h2 class="nk-ibox-title" style=" -webkit-background-clip: text !important;-webkit-text-fill-color: transparent;background: linear-gradient(120deg, rgba(0,255,244,1) 0%, rgba(10,101,255,1) 0%, rgba(0,212,255,1) 100%);">High Quality Gaming Servers</h2>
                        We want you to experience ARK like never before by playing on our servers and having fun without worring about survival while testing our mods or your commission!
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nk-ibox">
                    <div class="nk-ibox-icon nk-ibox-icon-circle">
                        <span class="ion-fireball"></span>
                    </div>
                    <div class="nk-ibox-cont">
                        <h2 class="nk-ibox-title" style=" -webkit-background-clip: text !important;-webkit-text-fill-color: transparent;background: linear-gradient(120deg, rgba(0,255,244,1) 0%, rgba(10,101,255,1) 0%, rgba(0,212,255,1) 100%);">Fast & Seamless Delivery</h2>
                        We work on your orders fast and delivery them in time. We always provide quality support and fast commissions with our custom software to help us keep track of your order.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nk-ibox">
                    <div class="nk-ibox-icon nk-ibox-icon-circle">
                        <span class="ion-ribbon-a"></span>
                    </div>
                    <div class="nk-ibox-cont">
                        <h2 class="nk-ibox-title" style=" -webkit-background-clip: text !important;-webkit-text-fill-color: transparent;background: linear-gradient(120deg, rgba(0,255,244,1) 0%, rgba(10,101,255,1) 0%, rgba(0,212,255,1) 100%);">Many Years Of Experience</h2>
                        We pick the best staff for the job, to provide the best quality in your order and to ensure no bugs occur while in the final release stage.
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
    </div>
    <!-- END: Features -->

    <!-- START: About -->
    <div class="nk-box bg-dark-1">
        <div class="container text-center">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <h2 class="nk-title h1" style="font-family: Teky; -webkit-background-clip: text !important;-webkit-text-fill-color: transparent;background: linear-gradient(120deg, rgba(0,255,244,1) 0%, rgba(10,101,255,1) 0%, rgba(0,212,255,1) 100%);">Our Work</h2>
            <div class="nk-gap-3"></div>

            <p class="lead" style="font-family: Teky;">We make mods and programs for companys or individual for a cheap cost often with MASSIVE sales! We have a staff team behind the scenes working on our mods 24/7.</p>


            <div class="nk-gap-2"></div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="nk-box-2 nk-box-line">
                        <!-- START: Counter -->
                        <div class="nk-counter-3">
                            <div class="nk-count" style="font-family: Teky;">26</div>
                            <h3 class="nk-counter-title h4" style="font-family: Teky;">Mods Created</h3>
                            <div class="nk-gap-1"></div>
                        </div>
                        <!-- END: Counter -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-box-2 nk-box-line">
                        <!-- START: Counter -->
                        <div class="nk-counter-3">
                            <div class="nk-count" style="font-family: Teky;">3</div>
                            <h3 class="nk-counter-title h4" style="font-family: Teky;">Finished Projects</h3>
                            <div class="nk-gap-1"></div>
                        </div>
                        <!-- END: Counter -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-box-2 nk-box-line">
                        <!-- START: Counter -->
                        <div class="nk-counter-3">
                            <div class="nk-count" style="font-family: Teky;">735</div>
                            <h3 class="nk-counter-title h4" style="font-family: Teky;">Happy Customers</h3>
                            <div class="nk-gap-1"></div>
                        </div>
                        <!-- END: Counter -->
                    </div>
                </div>
            </div>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-6"></div>
        </div>
    </div>
    <!-- END: About -->

    <!-- START: Video -->
    <div class="container">
                    <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
<h2 class="nk-title h1 align-center" style="font-family: Teky; -webkit-background-clip: text !important;-webkit-text-fill-color: transparent;background: linear-gradient(120deg, rgba(0,255,244,1) 0%, rgba(10,101,255,1) 0%, rgba(0,212,255,1) 100%);">Our latest commission</h2>
            <div class="nk-gap-3"></div>

            <p class="lead align-center" style="font-family: Teky;font-weight: 100;">
Our latest commission is the Hangout Lobby Map for Naked Zombo / DarkARK.GG! The Hangout Lobby Map is a map where you can have fun without getting killed or worring to survive. It includes many events and gets updated! Visit DarkARK.GG for more info!
</p>
                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=qtZd2zzscBA&feature=youtu.be" data-video-thumb="unknown.png"></div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
    </div>
    <!-- END: Video -->

    <!-- START: Coming Soon -->
    <div class="nk-box bg-dark-1 text-center">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="bg-image op-3">
            <img src="dragon.jpg" alt="" class="jarallax-img">
        </div>
        <div class="container">
            <h2 class="display-4" style="font-family: Teky;">Dragon Launched, Save 95% OFF on our Commissions!</h2>
            <div class="nk-gap"></div>
            <div style="font-family: Teky;">This special discount is to encourage space exploration! GO DRAGON! ðŸ‰</div>
            <!--<div class="nk-gap-4"></div>

            <div class="nk-countdown" data-end="2020-05-30 21:22" data-timezone="CET" style="font-family: Teky !important;"></div>-->
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
    </div>
    <!-- END: Coming Soon -->

    <!-- START: Testimonials -->
    <!--<div class="nk-gap-6"></div>
    <div class="nk-gap-2"></div>
    <div class="nk-carousel-2" data-autoplay="12000" data-dots="true">
        <div class="nk-carousel-inner">
            <div><div>
                <blockquote class="nk-testimonial-2">
                    <div class="nk-testimonial-photo" style="background-image: url('assets/images/avatar-1-sm.jpg');"></div>
                    <div class="nk-testimonial-body">
                        <em>"Bring. Isn't years gathered give made moved. Waters sea forth. It. Gathered own abundantly kind can't it, lesser behold, may."</em>
                    </div>
                    <div class="nk-testimonial-name h4">Lesa Cruz</div>
                    <div class="nk-testimonial-source">Frontend Developer, Google</div>
                </blockquote>
            </div></div>
            <div><div>
                <blockquote class="nk-testimonial-2">
                    <div class="nk-testimonial-photo" style="background-image: url('assets/images/avatar-2-sm.jpg');"></div>
                    <div class="nk-testimonial-body">
                        <em>"Years heaven. Dominion light and every appear that creeping all. Light gathering don't given made give open, cattle was light."</em>
                    </div>
                    <div class="nk-testimonial-name h4">Kurt Tucker</div>
                    <div class="nk-testimonial-source">CEO, Envato</div>
                </blockquote>
            </div></div>
            <div><div>
                <blockquote class="nk-testimonial-2">
                    <div class="nk-testimonial-photo" style="background-image: url('assets/images/avatar-3-sm.jpg');"></div>
                    <div class="nk-testimonial-body">
                        <em>"Female good moving Very thing form earth, for above herb dominion for made fifth. One them. Seas. Appear fourth seas."</em>
                    </div>
                    <div class="nk-testimonial-name h4">Katie Anderson</div>
                    <div class="nk-testimonial-source">Product Designer, Apple</div>
                </blockquote>
            </div></div>
            <div><div>
                <blockquote class="nk-testimonial-2">
                    <div class="nk-testimonial-photo" style="background-image: url('assets/images/avatar-4-sm.jpg');"></div>
                    <div class="nk-testimonial-body">
                        <em>"Yielding be was which heaven fill fruit. You'll shall doesn't green. His divided they're of won't you isn't void cattle."</em>
                    </div>
                    <div class="nk-testimonial-name h4">Luke Fuller</div>
                    <div class="nk-testimonial-source">Copywriter, Dropbox</div>
                </blockquote>
            </div></div>
            <div><div>
                <blockquote class="nk-testimonial-2">
                    <div class="nk-testimonial-photo" style="background-image: url('assets/images/avatar-5-sm.jpg');"></div>
                    <div class="nk-testimonial-body">
                        <em>"God, have rule living creature own the signs. Set herb open, seed wherein god appear shall give lights. Waters to."</em>
                    </div>
                    <div class="nk-testimonial-name h4">Felicia Meyer</div>
                    <div class="nk-testimonial-source">Backend Developer, Twitter</div>
                </blockquote>
            </div></div>
        </div>
    </div>
    <div class="nk-gap-2"></div>
    <div class="nk-gap-6"></div>-->
    <!-- END: Testimonials -->

    <!-- START: Subscribe -->
    <div class="nk-box bg-dark-1">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <h2 class="nk-title text-center h1" style="font-family: Teky; -webkit-background-clip: text !important;-webkit-text-fill-color: transparent;background: linear-gradient(120deg, rgba(0,255,244,1) 0%, rgba(10,101,255,1) 0%, rgba(0,212,255,1) 100%);">Subscribe to our Newsletter</h2>
                    <div class="nk-gap-3"></div>

                    <!-- START: MailChimp Signup Form -->
                    <form action="//nkdev.us11.list-manage.com/subscribe/post?u=d433160c0c43dcf8ecd52402f&amp;id=7eafafe8f0" method="post" class="nk-mchimp validate" target="_blank">
                        <div class="input-group">
                            <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email *" style="font-family: Teky;"><br>
                            <button class="nk-btn nk-btn-lg link-effect-4" style="font-family: Teky;">Subscribe</button>
                        </div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d433160c0c43dcf8ecd52402f_7eafafe8f0" tabindex="-1" value=""></div>
                    </form>
                    <!-- END: MailChimp Signup Form -->
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Subscribe -->



        
            <!-- START: Footer -->
<!--
    Additional Classes:
        .nk-footer-parallax
        .nk-footer-parallax-opacity
-->
<footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
    <img class="nk-footer-top-corner" src="assets/images/footer-corner.png" alt="">

    

    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="nk-footer-logos">
            <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img src="https://media.discordapp.net/attachments/711030906470662256/715989880588599397/atwhite.png" alt="" width="440"></a>
                    </div>
        <div class="nk-gap"></div>

        <p style="font-family: Teky;font-size:14px;">
            &copy; 2020 Automated Tek Inc. Developed in association with Wicked Software. Automated Tek and related logos are registered trademarks. Automated Tek and related logos are registered trademarks or trademarks of Wicked Software LLC in C.A . and/or other countries. All other trademarks or trade names are the property of their respective owners. All Rights Reserved.
        </p>


        <p style="font-family: Teky;font-size:14px;">
        Active Theme : Dark Space<br><br>
	Powered by Draco Engine 
	</p>


        <div class="nk-footer-links">
            <a href="#" class="link-effect" style="font-family: Teky;">Terms of Service</a> <span>|</span> <a href="#" class="link-effect" style="font-family: Teky;">Privacy Policy</a>
        </div>

        <div class="nk-gap-4"></div>
    </div>
</footer>
<!-- END: Footer -->

        
    </div>

    

    <!--
    START: Share Buttons
        .nk-share-buttons-left
<center>Powered by Draco Engine</center>
<!--<div class="nk-share-buttons nk-share-buttons-left d-none d-md-flex">
    <ul>
        <li>
            <span class="nk-share-icon" title="Share page on Facebook" data-share="facebook">
                <span class="icon fa fa-facebook"></span>
            </span>
            <span class="nk-share-name">Facebook</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on Twitter" data-share="twitter">
                <span class="icon fa fa-twitter"></span>
            </span>
            <span class="nk-share-name">Twitter</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on Google+" data-share="google-plus">
                <span class="icon fa fa-google-plus"></span>
            </span>
            <span class="nk-share-name">Google Plus</span>
        </li>
        <!--
        <li>
            <span class="nk-share-icon" title="Share page on Pinterest" data-share="pinterest">
                <span class="icon fa fa-pinterest"></span>
            </span>
            <span class="nk-share-name">Pinterest</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on LinkedIn" data-share="linkedin">
                <span class="icon fa fa-linkedin"></span>
            </span>
            <span class="nk-share-name">LinkedIn</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on VK" data-share="vk">
                <span class="icon fa fa-vk"></span>
            </span>
            <span class="nk-share-name">Vkontakte</span>
        </li>
        -->
    </ul>
</div>


    <!--
    START: Side Buttons
        .nk-side-buttons-visible
Test
<!--<div class="nk-side-buttons nk-side-buttons-visible">
    <ul>
        <li>
            <a href="https://nkdev.info" target="_blank" class="nk-btn nk-btn-lg link-effect-4">Keep in Touch</a>
        </li>
        <li>
            <span class="nk-btn nk-btn-lg nk-btn-icon nk-bg-audio-toggle">
                <span class="icon">
                    <span class="ion-android-volume-up nk-bg-audio-pause-icon"></span>
                    <span class="ion-android-volume-off nk-bg-audio-play-icon"></span>
                </span>
            </span>
        </li>
        <li class="nk-scroll-top">
            <span class="nk-btn nk-btn-lg nk-btn-icon">
                <span class="icon ion-ios-arrow-up"></span>
            </span>
        </li>
    </ul>
</div>-->
<!-- END: Side Buttons -->


    
        <!--
    START: Search

    Additional Classes:
        .nk-search-light
-->
<div class="nk-search">
    <div class="container">
        <form action="#">
            <fieldset class="form-group nk-search-field">
                <input type="text" class="form-control" id="searchInput" placeholder="Search..." name="s">
                <label for="searchInput"><i class="ion-ios-search"></i></label>
            </fieldset>
        </form>
    </div>
</div>
<!-- END: Search -->

@endsection