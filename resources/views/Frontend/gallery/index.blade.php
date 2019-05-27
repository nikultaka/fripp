<?php
$setting = new \App\Helper\CommonHelper;
$banners = $setting->get_banner();
?>
@extends('Frontend.layouts.main')

@section('headLink')
<script src="{{asset(ASSET.'js/frontend/portfolio-wp/js/jquery/jquery.modernizr.min.js')}}"></script>
<script src="{{asset(ASSET.'js/frontend/portfolio-wp/js/crp-tiled-layer.js')}}"></script>
<script src="{{asset(ASSET.'js/frontend/portfolio-wp/js/jquery/jquery.lightgallery.min.js')}}"></script>


<!--Link CSS Files-->
<link href="{{asset(ASSET.'css/frontend/crp-tiled-layer.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset(ASSET.'css/frontend/lightgallery/lightgallery.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset(ASSET.'css/frontend/crp-captions.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('content')
@if(!empty($media_category))
<div class="site-page-content">
		<div class="site-section-wrapper site-section-wrapper-main clearfix">

			<div class="site-column site-column-content">
                            <div class="site-column-wrapper clearfix"><!-- .site-column .site-column-1 .site-column-aside -->
                                <h1 class="page-title" style="text-align: center;">
                                    <span class="page-title-span">Gallery</span>
                                </h1>
                                <div class="entry-content">
<!--Link JS Files-->


<!--Here Goes CSS-->
<style>
    /* Portfolio Options Configuration Goes Here*/
    #gallery div{
        margin-left: 0px !important;
        margin-right: 0px !important;
        padding-left: 0px !important;
        padding-right: 0px !important;
        -webkit-transform: translate3d(0,0,0);
    }

  .lg-info{
    position:fixed;
    z-index:3;
    left:10px;
    top:10px;
    padding:10px;
    margin-right: 70px;
    min-width: 300px;
    max-width: 400px;
    background-color: rgba(0,0,0,0.5);
    color:#FFF; font-size:16px;
  }

  .lg-info h4,.lg-info h3,.lg-info h2 {
        color: white;
        text-transform:uppercase;
        margin: 0px;
        font-size: 17px;
        line-height: 17px;
        max-height: 40px;
        overflow: hidden;
    }

    .lg-info p {
        color: white;
        margin-top: 4px;
        font-size: 13px;
        line-height: normal;
        max-height: 100px;
        overflow: auto;
    }

    /* Image 01 [ start ] */
    .image01 .crp-tile-img {
        transition-property: transform, filter, -webkit-filter;
        transition-duration: .3s, .3s, .3s;
        transition-delay: 0s, 0s, 0s;
    }

    /* Zoom In */
    .image01 .crp-tile-img {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
    }

    .image01:hover .crp-tile-img,
    .image01:focus .crp-tile-img {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
    }
    /* Image 01 [ end ] */

    /* Portfolio Options Configuration Goes Here*/
    #gallery .tile:hover{
        cursor: pointer !important;
    }


    /* - - - - - - - - - - - - - - -*/
    /* Tile Hover Customizations */

    /* Customize overlay background */
    #gallery .crp-tile-inner .overlay,
    #gallery .tile .caption {
        background-color: rgba(0,0,0,0.501960784314) !important;
    }

    #gallery .crp-tile-inner.crp-details-bg .details {
        background-color: rgba(0,0,0,0.501960784314) !important;
    }

    #gallery .crp-tile-inner .details h3 {
        color: #ffffff;
        text-align: center;
        font-size: 18px;
    }

    #gallery .crp-tile-inner .details p {
        color: #ffffff;
        text-align: center;
        font-size: 11px;
    }

        #gallery .crp-tile-inner .details h3 {
        margin-bottom: 0px;
    }
    
</style>

