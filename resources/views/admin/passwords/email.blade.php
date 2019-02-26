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
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <p class="text-muted m-b-0 font-13 m-t-20">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
            </div>
            <div class="p-20">
                <form class="form-horizontal m-t-20" method="POST" action="{{ route('admin.passwords.email') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email"  name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20 mb-0">
                        <div class="col-xs-12">
                            <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Send Password Reset Link</button>
                        </div>
                    </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection