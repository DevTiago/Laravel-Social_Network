@extends('layouts.master')

@section('title')
Welcome!
@endsection

@section('content')
@include('includes.message-block')
<div class="container justify-content-center">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-6 login-form">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password"
                        value="{{ Request::old('password') }}">
                </div>
                <div class="form-options">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <a href="{{ URL('/signup') }}" class="pull-right align-bottom">Create a new account</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection