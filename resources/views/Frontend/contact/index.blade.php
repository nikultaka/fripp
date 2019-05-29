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




                    <div class="screen-reader-response"></div>

                    <form method="post" class="wpcf7" id="ContactForm" onsubmit="return false;">
                        {{ csrf_field() }}
                        <p><label> Your Name (required)<br>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="your-name" id="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" data-validation="required"></span> </label></p>
                        <p><label> Your Email (required)<br>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="your-email" id="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" data-validation="required"></span> </label></p>
                        <p><label> Your phone number<br>
                                <span class="wpcf7-form-control-wrap tel-8"><input type="tel" name="tel-8" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false"></span></label></p>
                        <p><label>What dates would you like to Book?<br>
                                <span class="wpcf7-form-control-wrap date-971"><input type="date" name="date-971" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false"></span></label></p>
                        <p><label> Subject<br>
                                <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
                        <p><label> Your Message<br>
                                <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
                        <p>
                            <input type="submit" value="Submit" class="wpcf7-form-control Contact_submit">
                        </p>
                    </form><br><p></p>



                    <p id="stocktable_msg"><br></p>
                </div><!-- .entry-content --></div><!-- .site-column-wrapper .clearfix --></div><!-- .site-column .site-column-content -->
    </div><!-- .site-section-wrapper .site-section-wrapper-main -->
</div>
<script>
    jQuery(document).ready(function () {
        jQuery('.Contact_submit').on('click', function () {
            var error = 0;
            if (jQuery('#your-name').val() == '') {
                error++;
                jQuery('#your-name').css('border', '1px solid red');
            } else {
                jQuery('#your-name').css('border', '1px solid green');
            }
            if (jQuery('#email').val() == '') {
                error++;
                jQuery('#email').css('border', '1px solid red');

            } else {
                jQuery('#email').css('border', '1px solid green');
            }
            if (error > 0) {
                return false;
            }
            jQuery.ajax({
                url: BASE_URL + '/contact',
                type: 'POST',
                data: jQuery('#ContactForm').serialize(),
                success: function (data) {
                    var data = jQuery.parseJSON(data);
                    if (data.status == 1) {
                        jQuery('#ContactForm')[0].reset();
                        jQuery('#stocktable_msg').prepend('<div class="alert alert-success" id="contact_email_notifications_warning">' + data.msg + '</div>');
                        setTimeout(function () {
                            jQuery('#stocktable_msg').fadeOut('fast');
                        }, 30000);

                    }
                }
            })
        })
    })
</script>
@endsection