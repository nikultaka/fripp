@extends('Admin.layouts.dashboard.main')

@section('pageTitle','News')
@section('pageHeadTitle','News')

@section('content')


<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">News</h3>

      <div class="box-tools pull-right">
          <a href="{{url(ADMIN.'/news/list')}}" class="btn btn-info btn-sm">News List</a>
      </div>
      <p id="msg_main"></p>
    </div>
    <div class="box-body">
        <form class="form-horizontal" role="form" method="post" id="frm_news" name="frm_news" onsubmit="return false" enctype="multipart/form-data"> 
                        {{ csrf_field() }}
                        <div class="card-body">
                            <input type="hidden" name="id" id="id" value="<?php echo isset($news->id) ? $news->id : '' ?>">
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="title" class="col-sm-2">News Title</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="<?php echo isset($news->title) ? $news->title : '' ?>" name="title" id="title" data-validation="required" />
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="short_desc" class="col-sm-2">Short Description</label>
                                <div class="col-sm-8">
                                    <span id="max-length-element">250</span> chars left
                                    <!--<input type="text" class="form-control" name="short_desc" id="short_desc" value="<?php // echo isset($news->short_desc) ? $news->short_desc : '' ?>" data-validation="required"/>-->
                                    <textarea id="short_desc" class="form-control" name="short_desc" rows="5" cols="80" data-validation="required" data-validation="length" data-validation-length="max250"><?php echo isset($news->short_desc) ? $news->short_desc : '' ?></textarea>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="description" class="col-sm-2">Description</label>
                                <div class="col-sm-8">
                                    <textarea id="description" class="form-control" class="editor" name="description" rows="10" cols="80" data-validation="required"><?php echo isset($news->description) ? $news->description : '' ?></textarea>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="publish_date" class="col-sm-2">Publish Date</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="publish_date" id="publish_date" value="<?php echo isset($news->publish_date) ? $news->publish_date : date('Y-m-d') ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="news_image" class="col-sm-2">Image</label>
                                <div class="col-sm-4">
                                    <input type="file" id="news_image" name="news_image">
                                </div>
                                <div class="col-sm-4">
                                    <?php 
                                    if(isset($news->image) && $news->image != '' ){ 
                                      $url =   ASSET.'upload/news/thumbnail/'.$news->image;
                                    }else{
                                        $url =   ASSET.'upload/logo.png';
                                    } 
                                    ?>
                                    <img id="news_image_priview" style="width: 50px;" src="{{url($url)}}">
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="status" class="col-sm-2">Status</label>
                                <div class="col-sm-8">
                                    <select id="status" class="form-control" name="status" data-validation="required">
                                        <option value="">----Select Status----</option>
                                        <option value="1" <?php if(isset($news->status)){ if($news->status == '1'){echo 'selected';}} ?>>Active</option>
                                        <option value="0" <?php if(isset($news->status)){ if($news->status == '0'){echo 'selected';}} ?>>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                        </div>
                        <div class="card-footer ">
                            <center><button type="submit" class="btn btn-primary sub-news">Submit</button></center>
                        </div>
                    </form>
    </div>
    <!-- /.box-body -->
    
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->

@endsection
@section('bottomscript')

<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

<script src="{!! asset('js/ckeditor.js')!!}"></script>
<script src="{!! asset(ASSET.'js/Admin/news.js')!!}"></script>
<script type="text/javascript">
                    $(document).ready(function () {
                    $('#short_desc').restrictLength( $('#max-length-element') );
                        admin.news.initialize();
                        CKEDITOR.replace('description');
                    });
</script>
@endsection