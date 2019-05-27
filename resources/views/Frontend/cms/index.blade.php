<?php
$setting = new \App\Helper\CommonHelper;
$banners = $setting->get_banner();
?>
@extends('Frontend.layouts.main')
@if(!empty($cmsDetails))
@section('pageTitle',$cmsDetails[0]->title)
@section('pageHeadTitle',$cmsDetails[0]->title)
@section('sliderTitle',$cmsDetails[0]->title)

@endif
@if(empty($banners))
@section('headLink')
<style>
    .site-column-wrapper .page-title{
        margin-right: auto;
        margin-left: auto;
        max-width: 800px;
        text-align: center;
    } 
    
</style>
<!--<link href="{{asset(ASSET.'frontend/css/banner.css')}}" rel="stylesheet" type="text/css" media="all" />

<link rel='stylesheet' id='astra-advanced-headers-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/style.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='astra-advanced-headers-layout-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/advanced-headers-layout-2.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='astra-addon-css-css'  href="{{asset(ASSET.'frontend/wp-content/uploads/astra-addon/astra-addon-5b6124593789e7-482594922fca.css?ver=1.4.0')}}" type='text/css' media='all' />-->
@endsection
@endif
@section('content')
@if(!empty($cmsDetails))
{!! html_entity_decode($cmsDetails[0]->description) !!}
@endif
@endsection