@extends('Admin.layouts.dashboard.main')

@section('pageTitle','Reports List')
@section('pageHeadTitle','Reports List')

@section('content')

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Reports List</h3>
                    <div class="box-tools pull-right">
                        <a href="{{url(ADMIN.'/reports')}}" class="btn btn-info btn-sm">Create New Reports Page</a>
                    </div>
                </div>
                <p id="msg_main"></p>
                <div class="box-body">
                    <table class="display nowrap table table-hover table-striped table-bordered reports-table table-hover" cellspacing="0" width="100%">
                        <thead>
                        <!--<th>ID</th>-->
                        <th>Title</th>
                        <th>Category</th>
                        <th>Short Desc</th>
                        <th>Price</th>
                        <th>Pages</th>
                        <th>Language</th>
                        <th>Release Date</th>
                        <th>status</th>
                        <th>Action</th>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- /.content -->


@endsection

@section('bottomscript')
<script src="{!! asset(ASSET.'js/Admin/reports.js')!!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        admin.reports.initialize();
    });
</script>
@endsection