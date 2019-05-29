@extends('Frontend.layouts.main')

@section('pageTitle','Home')
@section('pageHeadTitle','Home')

@section('content')
<?php
?>
@if(isset($cmsDetails))
{!! $cmsDetails[0]->description !!}
@endif
<div class="page-intro-featured-pages">
    <div class="site-section-wrapper site-section-featured-pages-wrapper clearfix">

        <div id="home-featured-pages">
            @if(!empty($media_category))
            <ul class="ilovewp-featured-pages-list clearfix">
                @foreach($media_category as $key=>$value)
                <li class="site-archive-post ilovewp-featured-page-item has-post-thumbnail post-557 page type-page status-publish hentry">
                    <div class="site-column-widget-wrapper clearfix">
                        <div class="entry-thumbnail">
                            <div class="entry-thumbnail-wrapper"><a href="gallery-html/seniors/index.html" rel="bookmark"><img width="300" height="200" src="{{asset(ASSET.'upload/image/gallery/resize/'.$value->image)}}" style="width: 300px;height: 200px;" class="attachment-photozoom-thumb-featured-page size-photozoom-thumb-featured-page wp-post-image" alt=""  /></a>								
                            </div><!-- .entry-thumbnail-wrapper -->
                            <h2 class="entry-title"><span class="entry-title-span"><a href="gallery-html/seniors/index.html" title="Permalink to Graduating Seniors">Graduating Seniors</a></span></h2>
                        </div><!-- .entry-thumbnail -->						</div><!-- .site-column-widget-wrapper .clearfix -->
                </li>
                @endforeach
            </ul><!-- .ilovewp-featured-pages-list .clearfix -->
            @endif
        </div><!-- #home-featured-pages -->

    </div><!-- .site-section-wrapper .site-section-featured-pages-wrapper .clearfix -->
</div><!-- .page-intro-featured-pages -->

@if(isset($home_welcome))
{!! $home_welcome[0]->description !!}
@endif
<div class="site-page-content">
    <div class="site-section-wrapper site-section-wrapper-main clearfix">

        <div class="site-column site-column-content"><div class="site-column-wrapper clearfix"><!-- .site-column .site-column-1 .site-column-aside -->

                <p class="page-title archives-title"><span class="page-title-span">Recent Posts</span></p>
                <ul class="site-archive-posts site-archive-posts-3">
                    @if(!empty($blogs))
                    @foreach($blogs as $key=>$value)
                    <li class="site-archive-post site-archive-post-{{$key}} post-nothumbnail post-{{$value->id}} post type-post status-publish format-standard hentry category-buy-essay-online-cheap">

                        <div class="site-column-widget-wrapper clearfix">
                            <!-- ws fix
                            --><div class="entry-preview">
                                <div class="entry-preview-wrapper clearfix">
                                    <h2 class="entry-title"><a href="{{url('blog/'.$value->slug_url)}}">{{$value->slug_url}}</a></h2>
                                    <p class="entry-tagline"><span class="post-meta-span post-meta-span-time"><time datetime="{{date('Y:m:d', strtotime($value->created_at))}}" pubdate>{{date('F-d-Y', strtotime($value->created_at))}}</time></span><span class="post-meta-span post-meta-span-category"><a href="{{url('blogs/'.$value->category)}}" rel="category tag">{{$value->category}}</a></span></p>
                                </div>
                            </div><!-- .entry-preview -->
                        </div><!-- .site-column-widget-wrapper .clearfix -->

                    </li><!-- .site-archive-post -->
                    @endforeach
                    @endif

                </ul><!-- .site-archive-posts -->

                <nav class="navigation pagination" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                        <?php if ($currentPage != $firstPage) { ?>
                            <a class="page-numbers" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
                                First
                            </a>
                        <?php } ?>
                        <?php if ($currentPage >= 2) { ?>
                            <a class="page-numbers" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a>
                        <?php } ?>
                        <a class="page-numbers current" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a>
                        <?php if ($currentPage != $lastPage) { ?>
                            <a class="page-numbers" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a>
                            <a class="page-numbers" href="?page=<?php echo $lastPage ?>" aria-label="Next">
                                Last
                            </a>

                        <?php } ?>

                </nav>

            </div><!-- .site-column-wrapper .clearfix --></div><!-- .site-column .site-column-content -->
    </div><!-- .site-section-wrapper .site-section-wrapper-main -->
</div><!-- .site-page-content -->

@endsection