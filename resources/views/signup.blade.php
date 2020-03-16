@extends('layouts.master')

@section('content')
@include('includes.message-block')



<div class="container justify-content-center">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-6 signup-form">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name"
                        value="{{ Request::old('first_name') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password"
                        value="{{ Request::old('password') }}">
                </div>
                <div class="form-options">

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <a href="{{ URL('/') }}" class="pull-right align-bottom">Back to Login</a>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection