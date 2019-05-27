<div class="agileits-services">
    <div class="services-right-grids">
        <div id="load" style="position: relative;">
        @foreach ($news as $new)

                <div class="col-md-4 services-right-grid services_div" style="width: 33.33333333% !important;">

                    <div class="se-top offer" style="max-height: 500px ; min-height: 500px">
                        <div class="services-icon-info">
                            <h5>{{$new->title}}</h5>
                        </div>
                        <div class="services-icon mkservice-icon">
                            <?php if(isset($new->image) && $new->image != '' ){ 
                                $url =   ASSET.'upload/news/thumbnail/'.$new->image;
                            }else{
                                $url =   ASSET.'upload/logo.png';
                            } ?>
                            <img style="height:180px; width: 80%;" src="{{url($url)}}">
                        </div>
                        <div class="services-icon-info">
                            <p>{{$new->short_desc}}</p>
                        </div>
                        
                        <div style="position: absolute; bottom:10px;">
                            <a href="{{url('news/'.$new->id)}}">Read More</a>
                        </div>
                        

                        
                    </div>
                </div>
            <!--</a>-->
        @endforeach
         </div>
        <div class="clearfix"> </div>
    </div>

</div>
<center>
    {!! $news->render() !!}
</center>