<!--Here Goes HTML-->
<div class="crp-wrapper">
    <div id="gallery">
        <div id="ftg-items" class="ftg-items" style="position: relative; min-width: 200px; height: 456px;">
            @foreach($media_category as $key=>$value)                
            <div id="crp-tile-{{$key}}" class="tile" data-url="" style="position: absolute; visibility: visible; top: 0px; left: 0px; width: 223px; height: 223px;">
                                        <div class="crp-tile-inner details33 crp-details-bg image01">
                    
                    
                    
                    <a id="{{$key}}" class="tile-inner" style="position: relative; display: block; overflow: hidden; width: 213px; height: 213px;">
                                                <img class="crp-item crp-tile-img" src="{{asset(ASSET.'upload/image/gallery/resize/'.$value->image)}}" data-width="559" data-height="447" style="position: relative; display: block; font-size: 10px; max-width: 9999em; width: 266.369px; height: 213px; margin-left: -26.6846px; margin-top: 0px;" case="2">
                        <div class="overlay"></div><div class="details"><h3>{{$value->category_name}}</h3></div>                    </a>
                                        </div>

                    <?php 
                    $media_name = explode(',',$value->media_name);
                    ?>
                <ul id="crp-light-gallery-{{$key}}" class="crp-light-gallery" style="display: none;" data-sub-html="<div class='lg-info'><h4>{{$value->category_name}}</h4></div>" data-url="">
                    @foreach($media_name as $media)
                        <li data-src="{{asset(ASSET.'upload/image/'.$media)}}">
                            <a href="#">
                                <img src="{{asset(ASSET.'upload/image/thumbnail/'.$value->image)}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
<!--                    <ul id="crp-light-gallery-5" class="crp-light-gallery" style="display: none;" data-sub-html="<div class='lg-info'><h4>Graduating Seniors</h4></div>" data-url="">
                        
                        <li data-src="../wp-content/uploads/2018/12/590A7487c.jpg">
                            <a href="#">
                                <img src="../wp-content/uploads/2018/12/590A7487c-300x240.jpg">
                            </a>
                        </li>

                                                                                    
                                <li data-src="../wp-content/uploads/2018/12/590A0460c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0460c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0465c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0465c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0506c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0506c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0513c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0513c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0532c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0532c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0556c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0556c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0603c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0603c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0645c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0645c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0651c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0651c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0688c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0688c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0691c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0691c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A0700c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A0700c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A1150c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A1150c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A1155c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A1155c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A1163c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A1163c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A1168c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A1168c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A3114c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A3114c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A3132c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A3132c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A3210c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A3210c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A4658fxc8.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A4658fxc8-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A4682c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A4682c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A4709c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A4709c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A4726c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A4726c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A4730c4.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A4730c4-200x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A4850c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A4850c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A4853c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A4853c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A4932c8.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A4932c8-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A6253c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A6253c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A6294c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A6294c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A6296c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A6296c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A6326c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A6326c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A7487c-1.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A7487c-1-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A7528c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A7528c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A7544c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A7544c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8781c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8781c-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8794c-1.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8794c-1-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8815c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8815c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8819c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8819c-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8821c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8821c-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8832c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8832c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8836c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8836c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8907c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8907c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8910c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8910c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8912c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8912c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8921c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8921c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8923c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8923c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8928c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8928c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8942c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8942c-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8945c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8945c-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8947c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8947c-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8954c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8954c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8955c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8955c-300x240.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A8966c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A8966c-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A9647c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A9647c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A9664c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A9664c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A9727c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A9727c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/590A9755c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/590A9755c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/IMG_3821c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/IMG_3821c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/IMG_3840c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/IMG_3840c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/IMG_3871c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/IMG_3871c-300x214.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/IMG_3876c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/IMG_3876c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/IMG_7289c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/IMG_7289c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/IMG_7298c.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/IMG_7298c-214x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/IMG_7337c8.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/IMG_7337c8-240x300.jpg">
                                    </a>
                                </li>
                                                                                                                
                                <li data-src="../wp-content/uploads/2018/12/IMG_7428c5.jpg">
                                    <a href="#">
                                        <img src="../wp-content/uploads/2018/12/IMG_7428c5-214x300.jpg">
                                    </a>
                                </li>
                                                                        </ul>-->
                                    </div>
            @endforeach
                           
                                </div>
    </div>
