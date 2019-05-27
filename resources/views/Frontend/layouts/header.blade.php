<?php
$setting = new \App\Helper\CommonHelper;
$banners = $setting->get_banner();
$languages = $setting->get_langauge_list();
$selected_lang = $setting->user_selected_language();
?>


<header id="site-masthead" class="site-section site-section-masthead">
    <div class="site-section-wrapper site-section-wrapper-masthead">
        <div id="site-logo">
            <a href="{{url('/')}}" class="custom-logo-link" rel="home">
                <img width="192" height="110" src="{{asset(ASSET.'images/cropped-FrippIslandPhotographyLogo.gif')}}" class="custom-logo" alt="Logo for Frippislandphotography" />
            </a>
        </div><!-- #site-logo --><!-- ws fix 
        --><div id="site-section-primary-menu">
            <div class="site-navbar-header">

                <div id="menu-main-slick" class="menu-menu-1-container">
                    <ul id="menu-slide-in" class="menu">
                        <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-12"><a href="{{url('/')}}">Home</a></li>
                        <li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-94"><a href="services/index.html">Services</a>
                            <ul class="sub-menu">
                                <li id="menu-item-580" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-580"><a href="services/couples/index.html">Couples</a></li>
                                <li id="menu-item-576" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-576"><a href="gallery-html/seniors/index.html">Graduating Seniors</a></li>
                                <li id="menu-item-579" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-579"><a href="services/families/index.html">Families</a></li>
                                <li id="menu-item-578" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-578"><a href="services/little-ones/index.html">Little ones</a></li>
                                <li id="menu-item-577" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-577"><a href="services/reunions/index.html">Reunions</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"><a href="{{url('about-us')}}">About Us</a></li>
                        <li id="menu-item-547" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-547"><a href="gallery-html/index.html">Gallery</a></li>
                        <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><a href="{{url('links')}}">Links</a></li>
                        <li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82"><a href="{{url('contact')}}">Contact</a></li>
                        <li id="menu-item-661" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-661"><a href="{{url('contact')}}">Book Now</a></li>
                    </ul></div>
            </div><!-- .site-navbar-header -->
            <nav id="site-primary-nav">

                <ul id="site-primary-menu" class="large-nav sf-menu mobile-menu clearfix">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-12"><a href="{{url('/')}}">Home</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-94"><a href="services/index.html">Services</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-580"><a href="services/couples/index.html">Couples</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-576"><a href="gallery-html/seniors/index.html">Graduating Seniors</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-579"><a href="services/families/index.html">Families</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-578"><a href="services/little-ones/index.html">Little ones</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-577"><a href="services/reunions/index.html">Reunions</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"><a href="{{url('about-us')}}">About Us</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-547"><a href="gallery-html/index.html">Gallery</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><a href="{{url('links')}}">Links</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82"><a href="{{url('contact')}}">Contact</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-661"><a href="{{url('contact')}}">Book Now</a></li>
                </ul>                                           
                <!--                                             <a class="button button_menu" href="contact">BOOK NOW</a>-->
            </nav><!-- #site-primary-nav -->
            <br>
            <div style="border-top: solid 1px #eee;">
                <a class="button button_menu" style="margin-top: 7%;" href="contact/index.html">BOOK NOW</a>
            </div>
        </div><!-- #site-section-primary-menu -->
    </div><!-- .site-section-wrapper .site-section-wrapper-masthead -->
</header><!-- #site-masthead .site-section-masthead -->