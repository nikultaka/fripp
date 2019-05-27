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

<link rel='stylesheet' id='astra-advanced-headers-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/style.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='astra-advanced-headers-layout-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/advanced-headers-layout-2.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='astra-addon-css-css'  href="{{asset(ASSET.'frontend/wp-content/uploads/astra-addon/astra-addon-5b6124593789e7-482594922fca.css?ver=1.4.0')}}" type='text/css' media='all' />
@endsection
@endif
@section('content')
<section class="site-section py-lg">
    <div class="container" style="margin-top: 20px;">

        <div class="row blog-entries element-animate fadeInUp element-animated">

            <div class="col-md-8 main-content">
                <img src="{{asset(ASSET.'upload/blog/'.$blog->image)}}" alt="{{$blog->title}}" class="img-fluid mb-5">
                <div class="post-meta">
                    <span class="mr-2" style="float: right;">{{ date("M jS, Y", strtotime($blog->created_at))}} </span> 
                </div>
                <h1 class="mb-4">{{$blog->title}}</h1>
                <div class="post-content-body">
                    {!! $blog->description !!}
                </div>
                @if($blog->category != '')
                <div class="pt-5">
                    <p>Categories:  <a href="{{url('blogs/'.$blog->category)}}">{{$blog->category}}</a> </p>
                </div>
                @endif

            </div>
            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box">
                    <h3 class="heading">Latest Post</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @foreach($latest_posts as $latest_post)
                            <li>
                                <a href="{{url('blog/'.$latest_post->slug_url)}}">
                                    <img src="{{asset(ASSET.'upload/blog/resize/'.$latest_post->image)}}" alt="{{$latest_post->title}}" style="width: 50px;" class="mr-4">
                                    <div class="text">
                                        <h4>{{$latest_post->title}}</h4>
                                        <div class="post-meta">
                                            <span class="mr-2">{{ date("M jS, Y", strtotime($latest_post->created_at))}}  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">
                        @foreach($categorys as $category)
                        <li><a href="{{url('blogs/'.$category->name)}}">{{$category->name}}<span>({{$category->total_post}})</span></a></li>
                       @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection