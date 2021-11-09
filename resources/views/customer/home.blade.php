@extends('layouts.admiria.master', ['title' => 'Home'])

@section('content')
    <div class="card">
        <div class="card-body">
            @if($info = session('info'))
                <div class="alert alert-info">{{ $info }}</div>
            @endif
            @if(!$user->is_subscribed)
                <a href="{{ route('payments.new') }}" class="btn btn-primary">Pay Now</a>
            @else
                    Welcome {{ $user->full_name }}.
                    <a href="{{ route('home.signals') }}">Click here</a> to access available signals
            @endif
        </div>
    </div>
@endsection
