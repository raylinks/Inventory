@extends('layouts.master3')
@section('content')



    <div class="wrapper-page">
        <div class="text-center">
            <a href="http://coderthemes.com/adminto/bs4/horizontal/index.html" class="logo"><span>Admin<span>to</span></span></a>
            <h5 class="text-muted mt-0 font-600">Responsive Admin Dashboard</h5>
        </div>
        <div class="m-t-40 card-box">
            <div class="text-center">
                <h4 class="text-uppercase font-bold mb-0">Admin Reset Password</h4>

                <p class="text-muted m-b-0 font-13 m-t-20">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
            </div>
            <div class="p-20">
                <form class="form-horizontal m-t-20" method="POST" action="{{ route('admin.passwords.email') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" placeholder="Enter email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" placeholder="enter password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" placeholder="confirm password">
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20 mb-0">
                        <div class="col-xs-12">
                            <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Reset Password </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection