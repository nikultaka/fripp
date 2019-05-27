<?php
$setting = new \App\Helper\CommonHelper;
$banners = $setting->get_banner();
?>
@extends('Frontend.layouts.main')

@section('pageTitle','blog')
@section('pageHeadTitle','blog')
@section('sliderTitle','Blog')
@if(empty($banners))
@section('headLink')
<link href="{{asset(ASSET.'frontend/css/banner.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

<link rel='stylesheet' id='astra-advanced-headers-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/style.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='astra-advanced-headers-layout-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/advanced-headers-layout-2.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='astra-addon-css-css'  href="{{asset(ASSET.'frontend/wp-content/uploads/astra-addon/astra-addon-5b6124593789e7-482594922fca.css?ver=1.4.0')}}" type='text/css' media='all' />
@endsection
@endif
@section('content')
<section class="site-section py-sm" >
    <div class="container" style="background: #fff; ">
        <div class="row">
            <div class="col-md-6">

            </div>
        </div>
        <div class="row blog-entries" style="margin-top: 20px;">
            <div class="col-md-12 col-lg-12 main-content">
                <div class="row">
                    @if(!empty($blogs))
                    @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <a href="{{url('blog/'.$blog->slug_url)}}" class="blog-entry element-animate fadeIn element-animated" data-animate-effect="fadeIn">
                            <img src="{{asset(ASSET.'upload/blog/resize/'.$blog->image)}}" alt="Image placeholder">
                            <div class="blog-content-body">
                                <div class="post-meta">
                                    <span class="author mr-2" style="float: left;">{{$blog->category}}</span>
                                    <span class="mr-2" style="float: right;">{{ date("M jS, Y", strtotime($blog->created_at))}} </span> 
                                    
                                </div>
                                <h4>{{$blog->title}}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @else
                    <div class="col-md-12">
                        <h1 style="text-align: center;">No blogs find</h1>
                    </div>
                    @endif
                </div>
            </div>


        </div>
    </div>
</section>

@endsection