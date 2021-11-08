@extends('layouts.admiria.master', ['title' => 'Users'])

@push('head')
    @powerGridStyles
@endpush

@push('js')
    @powerGridScripts
@endpush

@section('content')
   <div class="card">
       <div class="card-body">
           <livewire:admin.user-table />
       </div>
   </div>
@endsection
