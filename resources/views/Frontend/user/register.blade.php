@extends('Frontend.layouts.main')

@section('pageTitle','Register')
@section('pageHeadTitle','Register')

@section('content')
<div class="login_register">


    <div class="login_form">
        <div class="w3-agile-services">
            <div class="container">
                <h4 class="title-txt">Register</h4>

                <p id="msg"></p>
                <div class="agileits-services">
                    <div class="services-right-grids">
                        <form id="register-form" action="#" onsubmit="return false;" method="post" role="form" class="form-sets" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Name" value="" data-validation="required">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="" data-validation="email">
                            </div>
                            <div class="form-group">
                                <input type="file" name="imgtoupload" id="imgtoupload" class="form-control" data-validation="required">
                            </div>
                            <div class="form-group">
                                <img id="profile_pic" style="width: 150px;" src="">
                            </div>
                            
                            <div class="form-group">
                                <input type="password" name="pass_confirmation" id="password" class="form-control" placeholder="Password" data-validation="length" data-validation-length="min8">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" id="cpassword" class="form-control" placeholder="Confirm Password" data-validation="confirmation">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="clearfix"> </div>
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