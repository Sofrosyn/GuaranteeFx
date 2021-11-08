<div>
    @include('employers.get-started.step_' . $step)

   {{-- <div class="card card-body">
        <pre>
            {!! json_encode($errors->all(), JSON_PRETTY_PRINT) !!}
        </pre>
    </div>--}}

    <div class="card card-footer my-4 d-flex justify-content-between flex-row">
        @if($step > 1)
            <x-input.loadable-button class="btn btn-outline-primary" type="butoon"
                 wire:click="$set('step', {{ $step-- }})" label="Back"/>
        @endif

        <x-input.loadable-button class="btn btn-primary" type="submit" label="Continue" wire:click="submit"/>
    </div>
</div>

@push('head')
    <link rel="stylesheet" href="{{ asset('vendor/dashboard/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    <style>
        .form-control {
            min-height: calc(1.5em + (1rem + 2px));
            padding: 0.5rem 1rem;
            font-size: 1.171875rem;
            border-radius: 0.4rem;
        }
    </style>
@endpush

@push('js')
    <script src="{{ asset('vendor/dashboard/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/ckEditor/build/ckeditor.js') }}"></script>
    <script>
        function dp() {
            $('#application_deadline').datepicker();
            $('#application_deadline')
                .on('changeDate',
                    () =>  @this.set('application_deadline', $('#application_deadline').datepicker('getFormattedDate'))
                );
        }

        window.addEventListener('updatedApplicationAssistant', (event) => {
            event.detail.assist && createApplicationAssistSlider((data) => @this.set('close_applications_after', data.from_value));
        });

        window.addEventListener('updatedHasApplicationDeadline', () => dp());

        window.addEventListener('updatedStep', function (event) {
            switch (event.detail.step) {
                case 3:
                    console.log(event.detail.assist);
                    event.detail.assist && createApplicationAssistSlider((data) => @this.set('close_applications_after', data.from_value));

                    createCkEditorInstance('.job-description').then(editor => {
                        editor.editing.view.document
                            .on('change:isFocused', (evt, data, isFocused) => (!isFocused && @this.set('description', editor.getData())));
                    });

                    dp();
                    break;
            };
        });
    </script>
@endpush
