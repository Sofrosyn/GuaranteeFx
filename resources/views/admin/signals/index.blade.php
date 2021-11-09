@extends('layouts.admiria.master', ['title' => 'Signals'])

@push('head')
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet"/>
    @powerGridStyles
@endpush

@push('js')
    @powerGridScripts
    <script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
    <script>
        window.addEventListener('goToVideo', event => {
            let player = videojs('signal-video-player');
            player.src({type: event.detail.type, src:event.detail.url});

            let modelHolder = document.getElementById('signal-video-modal');
            let modal = bootstrap.Modal.getOrCreateInstance(modelHolder);
            modal.show();

            modelHolder.addEventListener('hide.bs.modal', () => {
                player.pause();
            })
            //
            // let target = document.getElementById('action-link');
            // target.href = event.detail.url;
            // target.click();
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
            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                    data-bs-target="#signalModal">Large modal
            </button>
            <x-admin.utils.modal id="signal-video-modal">
                <x-slot name="content">
                    <video
                        id="signal-video-player"
                        class="video-js"
                        controls
                        preload="auto"
                        width="640"
                        height="264"
                        data-setup="{}"
                    >
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                            >
                        </p>
                    </video>
                </x-slot>
            </x-admin.utils.modal>
        </div>
        <div class="my-3">
            <a href="" target="_blank" id="action-link" style="display: none"></a>
            <form method="post" id="delete-form" style="display: none">@csrf @method('delete')</form>
            <livewire:admin.signal-table/>
        </div>
    </div>
@endsection
