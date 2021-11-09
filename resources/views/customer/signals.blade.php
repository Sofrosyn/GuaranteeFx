@extends('layouts.admiria.master', ['title' => 'Signals'])


@push('head')
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet"/>
    @powerGridStyles
@endpush

@push('js')
    @powerGridScripts
    <script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
    <script>
        prepareForSignalVideo();
    </script>
@endpush

@section('content')
    <div class="card">
        <div class="card-body">
            <livewire:customer.signal-table />
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
    </div>
@endsection
