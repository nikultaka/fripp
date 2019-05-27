
@extends('Frontend.layouts.main')

@section('pageTitle','Reports List')
@section('pageHeadTitle','Reports List')
@section('headLink')
<link href="{{asset(ASSET.'frontend/css/base.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')

@if(!empty($sub_category))
<section class="section padding-horizontal-7 bg-light">
    <div class="navBarWrapper--relative">
        <nav id="studyTypesNavigation" class="navBar">
            <ul class="navBar__list">
                @foreach ($sub_category as $key=>$value)
                <li class="navBar__item navBar__item--icon6 navBar__item--icon">
                    <a href="#{{$value->name}}" data-smoothscroll="" class="navBar__link">
                        <i class="navBar__icon dot dot--blue"></i>
                        {{$value->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>
@endif
@if(!empty($reports))
@foreach ($reports as $key=>$value)
<section id="{{$value->name}}" class="section section--medium padding-horizontal-60 padding-vertical-30 bg-light ">
    <div class="panel-box">
        <div class="">
            <div class="width100">
                <h3 class="border-bottom-gray20-1 padding-bottom-15 margin-bottom-15">
                            {{$value->name}}
                            <p class="h6 floatRight">{{$value->sub_desc}}</p>
                </h3>
                <div class="">
                    <div class="width55">
                        <ul class="checklist padding-0 width50">
                            <li class="check margin-bottom-15">
                                {!! html_entity_decode($value->description) !!}
                                <!--all top statistics on this topic-->
                            </li>
<!--                            <li class="check margin-bottom-15">
                                compiled by our experts
                            </li>
                            <li class="check margin-bottom-15">
                                on more than 1,000 topics
                            </li>-->
                        </ul>
                        <ul class="study-price-list padding-vertical-10 padding-0 padding-left-15 width50">
                            <li class="margin-bottom-15 item-price item-price-normal">
                                <span class="price-title padding-right-7">Regular price</span>
                                <span class="fillpoints"></span>
                                <span class="price float-right text-bold padding-left-7">
                                    {{$value->price}}
                                </span>
                            </li>
                            <li class="margin-bottom-15 item-price item-price-corporate">
                                <span class="price-title padding-right-7">Corporate Account users</span>
                                <span class="fillpoints"></span>
                                <span class="price float-right text-bold padding-left-7">
                                    <a href="/register/corporate" class="text-color--green-1">
                                        $0
                                    </a>
                                </span>
                            </li>
                        </ul>
                        <div class="row text-center padding-top-15">
                            <a href="/dossiers" name="button" class="button">
                                            Show more {{$value->name}}
                            </a>
                        </div>
                    </div>
                    <div class="width45">
                        <div class="text-center">
                            <ul class="studyCoverList">
                                <li class="studyCoverList__item studyCoverList__item--15313" style="display: inline-block;position: relative;">
                                    <a href="/study/15313/netflix-statista-dossier/" title="Netflix" class="studyCoverList__link hover--zoom hover--zoom--shadow">
                                        <img src="https://cdn.statcdn.com/Study/15000/15313.png" class="studyCoverList__image padding-horizontal-7">
                                    </a>
                                </li>
                                <li class="studyCoverList__item studyCoverList__item--12878" style="display: inline-block;position: relative;">
                                    <a href="/study/12878/us-coffee-market-statista-dossier/" title="Coffee market in the U.S." class="studyCoverList__link hover--zoom hover--zoom--shadow">
                                        <img src="https://cdn.statcdn.com/Study/10000/12878.png" class="studyCoverList__image padding-horizontal-7">
                                    </a>
                                </li>
                                <li class="studyCoverList__item studyCoverList__item--15607" style="display: inline-block;position: relative;">
                                    <a href="/study/15607/wearable-technology-statista-dossier/" title="Wearable devices" class="studyCoverList__link hover--zoom hover--zoom--shadow">
                                        <img src="https://cdn.statcdn.com/Study/15000/15607.png" class="studyCoverList__image padding-horizontal-7">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

                                        
@endif
@endsection

@section('bottomscript')

@endsection