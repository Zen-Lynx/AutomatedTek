<!DOCTYPE html>    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We provide quality modding and commissions for your needs and quality game servers so you can have fun in ARK!">
    <meta name="author" content="tekxilog">
    <meta charset="utf-8"/>
    <title>Automated Tek</title>
    <link rel="icon" type="image/png" href="icon.png">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700%7cMarcellus+SC" rel="stylesheet">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
    <style>
.nk-navbar .nk-nav li.active > a {
    color: #007bff !important;
}

@font-face {
    font-family: Teky;
    src: url("font.otf") format("opentype");
}

body {
background: #212529 !important;
}

html {
    line-height: 1.5;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
}
.materialert{
    position: relative;
    min-width: 150px;
    padding: 15px;
    margin-bottom: 20px;
    margin-top: 15px;
    border: 1px solid transparent;
    border-radius: 4px;
    transition: all 0.1s linear;
    webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}
.materialert .material-icons{
    margin-right: 10px;
}
.materialert .close-alert{
    -webkit-appearance: none;
    border: 0;
    cursor: pointer;
    color: inherit;
    background: 0 0;
    font-size: 22px;
    line-height: 1;
    font-weight: bold;
    text-shadow: 0 1px 0 rgba(255, 255, 255, .7);
    filter: alpha(opacity=40);
    margin-bottom: -5px;
    position: absolute;
    top: 16px;
    right: 5px;
}
.materialert.info{
    background-color: #039be5;
    color: #fff;
}
.materialert.success{
    background-color: #43a047;
    color: #fff;
}
.materialert.error{
    background-color: #c62828;
    color: #fff;
}
.materialert.danger{
    background-color: #c62828;
    color: #fff;
}
.materialert.warning{
    background-color: #fbc02d;
    color: #fff;
}

.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0.5;
  }
}

.nk-navbar a {
    overflow: hidden;
    font-family: Teky !important;
    font-weight: 100 !important;
    font-size: 11px !important;
    color: inherit;
}
    </style>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="assets/vendor/revolution/css/settings.css">
    <link rel="stylesheet" href="assets/vendor/revolution/css/layers.css">
    <link rel="stylesheet" href="assets/vendor/revolution/css/navigation.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Photoswipe -->
    <link rel="stylesheet" href="assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- DateTimePicker -->
    <link rel="stylesheet" href="assets/vendor/jquery-datetimepicker/build/jquery.datetimepicker.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" href="assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GODLIKE -->
    <link rel="stylesheet" href="assets/css/godlike.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
    <!-- START: Page Preloader -->
<div class="nk-preloader">
    <!--
         Preloader animation
         data-close-... data used for closing preloader
         data-open-...  data used for opening preloader
    -->
    <div class="nk-preloader-bg"
         style="background-color: #000;"
         data-close-frames="23"
         data-close-speed="1.2"
         data-close-sprites="./assets/images/preloader-bg.png"
         data-open-frames="23"
         data-open-speed="1.2"
         data-open-sprites="./assets/images/preloader-bg-bw.png">
    </div>

    <div class="nk-preloader-content">
        <div>
            <img class="nk-img" style="    width: 400px;" src="https://media.discordapp.net/attachments/711030906470662256/715983481997361264/automatedtekwhite.png" alt="GodLike - Gaming Bootstrap 4 Template" width="170">
            <div class="nk-preloader-animation"></div>
        </div>
    </div>

    <div class="nk-preloader-skip">Skip</div>
</div>
<!-- END: Page Preloader -->

    
        <!--
    START: Page Video Background

    Additional Attributes:
        data-video - Youtube/Vimeo/self-hosted video urls.
            self-hosted video example:
            data-video="mp4:./video/local-video.mp4,webm:./video/local-video.webm,ogv:./video/local-video.ogv"
        data-video-loop - loop video (true/false)
        data-video-mute - mute video music (true/false)
        data-video-volume - volume of video music (0-100)
        data-video-start-time - video start time in seconds
        data-video-end-time - video end time in seconds
        data-video-pause-on-page-leave - pause video when the page not in focus (true/false)
-->
<!--<div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/images/page-background.jpg');"></div>
--><!-- END: Page Background -->

<!--
    START: Page Audio Background

    Additional Attributes:
        data-audio - URL to audio file
        data-audio-volume - audio volume (0-100)
        data-audio-autoplay - autoplay audio (true/false)
        data-audio-loop - loop audio (true/false)
        data-audio-pause-on-page-leave - pause video when the page not in focus (true/false)
-->
<!--<div class="nk-page-background-audio d-none" data-audio="assets/mp3/purpleplanetmusic-desolation.mp3" data-audio-volume="100" data-audio-autoplay="true" data-audio-loop="true" data-audio-pause-on-page-leave="true"></div>
--><!-- END: Page Background -->

    
    
<!-- START: Page Border -->
<!--<div class="nk-page-border">
    <div class="nk-page-border-t"></div>
    <div class="nk-page-border-r"></div>
    <div class="nk-page-border-b"></div>
    <div class="nk-page-border-l"></div>
</div>-->
<!-- END: Page Border -->



        



<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">

    
    
<!--
    START: Top Contacts

    Additional Classes:
        .nk-contacts-top-light
-->
    

    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
            .nk-navbar-light
            .nk-navbar-no-link-effect
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                
                <a href="index.html" class="nk-nav-logo">
			<img src="https://media.discordapp.net/attachments/711030906470662256/715989880588599397/atwhite.png" alt="" width="240">
                </a>
                
                
                <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile" style="    margin-top: 6px;">
                    <li class="active">
            <a href="/">
                Home</a><ul class="dropdown">
                        <li class="  ">
            <a href="index.html">
                Landing</a>
        </li><li class="active  ">
            <a href="index-main.html">
                Main</a>
        </li><li class="  ">
            <a href="index-game-promo.html">
                Game Promo</a>
        </li>
                    </ul>
        </li><li class="">
            <a href="#status">
                Network</a><ul class="dropdown">
                        <li class=" ">
            <a href="page-contact.html">
                Pages</a><ul class="dropdown">
                        <li class="  ">
            <a href="forum.html">
                Forum</a>
        </li><li class="  ">
            <a href="page-contact.html">
                Contact</a>
        </li><li class="  ">
            <a href="page-coming-soon.html">
                Coming Soon</a>
        </li><li class="  ">
            <a href="page-404.html">
                404</a>
        </li><li class="  ">
            <a href="page-age-check.html">
                Age Check</a>
        </li>
                    </ul>
        </li><li class="">
            <a href="layout-nav-default.html">
                Navigations</a><ul class="dropdown">
                        <li class="  ">
            <a href="layout-nav-default.html">
                Default</a>
        </li><li class="  ">
            <a href="layout-nav-default-transparent.html">
                Default Transparent</a>
        </li><li class="  ">
            <a href="layout-nav-main-top.html">
                Main Top Only</a>
        </li><li class="  ">
            <a href="layout-nav-main-side.html">
                Main Side</a>
        </li><li class="  ">
            <a href="layout-nav-main-top-fullscreen.html">
                Main Top + Fullscreen</a>
        </li><li class="  ">
            <a href="layout-nav-fullscreen-side.html">
                Fullscreen + Side</a>
        </li>
                    </ul>
        </li><li class="">
            <a href="layout-page-header.html">
                Headers</a><ul class="dropdown">
                        <li class="  ">
            <a href="layout-header.html">
                Size Default</a>
        </li><li class="  ">
            <a href="layout-header-sm.html">
                Size Small</a>
        </li><li class="  ">
            <a href="layout-header-md.html">
                Size Mid</a>
        </li><li class="  ">
            <a href="layout-header-lg.html">
                Size Large</a>
        </li><li class="  ">
            <a href="layout-header-full.html">
                Size Full</a>
        </li><li class="  ">
            <a href="layout-header-video.html">
                Video</a>
        </li><li class="  ">
            <a href="layout-header-video-plain.html">
                Video Plain</a>
        </li><li class="  ">
            <a href="layout-header-no.html">
                NO Header</a>
        </li>
                    </ul>
        </li><li class="  ">
            <a href="widgets.html">
                Widgets</a>
        </li><li class="  ">
            <a href="https://nkdev.info/docs/godlike-html/">
                Documentation</a>
        </li>
                    </ul>
        </li><li class=" nk-mega-item ">
            <a href="#">
                Community</a><div class="dropdown"><div class="bg-image">
                                <img src="assets/images/bg-menu.jpg" alt="" class="jarallax-img">
                            </div><ul>
                            
    
        <li>
            
                <ul>
                    <li class="  ">
            <a href="element-carousels.html">
                Carousels</a>
        </li><li class="  ">
            <a href="element-image-boxes.html">
                Image Boxes</a>
        </li><li class="  ">
            <a href="element-icon-boxes.html">
                Icon Boxes</a>
        </li><li class="  ">
            <a href="element-counters.html">
                Counters</a>
        </li><li class="  ">
            <a href="element-blockquotes.html">
                Block Quotes</a>
        </li><li class="  ">
            <a href="element-testimonials.html">
                Testimonials</a>
        </li><li class="  ">
            <a href="element-team-members.html">
                Team Members</a>
        </li>
                </ul>
            
        </li>
    
        <li>
            
                <ul>
                    <li class="  ">
            <a href="element-video-blocks.html">
                Video Blocks</a>
        </li><li class="  ">
            <a href="element-gif.html">
                Gif Animations</a>
        </li><li class="  ">
            <a href="element-forms.html">
                AJAX Forms</a>
        </li><li class="  ">
            <a href="element-countdown.html">
                Countdown</a>
        </li><li class="  ">
            <a href="element-text-typed.html">
                Typed Text</a>
        </li><li class="  ">
            <a href="element-tabs.html">
                Tabs</a>
        </li><li class="  ">
            <a href="element-accordions.html">
                Accordions</a>
        </li>
                </ul>
            
        </li>
    
        <li>
            
                <ul>
                    <li class="  ">
            <a href="element-info-boxes.html">
                Info Boxes / Alerts</a>
        </li><li class="  ">
            <a href="element-call-to-action.html">
                Call to Action Blocks</a>
        </li><li class="  ">
            <a href="element-progress.html">
                Progress Bars</a>
        </li><li class="  ">
            <a href="element-pagination.html">
                Pagination</a>
        </li><li class="  ">
            <a href="element-pricing-tables.html">
                Pricing Tables</a>
        </li><li class="  ">
            <a href="element-modals.html">
                Modals</a>
        </li>
                </ul>
            
        </li>
    
        <li>
            
                <ul>
                    <li class="  ">
            <a href="element-typography.html">
                Typography</a>
        </li><li class="  ">
            <a href="element-titles.html">
                Titles [headings]</a>
        </li><li class="  ">
            <a href="element-dropcaps.html">
                Dropcaps</a>
        </li><li class="  ">
            <a href="element-colors.html">
                Colors</a>
        </li><li class="  ">
            <a href="element-buttons.html">
                Buttons</a>
        </li><li class="  ">
            <a href="element-breadcrumbs.html">
                Breadcrumbs</a>
        </li>
                </ul>
            
        </li>
    

                        </ul>
                    </div>
        </li><li class="  ">
            <a href="#news">
                News</a><ul class="dropdown">
                        <li class="  ">
            <a href="news-list.html">
                List</a>
        </li><li class="  ">
            <a href="news-list-classic.html">
                Classic List</a>
        </li><li class="  ">
            <a href="news-grid-2.html">
                Grid 2 Columns</a>
        </li><li class="  ">
            <a href="news-grid-3.html">
                Grid 3 Columns</a>
        </li><li class=" ">
            <a href="news-single-image.html">
                Single Post</a><ul class="dropdown">
                        <li class="  ">
            <a href="news-single-image.html">
                Single Image</a>
        </li><li class="  ">
            <a href="news-single-video.html">
                Single Video</a>
        </li><li class="  ">
            <a href="news-single-audio.html">
                Single Audio</a>
        </li><li class="  ">
            <a href="news-single-gallery.html">
                Single Gallery</a>
        </li><li class="  ">
            <a href="news-single-quote.html">
                Single Block Quote</a>
        </li><li class="  ">
            <a href="news-single-standard.html">
                Single Standard</a>
        </li><li class="  ">
            <a href="news-single-big-content.html">
                Single Big Content Example</a>
        </li>
                    </ul>
        </li>
                    </ul>
        </li><li class="  ">
            <a href="#">
                Commissions</a><ul class="dropdown">
                        <li class="  ">
            <a href="social-user-activity.html">
                User</a><ul class="dropdown">
                        <li class="  ">
            <a href="social-user-activity.html">
                Activity</a>
        </li><li class="  ">
            <a href="social-user-notifications.html">
                Notifications</a>
        </li><li class="  ">
            <a href="social-user-messages.html">
                Messages</a>
        </li><li class="  ">
            <a href="social-user-messages-single.html">
                Messages Single</a>
        </li><li class="  ">
            <a href="social-user-messages-compose.html">
                Messages Compose</a>
        </li><li class="  ">
            <a href="social-user-friends.html">
                Friends</a>
        </li><li class="  ">
            <a href="social-user-settings.html">
                Settings</a>
        </li><li class="  ">
            <a href="social-user-settings-email.html">
                Settings Email</a>
        </li>
                    </ul>
        </li><li class=" ">
            <a href="social-group-activity.html">
                Group</a><ul class="dropdown">
                        <li class="  ">
            <a href="social-group-activity.html">
                Activity</a>
        </li><li class="  ">
            <a href="social-group-members.html">
                Members</a>
        </li><li class="  ">
            <a href="social-group-manage.html">
                Manage</a>
        </li>
                    </ul>
        </li>
                    </ul>
        </li>                </ul>
                
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    
                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    
                    
                    
                    <li class="single-icon">
                        <a href="#" class="nk-search-toggle no-link-effect">
                            <span class="nk-icon-search"></span>
                        </a>
                    </li>
                    
                    
                    <!--<li class="single-icon">
                        <a href="#" class="nk-cart-toggle no-link-effect">
                            <span class="nk-icon-toggle">
                                <span class="nk-icon-toggle-front">
                                    <span class="ion-android-cart"></span>
                                    <span class="nk-badge">8</span>
                                </span>
                                <span class="nk-icon-toggle-back">
                                    <span class="nk-icon-close"></span>
                                </span>
                            </span>
                        </a>
                    </li>-->
                    
                    
                    <!--<li class="single-icon">
                        <a href="#" class="nk-sign-toggle no-link-effect">
                            <span class="nk-icon-toggle">
                                <span class="nk-icon-toggle-front">
                                    <span class="fa fa-sign-in"></span>
                                </span>
                                <span class="nk-icon-toggle-back">
                                    <span class="nk-icon-close"></span>
                                </span>
                            </span>
                        </a>
                    </li>
                    
                    
                    
                    <li class="single-icon">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-side">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>-->
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>

    
    
    
    
    
        

