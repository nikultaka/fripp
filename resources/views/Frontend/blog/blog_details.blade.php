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
@endsection
@endif
@section('content')
@if(!empty($cmsDetails))

@endif
@endsection