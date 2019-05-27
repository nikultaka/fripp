@extends('Frontend.layouts.main')

@section('pageTitle','Login')
@section('pageHeadTitle','Login')

@section('content')
<div class="login_register">


    <div class="login_form">
        <div class="w3-agile-services">
            <div class="container">
                <h4 class="title-txt">Login</h4>


                <div class="agileits-services">
                    <div class="services-right-grids">
                        <form id="login-form" action="{{url('login')}}"  method="post" role="form" class="form-sets">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="form-group col-sm-6 col-sm-offset-3">     
                                <input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-login" value="Log In">
                            </div>
                        </form>



                        <div class="clearfix"> </div>


                    </div>

                    <div class="services-right-grids" align="center">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('bottomscript')
<script src="{!! asset(ASSET.'js/frontend/user.js')!!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        frontend.user.initialize();
    });
</script>
@endsection