<!--
    START: Right Navbar

    Additional Classes:
        .nk-navbar-right-side
        .nk-navbar-left-side
        .nk-navbar-lg
        .nk-navbar-align-center
        .nk-navbar-align-right
        .nk-navbar-overlay-content
        .nk-navbar-light
        .nk-navbar-no-link-effect
-->

<nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content" id="nk-side">
    
    <div class="nk-navbar-bg">
        <div class="bg-image">
            <img src="assets/images/bg-nav-side.jpg" alt="" class="jarallax-img">
        </div>
    </div>
    

    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">
                
                <div class="nk-nav-row">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="150">
                    </a>
                </div>
                
                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                    <ul class="nk-nav">
                        <li class=" ">
            <a href="page-contact.html">
                Contact</a>
        </li><li class=" ">
            <a href="page-coming-soon.html">
                Coming Soon</a>
        </li><li class=" ">
            <a href="page-404.html">
                404</a>
        </li><li class=" ">
            <a href="page-age-check.html">
                Age Check</a>
        </li><li class=" nk-drop-item">
            <a href="#">
                Sub Menu Example</a><ul class="dropdown">
                    <li class=" ">
            <a href="#1">
                Sub Item 1</a>
        </li><li class=" nk-drop-item">
            <a href="#2">
                Sub Item 2</a><ul class="dropdown">
                    <li class=" ">
            <a href="#1">
                Sub Item 1</a>
        </li><li class=" ">
            <a href="#2">
                Sub Item 2</a>
        </li>
                </ul>
        </li><li class=" nk-drop-item">
            <a href="#3">
                Sub Item 3</a><ul class="dropdown">
                    <li class=" ">
            <a href="#">
                Sub Item</a>
        </li>
                </ul>
        </li><li class=" nk-drop-item">
            <a href="#4">
                Sub Item 4</a><ul class="dropdown">
                    <li class=" ">
            <a href="#">
                Sub Item</a>
        </li>
                </ul>
        </li>
                </ul>
        </li>
                    </ul>
                </div>
                <div class="nk-nav-row">
                    <div class="nk-nav-footer">
                        &copy; 2018 nK Group Inc. Developed in association with LoremInc. IpsumCompany, SitAmmetGroup, CumSit and related logos are registered trademarks. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END: Right Navbar -->

    
    
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
        .nk-navbar-light
        .nk-navbar-no-link-effect
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="assets/images/logo.svg" alt="" width="90">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

