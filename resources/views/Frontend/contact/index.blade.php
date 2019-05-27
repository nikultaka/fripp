<?php
$setting = new \App\Helper\CommonHelper;
$banners = $setting->get_banner();
$languages = $setting->get_langauge_list();
$selected_lang = $setting->user_selected_language_name();
?>
@extends('Frontend.layouts.main')
@section('sliderTitle','Contact')
@if(empty($banners))
@section('headLink')

@endsection
@endif

@section('content')

<div class="site-page-content">
    <div class="site-section-wrapper site-section-wrapper-main clearfix">
        <div class="site-column site-column-content">
            <div class="site-column-wrapper clearfix"><!-- .site-column .site-column-1 .site-column-aside -->
                <h1 class="page-title" style="text-align: center;">
                    <span class="page-title-span">Contact</span>
                </h1>
                <div class="entry-content">
                    <div class="wp-block-image">
                        <figure class="alignright is-resized">
                            <img src="{{asset(ASSET.'images/contact-216x300.jpg')}}" alt="" class="wp-image-105" sizes="(max-width: 150px) 100vw, 150px" width="150" height="208">
                        </figure>
                    </div>



                    <p>Fripp Island Photography<br>Julie Hodgson<br>843-271-0269					  </p>



                    <p>Complete this form and click the Submit button to send us a comment or question.                      </p>



                    <div role="form" class="wpcf7" id="wpcf7-f106-p80-o1" dir="ltr" lang="en-US">
                        <div class="screen-reader-response"></div>
                        <form action="http://frippislandphotography.com/contact/#wpcf7-f106-p80-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="106">
                                <input type="hidden" name="_wpcf7_version" value="5.0.5">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f106-p80-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="80">
                            </div>
                            <p><label> Your Name (required)<br>
                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
                            <p><label> Your Email (required)<br>
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
                            <p><label> Your phone number<br>
                                    <span class="wpcf7-form-control-wrap tel-8"><input type="tel" name="tel-8" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false"></span></label></p>
                            <p><label>What dates would you like to Book?<br>
                                    <span class="wpcf7-form-control-wrap date-971"><input type="date" name="date-971" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false"></span></label></p>
                            <p><label> Subject<br>
                                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
                            <p><label> Your Message<br>
                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
                            <p><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
                            <div class="wpcf7-response-output wpcf7-display-none"></div></form></div><br><p></p>



                    <p><br></p>
                </div><!-- .entry-content --></div><!-- .site-column-wrapper .clearfix --></div><!-- .site-column .site-column-content -->
    </div><!-- .site-section-wrapper .site-section-wrapper-main -->
</div>
@endsection