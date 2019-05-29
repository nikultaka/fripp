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
                    <span class="page-title-span">{{$media_category[0]->category_name}}</span>
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
                            <div id="ftg-items" class="ftg-items">
                                <?php
                                $media_name = explode(',', $media_category[0]->media_name);
                                ?>
                                @foreach($media_name as $key=>$value)
                                @if($key <= 5) 
                                <div id="crp-tile-{{$key}}" class="tile" data-url="">
                                    <div class="crp-tile-inner details33 crp-details-bg image01">
                                        <a id="{{$key}}" class="tile-inner">
                                            <img class="crp-item crp-tile-img" src="{{asset(ASSET.'upload/image/'.$value)}}" data-width="591" data-height="422" />
                                            <div class='overlay'></div>                    
                                        </a>
                                    </div>

                                </div>
                                @endif
                                @endforeach
                                <ul id="crp-light-gallery" class="crp-light-gallery" style="display: none;" >
                                @foreach($media_name as $key=>$value)
                                
                                    
                                    <li id="crp-light-gallery-item-{{$key}}" data-src="{{asset(ASSET.'upload/image/'.$value)}}" data-sub-html="" data-url="">
                                        <a href="#">
                                            <img src="{{asset(ASSET.'upload/image/thumbnail/'.$value)}}" />
                                        </a>
                                    </li>
                                @endforeach
                                </ul>
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

                                var tileId = jQuery(".tile-inner", jQuery(this)).attr("id");
                var target = jQuery("#crp-light-gallery-item-"+tileId);
                                target.trigger( "click" );
            });

        });
    })( jQuery );

</script>
<script> jQuery(window).load(function() {});</script>


                    <p></p>
                </div><!-- .entry-content --></div><!-- .site-column-wrapper .clearfix --></div><!-- .site-column .site-column-content -->
    </div><!-- .site-section-wrapper .site-section-wrapper-main -->
</div>
@endif
@endsection