@yield('content')


        <!--
    START: Sign Form

    Additional Classes:
        .nk-sign-form-light
-->
<div class="nk-sign-form">
    <div class="nk-gap-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3">
                <div class="nk-sign-form-container">
                    <div class="nk-sign-form-toggle h3">
                        <a href="#" class="nk-sign-form-login-toggle active">Log In</a>
                        <a href="#" class="nk-sign-form-register-toggle">Register</a>
                    </div>
                    <div class="nk-gap-2"></div>

                    <!-- START: Login Form -->
                    <form class="nk-sign-form-login active" action="#">
                        <input class="form-control" type="text" placeholder="Username or Email">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="password" placeholder="Password">
                        <div class="nk-gap-2"></div>

                        <div class="form-check float-left">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember Me
                            </label>
                        </div>
                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Log In</button>

                        <div class="clearfix"></div>
                        <div class="nk-gap-1"></div>
                        <a class="nk-sign-form-lost-toggle float-right" href="#">Lost Password?</a>
                    </form>
                    <!-- END: Login Form -->

                    <!-- START: Lost Password Form -->
                    <form class="nk-sign-form-lost" action="#">
                        <input class="form-control" type="text" placeholder="Username or Email">
                        <div class="nk-gap-2"></div>

                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Get New Password</button>
                    </form>
                    <!-- END: Lost Password Form -->

                    <!-- START: Register Form -->
                    <form class="nk-sign-form-register" action="#">
                        <input class="form-control" type="text" placeholder="Username">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="email" placeholder="Email">
                        <div class="nk-gap-2"></div>

                        <div class="float-left">A password will be emailed to you.</div>
                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Register</button>
                    </form>
                    <!-- END: Register Form -->
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
</div>
<!-- END: Sign Form -->

    

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Isotope -->
<script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Typed.js -->
<script src="assets/vendor/typed.js/lib/typed.min.js"></script>

<!-- Jquery Validation -->
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="assets/vendor/moment/min/moment.min.js"></script>
<script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- DateTimePicker -->
<script src="assets/vendor/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js"></script>

<!-- Revolution Slider -->
<script src="assets/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<!-- Keymaster -->
<script src="assets/vendor/keymaster/keymaster.js"></script>

<!-- Summernote -->
<script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- GODLIKE -->
<script src="assets/js/godlike.min.js"></script>
<script src="assets/js/godlike-init.js"></script>
<!-- END: Scripts -->
</body>
</html>



