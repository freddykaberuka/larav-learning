
@extends('layoutdashboard.main')
@section('content')
<div class="auth">
    <div class="auth_left">
        <div class="card">
            <div class="text-center mb-1">
                <a class="header-brand" href="index-2.html"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
            </div>
            <div class="card-body">
                <div class="card-title">Register</div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">FirstName</label>
                            <input type="text" class="form-control" placeholder="Enter firstname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                            <label class="form-label">LastName</label>
                            <input type="text" class="form-control" placeholder="Enter lastname">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Address</label>
                    <input type="address" class="form-control" placeholder="Enter address">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <input type="status" class="form-control" placeholder="Enter status">
                </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Gender</label>
                    <input type="gender" class="form-control" placeholder="Gender">
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">About</label>
                    <input type="about" class="form-control" placeholder="About">
                </div>
            </div>
        </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Agree the <a href="#">terms and policy</a></span>
                    </label>
                </div>
                <div class="form-footer">
                    <!--<button type="submit" class="btn btn-primary btn-block">Create new account</button> -->
                <a href="index-2.html" class="btn btn-primary btn-block" title="">Create new account</a>

                </div>
            </div>
            <div class="text-center text-muted">
                Already have account? <a href="{{route('login')}}">Sign in</a>
            </div>
        </div>
    </div>
    <div class="auth_right full_img"></div>
</div>
@endsection