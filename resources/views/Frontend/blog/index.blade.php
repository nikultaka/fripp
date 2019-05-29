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

<!--<link rel='stylesheet' id='astra-advanced-headers-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/style.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='astra-advanced-headers-layout-css-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/astra-addon/addons/advanced-headers/assets/css/minified/advanced-headers-layout-2.min2fca.css?ver=1.4.0')}}" type='text/css' media='all' />-->
<!--<link rel='stylesheet' id='astra-addon-css-css'  href="{{asset(ASSET.'frontend/wp-content/uploads/astra-addon/astra-addon-5b6124593789e7-482594922fca.css?ver=1.4.0')}}" type='text/css' media='all' />-->
@endsection
@endif
@section('content')
<div class="site-page-content">
    <div class="site-section-wrapper site-section-wrapper-main clearfix">

        <div class="site-column site-column-content">
            <div class="site-column-wrapper clearfix"><!-- .site-column .site-column-1 .site-column-aside -->

                <p class="page-title archives-title">
                    <span class="page-title-span">Recent Posts</span></p>
                <ul class="site-archive-posts site-archive-posts-3">
                    @if(!empty($blogs))
                    @foreach($blogs as $key=>$value)
                    <li class="site-archive-post site-archive-post-{{$key}} post-nothumbnail post-{{$value->id}} post type-post status-publish format-standard hentry category-buy-essay-online-cheap">

                        <div class="site-column-widget-wrapper clearfix">
                            <!-- ws fix
                            --><div class="entry-preview">
                                <div class="entry-preview-wrapper clearfix">
                                    <h2 class="entry-title"><a href="{{url('blog/'.$value->slug_url)}}">{{$value->slug_url}}</a></h2>
                                    <p class="entry-tagline"><span class="post-meta-span post-meta-span-time"><time datetime="{{date('Y:m:d', strtotime($value->created_at))}}" pubdate>{{date('F-d-Y', strtotime($value->created_at))}}</time></span><span class="post-meta-span post-meta-span-category"><a href="category/buy-essay-online-cheap/index.html" rel="category tag">Buy Essay Online Cheap</a></span></p>
                                </div>
                            </div><!-- .entry-preview -->
                        </div><!-- .site-column-widget-wrapper .clearfix -->

                    </li><!-- .site-archive-post -->
                    @endforeach
                    @endif

                </ul><!-- .site-archive-posts -->
            </div><!-- .site-column-wrapper .clearfix -->
        </div><!-- .site-column .site-column-content -->
    </div><!-- .site-section-wrapper .site-section-wrapper-main -->
</div><!-- .site-page-content -->

@endsection