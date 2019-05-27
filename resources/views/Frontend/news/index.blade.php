
@extends('Frontend.layouts.main')

@section('pageTitle','News')
@section('pageHeadTitle','News')

@section('content')

<div id="news_container">
       @include('Frontend.news.load')
</div>
   
@endsection
@section('bottomscript')
<script type="text/javascript">

	$(window).on('hashchange', function() {
            if (window.location.hash) {
                    var page = window.location.hash.replace('#', '');
                    if (page == Number.NaN || page <= 0) {
                        return false;
                    } else {
                        getData(page);
                    }
            }
        });

	$(document).ready(function() {
	     $(document).on('click', '.pagination a',function(event){
	        event.preventDefault();
	        $('li').removeClass('active');
	        $(this).parent('li').addClass('active');
	        var myurl = $(this).attr('href');
	        var page=$(this).attr('href').split('page=')[1];
	        getData(page);
	    });
	});

	function getData(page){
	        $.ajax({
	            url: '?page=' + page,
	            type: "get",
	            datatype: "html"
	        })
	        .done(function(data){
	            $("#news_container").empty().html(data);
//	            location.hash = page;
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError){
	              alert('No response from server');
	        });
	}

</script>




<!--<script src="{!! asset(ASSET.'js/frontend/dataset.js')!!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
       // frontend.dataset.initialize();
    });
</script>-->
@endsection