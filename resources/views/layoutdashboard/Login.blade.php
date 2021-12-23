@extends('layoutdashboard.main')
@section('content')
 <form action="{{route('login')}}" method="post">
          
@csrf
<div class="auth">
    <div class="auth_left">
        <div class="card">
            <div class="text-center mb-2">
                <a class="header-brand" href="index-2.html"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
            </div>
            <div class="card-body">
                <div class="card-title">Login to your account</div>
                
                <div class="form-group">
                    <label class="form-label">Email<a href="forgot-password.html" class="float-right small"></a></label>
                    <input type="email" class="form-control -invalid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    @error('email')
                    <span clas="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                     @error('password')
                    <span clas="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block" title="">Sign in</button>
                </div>
            </div>
            <div class="text-center text-muted">
                Don't have account yet? <a href="{{route('register')}}">Sign up</a>
            </div>
        </div>        
    </div>
    <div class="auth_right full_img"></div>
    </form>
</div>
@endsection

