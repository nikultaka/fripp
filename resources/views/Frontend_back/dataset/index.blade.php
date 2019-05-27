
@extends('Frontend.layouts.main')

@section('pageTitle','Home')
@section('pageHeadTitle','Home')

@section('content')
<div class="row">
    <div class="col-md-4">
        
    </div>
    <div class="col-md-8">
        <h3 class="title-txt"><?= $datasets->fld_dataset_title ?></h3>
        <p class="data_text dataset_text"><?= strip_tags($datasets->fld_dataset_desc) ?></p>

    </div>
</div>
@endsection
@section('bottomscript')
<script src="{!! asset(ASSET.'js/frontend/dataset.js')!!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
       // frontend.dataset.initialize();
    });
</script>
@endsection