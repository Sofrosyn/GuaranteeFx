@extends('layouts.admiria.master', ['title' => 'Dashboard'])

@section('content')
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <x-admin.mini-stats-widget w-subject="Registered Users" :w-value="$users">
                <x-slot name="icon">
                    <i class="mdi mdi-account-supervisor-circle"></i>
                </x-slot>
            </x-admin.mini-stats-widget>
        </div>
        <div class="col-md-4 col-lg-3">
            <x-admin.mini-stats-widget w-subject="Signals" :w-value="$signals">
                <x-slot name="icon">
                    <i class="mdi mdi-access-point-network"></i>
                </x-slot>
            </x-admin.mini-stats-widget>
        </div>
    </div>
@endsection