</div>


<!--Here Goes JS-->
<script>
    (function($) {
        $(document).ready(function(){

            var tileParams = {};

            if(0) {
                tileParams.approxTileWidth = 250;
                tileParams.approxTileHeight = 250;
                tileParams.minTileWidth = 200;
            }

            if(0) {
                tileParams.addBlock1Height = 40;
                tileParams.addBlock2Height = 100;
            }
            jQuery('#gallery').crpTiledLayer(tileParams);

            $( ".crp-light-gallery" ).each(function() {
              var id = $( this ).attr("id");
              $("#" + id).lightGallery({
                mode: 'slide',
                useCSS: true,
                cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: 'linear', //'for jquery animation',//
                speed: 600,
                addClass: '',

                closable: true,
                loop: true,
                auto: false,
                pause: 6000,
                escKey: true,
                controls: true,
                hideControlOnEnd: false,

                preload: 1, //number of preload slides. will exicute only after the current slide is fully loaded. ex:// you clicked on 4th image and if preload = 1 then 3rd slide and 5th slide will be loaded in the background after the 4th slide is fully loaded.. if preload is 2 then 2nd 3rd 5th 6th slides will be preloaded.. ... ...
                showAfterLoad: true,
                selector: null,
                index: false,

                lang: {
                    allPhotos: 'All photos'
                },
                counter: false,

                exThumbImage: false,
                thumbnail: true,
                showThumbByDefault:false,
                animateThumb: true,
                currentPagerPosition: 'middle',
                thumbWidth: 150,
                thumbMargin: 10,


                mobileSrc: false,
                mobileSrcMaxWidth: 640,
                swipeThreshold: 50,
                enableTouch: true,
                enableDrag: true,

                vimeoColor: 'CCCCCC',
                youtubePlayerParams: false, // See: https://developers.google.com/youtube/player_parameters,
                videoAutoplay: true,
                videoMaxWidth: '855px',

                dynamic: false,
                dynamicEl: [],

                // Callbacks el = current plugin
                onOpen        : function(el) {}, // Executes immediately after the gallery is loaded.
                onSlideBefore : function(el) {}, // Executes immediately before each transition.
                onSlideAfter  : function(el) {}, // Executes immediately after each transition.
                onSlideNext   : function(el) {}, // Executes immediately before each "Next" transition.
                onSlidePrev   : function(el) {}, // Executes immediately before each "Prev" transition.
                onBeforeClose : function(el) {}, // Executes immediately before the start of the close process.
                onCloseAfter  : function(el) {}, // Executes immediately once lightGallery is closed.
                onOpenExternal  : function(el, index) {
                    if($(el).attr('data-url')) {
                        var href = $(el).attr("data-url");
                    } else {
                        var href = $("#crp-light-gallery li").eq(index).attr('data-url');
                    }
                    if(href) {
                        crp_loadHref(href,true);
                    }else {
                        return false;
                    }

                }, // Executes immediately before each "open external" transition.
                onToggleInfo  : function(el) {
                  var $info = $(".lg-info");
                  if($info.css("opacity") == 1){
                    $info.fadeTo("slow",0);
                  }else{
                    $info.fadeTo("slow",1);
                  }
                } // Executes immediately before each "toggle info" transition.
              });
            });

            jQuery(".tile").on('click', function (event){
                if(jQuery(event.target).hasClass('crp-product-buy-button')) {
                    return false;
                }
                
                event.preventDefault();
                if(jQuery(event.target).hasClass("fa") && !jQuery(event.target).hasClass("zoom")) return;

                                var tileId = jQuery(this).attr("id");
                var target = jQuery("#" + tileId + " .crp-light-gallery li:first");
                                target.trigger( "click" );
            });

        });
    })( jQuery );

</script>
<style></style><script> jQuery(window).load(function() {});</script>



<p></p>
</div><!-- .entry-content --></div><!-- .site-column-wrapper .clearfix --></div><!-- .site-column .site-column-content -->
		</div><!-- .site-section-wrapper .site-section-wrapper-main -->
	</div>
@endif
@endsection