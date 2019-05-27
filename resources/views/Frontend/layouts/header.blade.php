<?php
$setting = new \App\Helper\CommonHelper;
$banners = $setting->get_banner();
$languages = $setting->get_langauge_list();
$selected_lang = $setting->user_selected_language();
?>

<header itemtype="https://schema.org/WPHeader" itemscope="itemscope" id="masthead" class="site-header header-main-layout-1 ast-primary-menu-disabled ast-mobile-header-stack ast-below-header-enabled ast-below-header-section-separated ast-above-header-mobile-inline ast-below-header-mobile-inline" role="banner">
    <div class="main-header-bar-wrap">
        <div class="main-header-bar">
            <div class="ast-container">

                <div class="ast-flex main-header-container">

                    <div class="site-branding">
                        <div class="ast-site-identity" itemscope="itemscope" itemtype="https://schema.org/Organization">
                            <span class="site-logo-img"><a href="{{url('home')}}" class="custom-logo-link" rel="home" itemprop="url"><img width="430" height="165" src="wp-content/uploads/2018/06/Evelyn-G-Logo.png" class="custom-logo" alt="Dr Evelyn Gasparillo" itemprop="logo"  sizes="(max-width: 430px) 100vw, 430px" /></a></span>			</div>
                    </div>
                    <!-- .site-branding -->
                    <div class="ast-mobile-menu-buttons">
                    </div>

                    <div class="main-header-bar-navigation ast-header-sections-navigation">
                        <nav itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope" id="site-navigation" class="ast-flex-grow-1" role="navigation" aria-label="Site Navigation"></div></nav>	
                    <div class="ast-masthead-custom-menu-items widget-custom-menu-item">
                        <div class="ast-header-widget-area">
                            <aside id="elementor-library-9" class="widget widget_elementor-library"><style id="elementor-post-87">.elementor-87 .elementor-element.elementor-element-99f1903{margin-top:0px;margin-bottom:0px;padding:0% 0% 0% 0%;}.elementor-87 .elementor-element.elementor-global-318.elementor-view-stacked .elementor-icon{background-color:#d8ab6f;}.elementor-87 .elementor-element.elementor-global-318.elementor-view-framed .elementor-icon, .elementor-87 .elementor-element.elementor-global-318.elementor-view-default .elementor-icon{color:#d8ab6f;border-color:#d8ab6f;}.elementor-87 .elementor-element.elementor-global-318.elementor-position-right .elementor-icon-box-icon{margin-left:0px;}.elementor-87 .elementor-element.elementor-global-318.elementor-position-left .elementor-icon-box-icon{margin-right:0px;}.elementor-87 .elementor-element.elementor-global-318.elementor-position-top .elementor-icon-box-icon{margin-bottom:0px;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon{font-size:30px;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon i{transform:rotate(0deg);}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon-box-wrapper{text-align:center;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon-box-title{margin-bottom:0px;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon-box-content .elementor-icon-box-title{color:#d8ab6f;font-size:18px;font-weight:700;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon-box-content .elementor-icon-box-description{color:#000000;font-size:20px;font-weight:700;}.elementor-87 .elementor-element.elementor-global-318 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-87 .elementor-element.elementor-global-322.elementor-view-stacked .elementor-icon{background-color:#d8ab6f;}.elementor-87 .elementor-element.elementor-global-322.elementor-view-framed .elementor-icon, .elementor-87 .elementor-element.elementor-global-322.elementor-view-default .elementor-icon{color:#d8ab6f;border-color:#d8ab6f;}.elementor-87 .elementor-element.elementor-global-322.elementor-position-right .elementor-icon-box-icon{margin-left:0px;}.elementor-87 .elementor-element.elementor-global-322.elementor-position-left .elementor-icon-box-icon{margin-right:0px;}.elementor-87 .elementor-element.elementor-global-322.elementor-position-top .elementor-icon-box-icon{margin-bottom:0px;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon{font-size:30px;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon i{transform:rotate(0deg);}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon-box-wrapper{text-align:center;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon-box-title{margin-bottom:0px;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon-box-content .elementor-icon-box-title{color:#d8ab6f;font-size:18px;font-weight:700;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon-box-content .elementor-icon-box-description{color:#000000;font-size:20px;font-weight:700;}.elementor-87 .elementor-element.elementor-global-322 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}@media(max-width:1024px){.elementor-87 .elementor-element.elementor-element-0aaeedb > .elementor-element-populated{padding:5px 5px 5px 5px;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon{font-size:25px;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon-box-wrapper{text-align:center;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon-box-content .elementor-icon-box-title{font-size:16px;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon-box-content .elementor-icon-box-description{font-size:12px;}.elementor-87 .elementor-element.elementor-global-318 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-87 .elementor-element.elementor-element-0315503 > .elementor-element-populated{padding:5px 5px 5px 5px;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon{font-size:25px;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon-box-wrapper{text-align:center;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon-box-content .elementor-icon-box-title{font-size:16px;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon-box-content .elementor-icon-box-description{font-size:12px;}.elementor-87 .elementor-element.elementor-global-322 > .elementor-widget-container{margin:0px 0px 0px 0px;}}@media(max-width:767px){.elementor-87 .elementor-element.elementor-element-0aaeedb{width:33%;}.elementor-87 .elementor-element.elementor-element-0aaeedb > .elementor-element-populated{padding:5px 5px 5px 5px;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon-box-icon{margin-bottom:0px;}.elementor-87 .elementor-element.elementor-global-318 .elementor-icon{font-size:20px;}.elementor-87 .elementor-element.elementor-element-0315503{width:33%;}.elementor-87 .elementor-element.elementor-element-0315503 > .elementor-element-populated{padding:5px 5px 5px 5px;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon-box-icon{margin-bottom:0px;}.elementor-87 .elementor-element.elementor-global-322 .elementor-icon{font-size:20px;}}</style>		<div class="elementor elementor-87 elementor-type-section">
                                    <div class="elementor-inner">
                                        <div class="elementor-section-wrap">
                                            <section data-id="99f1903" class="elementor-element elementor-element-99f1903 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div data-id="0aaeedb" class="elementor-element elementor-element-0aaeedb elementor-column elementor-col-50 elementor-inner-column" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div data-id="745faf1" class="elementor-element elementor-element-745faf1 elementor-vertical-align-middle elementor-view-default elementor-position-top elementor-widget elementor-widget-global elementor-global-318 elementor-widget-icon-box" data-element_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span class="elementor-icon elementor-animation-" >

<!--                                                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>-->
                                                                                        {!! $setting->get_setting_details('marker','label') !!}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="elementor-icon-box-content">
                                                                                    <h3 class="elementor-icon-box-title">
                                                                                        <span >Subiaco</span>
                                                                                    </h3>
                                                                                    <p class="elementor-icon-box-description">(08) 6389 6800
                                                                                        <span class="jhms">Jupiter Health and Medical Services</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-id="0315503" class="elementor-element elementor-element-0315503 elementor-column elementor-col-50 elementor-inner-column" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div data-id="1ec0f15" class="elementor-element elementor-element-1ec0f15 elementor-vertical-align-middle elementor-view-default elementor-position-top elementor-widget elementor-widget-global elementor-global-322 elementor-widget-icon-box" data-element_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span class="elementor-icon elementor-animation-" >
                                                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="elementor-icon-box-content">
                                                                                    <h3 class="elementor-icon-box-title">
                                                                                        <span >Bunbury</span>
                                                                                    </h3>
                                                                                    <p class="elementor-icon-box-description">(08) 9720 4600
                                                                                        <span class="jhms">Jupiter Health and Medical Services</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </aside><aside id="elementor-library-5" class="widget widget_elementor-library"><style id="elementor-post-318">.elementor-318 .elementor-element.elementor-element-318.elementor-view-stacked .elementor-icon{background-color:#d8ab6f;}.elementor-318 .elementor-element.elementor-element-318.elementor-view-framed .elementor-icon, .elementor-318 .elementor-element.elementor-element-318.elementor-view-default .elementor-icon{color:#d8ab6f;border-color:#d8ab6f;}.elementor-318 .elementor-element.elementor-element-318.elementor-position-right .elementor-icon-box-icon{margin-left:0px;}.elementor-318 .elementor-element.elementor-element-318.elementor-position-left .elementor-icon-box-icon{margin-right:0px;}.elementor-318 .elementor-element.elementor-element-318.elementor-position-top .elementor-icon-box-icon{margin-bottom:0px;}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon{font-size:30px;}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon i{transform:rotate(0deg);}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon-box-wrapper{text-align:center;}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon-box-title{margin-bottom:0px;}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon-box-content .elementor-icon-box-title{color:#d8ab6f;font-size:18px;font-weight:700;}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon-box-content .elementor-icon-box-description{color:#000000;font-size:20px;font-weight:700;}.elementor-318 .elementor-element.elementor-element-318 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}@media(max-width:1024px){.elementor-318 .elementor-element.elementor-element-318 .elementor-icon{font-size:25px;}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon-box-wrapper{text-align:center;}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon-box-content .elementor-icon-box-title{font-size:16px;}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon-box-content .elementor-icon-box-description{font-size:12px;}.elementor-318 .elementor-element.elementor-element-318 > .elementor-widget-container{margin:0px 0px 0px 0px;}}@media(max-width:767px){.elementor-318 .elementor-element.elementor-element-318 .elementor-icon-box-icon{margin-bottom:0px;}.elementor-318 .elementor-element.elementor-element-318 .elementor-icon{font-size:20px;}}</style>		<div class="elementor elementor-318">
                                    <div class="elementor-inner">
                                        <div class="elementor-section-wrap">
                                            <div data-id="318" class="elementor-element elementor-element-318 elementor-vertical-align-middle elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-" >
<!--                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>-->
                                                                {!! $setting->get_setting_details('marker','label') !!}
                                                            </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span >{{$setting->get_setting_details('marker','fild_value')}}</span>
                                                            </h3>
                                                            <p class="elementor-icon-box-description">{{$setting->get_setting_details('phone','fild_value')}}
                                                                <span class="jhms">{{$setting->get_setting_details('jhms','fild_value')}}</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside><aside id="elementor-library-7" class="widget widget_elementor-library"><style id="elementor-post-322">.elementor-322 .elementor-element.elementor-element-322.elementor-view-stacked .elementor-icon{background-color:#d8ab6f;}.elementor-322 .elementor-element.elementor-element-322.elementor-view-framed .elementor-icon, .elementor-322 .elementor-element.elementor-element-322.elementor-view-default .elementor-icon{color:#d8ab6f;border-color:#d8ab6f;}.elementor-322 .elementor-element.elementor-element-322.elementor-position-right .elementor-icon-box-icon{margin-left:0px;}.elementor-322 .elementor-element.elementor-element-322.elementor-position-left .elementor-icon-box-icon{margin-right:0px;}.elementor-322 .elementor-element.elementor-element-322.elementor-position-top .elementor-icon-box-icon{margin-bottom:0px;}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon{font-size:30px;}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon i{transform:rotate(0deg);}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon-box-wrapper{text-align:center;}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon-box-title{margin-bottom:0px;}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon-box-content .elementor-icon-box-title{color:#d8ab6f;font-size:18px;font-weight:700;}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon-box-content .elementor-icon-box-description{color:#000000;font-size:20px;font-weight:700;}.elementor-322 .elementor-element.elementor-element-322 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}@media(max-width:1024px){.elementor-322 .elementor-element.elementor-element-322 .elementor-icon{font-size:25px;}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon-box-wrapper{text-align:center;}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon-box-content .elementor-icon-box-title{font-size:16px;}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon-box-content .elementor-icon-box-description{font-size:12px;}.elementor-322 .elementor-element.elementor-element-322 > .elementor-widget-container{margin:0px 0px 0px 0px;}}@media(max-width:767px){.elementor-322 .elementor-element.elementor-element-322 .elementor-icon-box-icon{margin-bottom:0px;}.elementor-322 .elementor-element.elementor-element-322 .elementor-icon{font-size:20px;}}</style>		<div class="elementor elementor-322">
                                    <div class="elementor-inner">
                                        <div class="elementor-section-wrap">
                                            <div data-id="322" class="elementor-element elementor-element-322 elementor-vertical-align-middle elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-" >
<!--                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>-->
                                                                {!! $setting->get_setting_details('marker1','label') !!}
                                                            </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span >{{$setting->get_setting_details('marker1','fild_value')}}</span>
                                                            </h3>
                                                            <p class="elementor-icon-box-description">{{$setting->get_setting_details('phone1','fild_value')}}
                                                                <span class="jhms">{{$setting->get_setting_details('jhms1','fild_value')}}</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside><aside id="elementor-library-8" class="widget widget_elementor-library"><style id="elementor-post-325">.elementor-325 .elementor-element.elementor-element-325.elementor-view-stacked .elementor-icon{background-color:#d8ab6f;}.elementor-325 .elementor-element.elementor-element-325.elementor-view-framed .elementor-icon, .elementor-325 .elementor-element.elementor-element-325.elementor-view-default .elementor-icon{color:#d8ab6f;border-color:#d8ab6f;}.elementor-325 .elementor-element.elementor-element-325.elementor-position-right .elementor-icon-box-icon{margin-left:0px;}.elementor-325 .elementor-element.elementor-element-325.elementor-position-left .elementor-icon-box-icon{margin-right:0px;}.elementor-325 .elementor-element.elementor-element-325.elementor-position-top .elementor-icon-box-icon{margin-bottom:0px;}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon{font-size:30px;}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon i{transform:rotate(0deg);}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon-box-wrapper{text-align:center;}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon-box-title{margin-bottom:0px;}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon-box-content .elementor-icon-box-title{color:#d8ab6f;font-size:18px;font-weight:700;}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon-box-content .elementor-icon-box-description{color:#000000;font-size:20px;font-weight:700;}.elementor-325 .elementor-element.elementor-element-325 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}@media(max-width:1024px){.elementor-325 .elementor-element.elementor-element-325 .elementor-icon{font-size:25px;}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon-box-wrapper{text-align:center;}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon-box-content .elementor-icon-box-title{font-size:16px;}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon-box-content .elementor-icon-box-description{font-size:12px;}.elementor-325 .elementor-element.elementor-element-325 > .elementor-widget-container{margin:0px 0px 0px 0px;}}@media(max-width:767px){.elementor-325 .elementor-element.elementor-element-325 .elementor-icon-box-icon{margin-bottom:0px;}.elementor-325 .elementor-element.elementor-element-325 .elementor-icon{font-size:20px;}}</style>		<div class="elementor elementor-325">
                                    <div class="elementor-inner">
                                        <div class="elementor-section-wrap">
                                            <div data-id="325" class="elementor-element elementor-element-325 elementor-vertical-align-middle elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-phone elementor-view-default elementor-position-top elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-" >
                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span >East Perth</span>
                                                            </h3>
                                                            <p class="elementor-icon-box-description">(08) 9221 4242
                                                                <span class="jhms">East Perth Medical Centre</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside></div>			</div>
                </div><!-- Main Header Container -->
            </div><!-- ast-row -->
        </div> <!-- Main Header Bar -->
    </div> <!-- Main Header Bar Wrap -->

    <div class="ast-below-header-wrap ast-below-header-2">
        <div class="ast-below-header">
            <div class="ast-container">
                <div class="ast-flex ast-below-header-section-wrap">

                    <div class="ast-below-header-navigation below-header-section-1 ast-flex ast-justify-content-center main_div">				
                        <nav id="myTopnav" class="topnav">

                            @if($selected_lang == '1')
                            <a href="{{url('home')}}">{{ __("message.menu_home") }}</a>
                            <a href="{{url('about-me')}}">{{ __("message.menu_about") }}</a>
                            <a href="{{url('what-i-can-helpwith')}}">{{ __("message.menu_helpwith") }}</a>
                            <a href="{{url('appointment')}}">{{ __("message.menu_appointment") }}</a>
                            <a href="{{url('skypesessions')}}">{{ __("message.menu_skypesessions") }}</a>
                            <a href="{{url('contact')}}">{{ __("message.menu_contact") }}</a>
                            <a href="{{url('blog')}}">{{ __("message.menu_blog") }}</a>
                            @else
                            <a href="{{url('home')}}">{{ __("message.menu_home") }}</a>
                            <a href="{{url('quemsou')}}">{{ __("message.menu_about") }}</a>
                            <a href="{{url('como-posso-ajudar')}}">{{ __("message.menu_helpwith") }}</a>
                            <a href="{{url('agenda')}}">{{ __("message.menu_appointment") }}</a>
                            <a href="{{url('sess-es-via-skype')}}">{{ __("message.menu_skypesessions") }}</a>
                            <a href="{{url('contact')}}">{{ __("message.menu_contact") }}</a>
                            <a href="{{url('blog')}}">{{ __("message.menu_blog") }}</a>
                            @endif

                            <a style="margin-top:0;"> <select class="form-control" name="language" id="language">
                                    @foreach($languages as $language)
                                    <option <?php
                                    if ($selected_lang != '') {
                                        if ($selected_lang == $language->id) {
                                            echo 'selected';
                                        }
                                    }
                                    ?> value="{{$language->id}}">{{$language->name}}</option>
                                    @endforeach
                                </select></a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a>


                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- .ast-below-header -->
    </div><!-- .ast-below-header-wrap -->


</header><!-- #masthead -->