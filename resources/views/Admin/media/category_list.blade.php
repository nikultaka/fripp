@extends('Admin.layouts.dashboard.main')

@section('pageTitle','Media Category')
@section('pageHeadTitle','Media Category')

@section('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Media Category List</h3>

      <div class="box-tools pull-right">
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ins_media"> Create New Category </button>
      </div>
      <p id="msg_main"></p>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-striped with-check media_category_table table-hover">
            <thead>
            <!--<th>ID</th>-->
            <th>Category Name</th>
            <th>status</th>
            <th>Created Date</th>
            <th>Action</th>
            </thead>
        </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <!--Footer-->
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->


@include('Admin.media.add_category')
@endsection
@section('bottomscript')
<script src="{{ asset(ASSET.'js/Admin/media.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        admin.media_category.initialize();
    });
</script>
@endsection