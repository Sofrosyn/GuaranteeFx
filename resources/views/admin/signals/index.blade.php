@extends('layouts.admiria.master', ['title' => 'Signals'])

@push('head')
    @powerGridStyles
@endpush

@push('js')
    @powerGridScripts
    <script>
        window.addEventListener('goToVideo', event => {
            let target = document.getElementById('action-link');
            target.href = event.detail.url;
            target.click();
        });
        window.addEventListener('initiateDelete', event => {
            if (!confirm(`Are you sure to delete "${event.detail.title}"? This cannot be undone`)) {
                return;
            }

            let target = document.getElementById('delete-form');
            target.action = event.detail.action;
            target.submit();
        });
    </script>
@endpush

@section('content')
    <div class="card card-body">
        <div>
            <a class="btn btn-primary" href="{{ route('admin.signals.create') }}">
                Add Signal
            </a>
        </div>
        <div class="my-3">
            <a href="" target="_blank" id="action-link" style="display: none"></a>
            <form method="post" id="delete-form" style="display: none">@csrf @method('delete')</form>
            <livewire:admin.signal-table/>
        </div>
    </div>
@endsection
