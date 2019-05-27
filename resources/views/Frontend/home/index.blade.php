@extends('Frontend.layouts.main')

@section('pageTitle','Home')
@section('pageHeadTitle','Home')

@section('content')
<?php

?>
<div class="agileits-services">
    <div class="services-right-grids">
        @foreach ($brands as $brand)

             <a href="{{url($brand->slug_url)}}">
            <div class="col-md-2 services-right-grid services_div ">
                <div class="se-top offer">
                    <div class="services-icon mkservice-icon">
                        <?php if(isset($brand->logo) && $brand->logo != '' ){ 
                            $url =   ASSET.'upload/image/thumbnail/'.$brand->logo;
                        }else{
                            $url =   ASSET.'upload/logo.png';
                        } ?>
                        <img style="height:200px; width: 150px;" src="{{url($url)}}">
                    </div>
                    <div class="services-icon-info">
                        <h5>{{$brand->title}}</h5>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        <div class="clearfix"> </div>
    </div>

</div>
@if (\Request::is('home'))
<h2 class="nlabel">Latest Datasets</h2>
<div class="tab-content">
			<div id="latest-reports" class="tab-pane fade active in">
                            <div class="report-listing">
                                @foreach($datasets as $dataset)
                               <div class="report-block col-md-12">
                                    <h4><a href="{{url('/dataset/'.$dataset->fld_dataset_id)}}" title="" class="ptitle">
									<?php echo $dataset->fld_dataset_title ?></a> </h4>
                                        <ul class="publshr-name clearfix">
                                        <li><i class="fa fa-calendar"></i> On <?php echo date('d/m/y', strtotime($dataset->fld_dataset_created_date));?></li>                                        
                                    </ul>
                                    <div class="shortdesc clearfix">
                                        <p><?php echo $dataset->fld_shortdescription; ?>[...]
                                        <a href="{{url('/dataset/'.$dataset->fld_dataset_id)}}" class="showmoretxt" rel="nofollow"> Read More</a>
										</p>
                                    </div>
                                </div> 
                                @endforeach
                                <a href="{{url('/dataset')}}" class="btn btn-primary more-report-btn-home pull-right">Latest Dataset continue.. </a>
                            </div>
                        </div>
</div>
@endif
@endsection
@section('bottomscript')
<script src="{!! asset(ASSET.'js/frontend/home.js')!!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        frontend.home.initialize();
    });
</script>
@endsection