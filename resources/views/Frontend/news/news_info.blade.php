@extends('Frontend.layouts.main')

@section('pageTitle','News Info')
@section('pageHeadTitle','News Info')

@section('content')

<div class="container">
   
    <div>
        <?php echo $news[0]->title; ?>
    </div>

    <div>
        <?php echo $news[0]->description; ?>
    </div>
    <div style="padding-top: 10px;">
        <b>Publish Date :</b> <?php echo $news[0]->publish_date; ?>
    </div>
    <div>
        <center><a href="{{url('news')}}" class="btn btn-primary">View all post</a></center>
    </div>
</div>


@endsection
@section('bottomscript')
<script src="{!! asset(ASSET.'js/frontend/home.js')!!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        frontend.home.initialize();
    });
</script>
@endsection