@extends('Admin.layouts.login.main')

@section('content')

<form role="form" method="POST" action="{{ url(ADMIN.'/login') }}">
    {{ csrf_field() }}
    <div class="form-group has-feedback">
      <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input id="password" type="password" placeholder="Password" class="form-control" name="password" placeholder="Password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">
      </div>
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
      </div>
      <!-- /.col -->
    </div>
</form>




@endsection