<!--Slider-->
<?php
$setting = new \App\Helper\CommonHelper;
$banners = $setting->get_banner();
?>
@if(!empty($banners))

    <div class="site-section-wrapper site-section-hero-wrapper clearfix">
        <div id="ilovewp-hero" class="site-section-slideshow">
            <ul class="ilovewp-slides ilovewp-slideshow">
                @foreach($banners as $key=>$value)
                <li class="ilovewp-slide">
                    <img width="1100" height="772" src="{{asset(ASSET.'upload/image/banner/'.$value->banner)}}" class="attachment-thumb-ilovewp-featured size-thumb-ilovewp-featured" alt=""  sizes="(max-width: 1100px) 100vw, 1100px" />
                </li>
                @endforeach
            </ul><!-- .ilovewp-slideshow -->
        </div><!-- #ilovewp-hero .site-section-slideshow -->
        <!--<a class="button banner_btn" href="contact/index.html">BOOK NOW</a>-->
    </div><!-- .site-section-wrapper .site-section-hero-wrapper -->
    
@else


@endif
<!-- //Modal1 -->
<!--//Slider-->