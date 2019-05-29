<?php
$setting = new \App\Helper\CommonHelper;
$banners = $setting->get_banner();
?>
@extends('Frontend.layouts.main')

@section('pageTitle','blog')
@section('pageHeadTitle','blog')
@section('sliderTitle',$blog->title)
@if(empty($banners))
@section('headLink')
<link href="{{asset(ASSET.'frontend/css/banner.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset(ASSET.'frontend/css/blog.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

@endsection
@endif
@section('content')
<section class="site-section py-lg">
    <div class="container" style="margin-top: 20px;">

        <div class="row blog-entries element-animate fadeInUp element-animated">

            <div class="col-md-12 main-content">
                <img src="{{asset(ASSET.'upload/blog/'.$blog->image)}}" alt="{{$blog->title}}" class="img-fluid mb-5">
                <div class="post-meta">
                    <span class="mr-2" style="float: right;">{{ date("M jS, Y", strtotime($blog->created_at))}} / <a href="{{url('blogs/'.$blog->category)}}">{{$blog->category}}</a></span> 
                </div>
                <h1 class="mb-4">{{$blog->title}}</h1>
                <div class="post-content-body" style="text-align: left !important;">
                    {!! $blog->description !!}
                </div>
<!--                @if($blog->category != '')
                <div class="pt-5">
                    <p>Categories:  <a href="{{url('blogs/'.$blog->category)}}">{{$blog->category}}</a> </p>
                </div>
                @endif-->

            </div>
            
        </div>
    </div>
</section>

@endsection