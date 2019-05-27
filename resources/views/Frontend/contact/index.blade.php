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
<link href="{{asset(ASSET.'frontend/css/banner.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset(ASSET.'frontend/css/contact.css')}}" rel="stylesheet" type="text/css" media="all" />

<link rel='stylesheet' id='astra-advanced-headers-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/style.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='astra-advanced-headers-layout-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/advanced-headers-layout-2.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='astra-addon-css-css'  href="{{asset(ASSET.'frontend/wp-content/uploads/astra-addon/astra-addon-5b6124593789e7-482594922fca.css?ver=1.4.0')}}" type='text/css' media='all' />
@endsection
@endif

@section('content')

<section data-id="68a1aeb" class="elementor-element elementor-element-68a1aeb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
    <div class="elementor-container elementor-column-gap-wider">
        <div class="elementor-row">
            <div data-id="b81d095" class="elementor-element elementor-element-b81d095 elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div data-id="be527af" class="elementor-element elementor-element-be527af elementor-widget elementor-widget-heading" data-element_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">{!! __("message.contact_title") !!}</h3>		</div>
                        </div>
                        <div data-id="fd59b89" class="elementor-element elementor-element-fd59b89 elementor-widget elementor-widget-text-editor" data-element_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix"><p>{!! __("message.contact_p1")!!}</p><p>{!! __("message.contact_p2")!!}</p><p>{!! __("message.contact_p3") !!}</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-id="6937047" class="elementor-element elementor-element-6937047 elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div data-id="4b3e1b6" class="elementor-element elementor-element-4b3e1b6 elementor-widget elementor-widget-heading" data-element_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">{{ __('message.contact_form_title') }}</h3>		</div>
                        </div>
                        <div data-id="005e620" class="elementor-element elementor-element-005e620 elementor-button-align-start elementor-widget elementor-widget-form" data-element_type="form.default">
                            <div class="elementor-widget-container">
                                <form class="elementor-form" method="post" name="New Form">
                                    {{ csrf_field() }}
                                    <div class="elementor-form-fields-wrapper elementor-labels-">
                                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                            <input size="1" type="text" name="name" id="form-field-name" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="{{ __('message.contact_form_name') }}" required="required" aria-required="true">				</div>
                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-50eff79 elementor-col-50 elementor-field-required">
                                            <input size="1" type="email" name="email" id="form-field-50eff79" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="{{ __('message.contact_form_email') }}" required="required" aria-required="true">				</div>
                                        <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-Phone elementor-col-50">
                                            <input size="1" type="tel" name="Phone" id="form-field-Phone" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="{{ __('message.contact_form_phone') }}" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">				</div>
                                        <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                            <textarea class="elementor-field-textual elementor-field  elementor-size-md" name="message" id="form-field-message" rows="5" placeholder="{{ __("message.contact_form_msg") }}" required="required" aria-required="true"></textarea>				</div>
                                        <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
                                            <button type="submit" class="elementor-button elementor-size-md">
                                                <span>
                                                    <span class="elementor-button-text">Submit</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section data-id="85f8645" class="elementor-element elementor-element-85f8645 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-element_type="section">
    <div class="elementor-container elementor-column-gap-wider">
        <div class="elementor-row">
            <div data-id="dcba5a3" class="elementor-element elementor-element-dcba5a3 elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div data-id="c676c31" class="elementor-element elementor-element-c676c31 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon elementor-animation-">
                                            
                                            {!! $setting->get_setting_details('marker','label') !!}
                                        </span>
                                    </div>
                                    <div class="elementor-icon-box-content">
                                        <h3 class="elementor-icon-box-title">
                                            <span>{{$setting->get_setting_details('marker','fild_value')}}</span>
                                        </h3>
                                        <p class="elementor-icon-box-description">{!!$setting->get_setting_details('address','fild_value')!!}<br>
                                            <br>
                                            <strong>
                                                Phone: {{$setting->get_setting_details('phone','fild_value')}}<br>
                                                Fax: {{$setting->get_setting_details('fax','fild_value')}}<br>
                                            </strong>
                                            {{$setting->get_setting_details('jhms','fild_value')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="1000a30" class="elementor-element elementor-element-1000a30 elementor-widget elementor-widget-google_maps" data-element_type="google_maps.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-custom-embed"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{$setting->get_setting_details('address','fild_value')}}&amp;t=m&amp;z=17&amp;output=embed&amp;iwloc=near" aria-label="Ground Floor, Unit 7  400 Roberts Road  Subiaco WA 6008" frameborder="0"></iframe></div>		</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div data-id="a785bb5" class="elementor-element elementor-element-a785bb5 elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div data-id="df01bc9" class="elementor-element elementor-element-df01bc9 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-element_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon elementor-animation-">
                                            
                                            {!! $setting->get_setting_details('marker1','label') !!}
                                        </span>
                                    </div>
                                    <div class="elementor-icon-box-content">
                                        <h3 class="elementor-icon-box-title">
                                            <span>{{$setting->get_setting_details('marker1','fild_value')}}</span>
                                        </h3>
                                        <p class="elementor-icon-box-description">{!!$setting->get_setting_details('address1','fild_value')!!}<br>
                                            <br>
                                            <strong>
                                                Tel: {{$setting->get_setting_details('phone1','fild_value')}}<br>
                                                Fax: {{$setting->get_setting_details('fax1','fild_value')}}<br>
                                            </strong>
                                            {{$setting->get_setting_details('jhms1','fild_value')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-id="bb7a30f" class="elementor-element elementor-element-bb7a30f elementor-widget elementor-widget-google_maps" data-element_type="google_maps.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-custom-embed"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{$setting->get_setting_details('address1','fild_value')}}&amp;t=m&amp;z=17&amp;output=embed&amp;iwloc=near" aria-label="Shop 26, The Parks Shopping Centre 1 Brittain Rd Bunbury WA 6230  " frameborder="0"></iframe></div>		</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection