@extends('Admin.layouts.dashboard.main')

@section('pageTitle','Reports')
@section('pageHeadTitle','Reports')

@section('content')


<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Reports</h3>

      <div class="box-tools pull-right">
         <a href="{{url(ADMIN.'/reports/list')}}" class="btn btn-info btn-sm">Reports List</a> 
      </div>
      <p id="msg_main"></p>
    </div>
    <div class="box-body">
        <form class="form-horizontal" role="form" method="post" id="frm_reports" name="frm_reports" onsubmit="return false"> 
                        {{ csrf_field() }}
                        <div class="card-body">
                            <input type="hidden" name="id" id="id" value="<?php echo isset($reports->id) ? $reports->id : '' ?>">
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="title" class="col-sm-2">Category</label>
                                <div class="col-sm-8">
                                    <select id="sub_category_id" name="sub_category_id" class="form-control" data-validation="required">
                                    <option value="">----Select Category----</option>
                                    <?php 
                                        if(!empty($sub_category)){
                                            foreach ($sub_category as $key => $value) { ?>
                                                <option value="<?php echo $value->id;?>" <?php if(isset($reports->id)){ if($reports->id == $value->id){echo 'selected';}} ?>><?php echo $value->name;?></option>
                                    <?php   } 
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="title" class="col-sm-2">Title</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="<?php echo isset($reports->title) ? $reports->title : '' ?>" name="title" id="title" data-validation="required" />
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="short_desc" class="col-sm-2">Short Description</label>
                                <div class="col-sm-8">
                                    <textarea id="short_desc" class="form-control" name="short_desc" rows="5" cols="80" data-validation="required"><?php echo isset($reports->short_desc) ? $reports->short_desc : '' ?></textarea>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="description" class="col-sm-2">Description Editor</label>
                                <div class="col-sm-8">
                                    <textarea id="description" class="form-control" class="editor" name="description" rows="10" cols="80"><?php echo isset($reports->description) ? $reports->description : '' ?></textarea>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="price" class="col-sm-2">Price</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="price" id="price" value="<?php echo isset($reports->price) ? $reports->price : '' ?>" data-validation="required" data-validation="number" data-validation-allowing="float"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="pages" class="col-sm-2">Pages</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="pages" id="pages" value="<?php echo isset($reports->pages) ? $reports->pages : '' ?>" data-validation="required" data-validation="number" data-validation-allowing="float"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div> 
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="language" class="col-sm-2">Language</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="language" id="language" value="<?php echo isset($reports->language) ? $reports->language : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="release_date" class="col-sm-2">Release Date</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="release_date" id="release_date" value="<?php echo isset($reports->release_date) ? $reports->release_date : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="status" class="col-sm-2">Status</label>
                                <div class="col-sm-8">
                                    <select id="status" class="form-control" name="status" data-validation="required">
                                        <option value="">----Select Status----</option>
                                        <option value="1" <?php if(isset($reports->status)){ if($reports->status == '1'){echo 'selected';}} ?>>Active</option>
                                        <option value="0" <?php if(isset($reports->status)){ if($reports->status == '0'){echo 'selected';}} ?>>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                        </div>
                        <div class="card-footer ">
                            <center><button type="submit" class="btn btn-primary sub-reports">Submit</button></center>
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

<!--<script src="{!! asset('js/ckeditor.js')!!}"></script>-->
<script src="{!! asset(ASSET.'js/Admin/reports.js')!!}"></script>
<script type="text/javascript">
                    $(document).ready(function () {
                        admin.reports.initialize();
                        CKEDITOR.replace('description');
                    });
</script>
@endsection