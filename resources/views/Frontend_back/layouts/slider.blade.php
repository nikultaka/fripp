<!--Slider-->
<?php
$setting = new \App\Helper\CommonHelper;
$banners = $setting->get_banner();
?>
@if(!empty($banners))
<section data-id="f5e888a" class="elementor-element elementor-element-f5e888a elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-row">
            <div data-id="512bf98" class="elementor-element elementor-element-512bf98 elementor-column elementor-col-100 elementor-top-column" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div data-id="ea016bb" class="elementor-element elementor-element-ea016bb elementor--h-position-center elementor--v-position-middle elementor-widget elementor-widget-slides" data-element_type="slides.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-slides-wrapper elementor-slick-slider" dir="ltr">
                                    <div class="elementor-slides slick-arrows-inside slick-dots-inside" data-slider_options="{&quot;slidesToShow&quot;:1,&quot;autoplaySpeed&quot;:3000,&quot;autoplay&quot;:true,&quot;infinite&quot;:true,&quot;pauseOnHover&quot;:true,&quot;speed&quot;:500,&quot;arrows&quot;:true,&quot;dots&quot;:true,&quot;rtl&quot;:false,&quot;fade&quot;:true}" data-animation="fadeInUp">
                                        @foreach($banners as $banner)
                                        <div class="elementor-repeater-item-ed3ff33 slick-slide">
                                            <div class="slick-slide-bg" style="background-image:url({{url(ASSET.'upload/image/banner/resize/'.$banner->banner)}})"></div>
                                            <div class="slick-slide-inner">
                                                <div class="elementor-slide-content">
                                                    <div class="elementor-slide-heading">{{$banner->title}}</div>
                                                    <!--                                                    <div class="elementor-slide-description">- Milton H. Erickson</div>-->

                                                </div>

                                            </div>

                                        </div>
                                        @endforeach
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
@else

<div class="ast-title-bar-wrap ast-advanced-headers-vertical-center"><div class="ast-inside-advanced-header-content">
        <div class="ast-advanced-headers-layout ast-advanced-headers-layout-2">
            <div class="ast-container ast-title-bar-align-center">
                <div class="ast-advanced-headers-wrap">
                    <?php $url = str_replace('-',' ',app('request')->path()); ?>
                    <?php $url_final = explode('/', rtrim($url, '/')); ?>
                   <h1 class="ast-advanced-headers-title">@yield('sliderTitle')</h1>
                </div>

            </div>
        </div>
    </div>
</div>

@endif
<!-- //Modal1 -->
<!--//Slider-->