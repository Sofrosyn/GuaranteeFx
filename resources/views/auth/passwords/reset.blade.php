@extends('layouts.auth')

@section('hint')
    <p class="text-white">
        Remembered password?
        <a href="{{ route('login') }}" class="font-weight-bold text-white text-decoration-underline"> Reset here</a>. |
        New User? <a href="{{ route('register') }}">Join us</a>
    </p>
@endsection

@section('content')
    <div class="p-3">
        <h4 class="font-size-18 mt-2 text-center">Welcome Back !</h4>
        <p class="text-muted text-center mb-4">Set your new password.</p>

        <form class="form-horizontal" action="{{ route('password.update') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email"
                       value="{{ $email ?? old('email') }}">
                @error('email')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">New Password</label>
                <input type="password" class="form-control" id="password" placeholder="New password" name="password">
                @error('password')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">Confirm New Password</label>
                <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm new password" name="password_confirmation">
            </div>

            <div class="row mt-4">
                <div class="col-sm-6">
                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset Password</button>
                </div>
            </div>
        </form>
    </div>
@endsection
