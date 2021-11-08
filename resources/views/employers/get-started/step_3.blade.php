<div class="card card-body">
    <h3>Job Information</h3>
</div>

<div class="card card-body">
    <x-input.select name="employment_type" label="Employment Type"
                    wire:model="employment_type">
        <x-slot name="options">
            @foreach($employment_types as $type)
                <option>{{ $type }}</option>
            @endforeach
        </x-slot>
    </x-input.select>

    @if($employment_type == \App\Enums\EmploymentTypeEnum::PART_TIME)
        <x-input.text name="hours_per_week" label="Hour required per week" placeholder="Formats: 20 or 30 - 40"
                      wire:model.lazy="hours_per_week"/>
    @endif

    <h5 class="my-4">Salary</h5>
    <x-input.select name="compensation_type" label="Compensation"
                    wire:model="compensation_type">
        <x-slot name="options">
            @foreach($compensation_types as $type)
                <option>{{ $type }}</option>
            @endforeach
        </x-slot>
    </x-input.select>

    <div class="row">
        @switch($compensation_type)
            @case(\App\Enums\CompensationTypeEnum::RANGE)
            <x-input.text type="number" name="min_compensation"  wire:model="min_compensation" wrapClass="col-md-3"/>
            <div class="col-auto my-auto">to</div>
            <x-input.text type="number" name="max_compensation"  wire:model="max_compensation" wrapClass="col-md-3"/>
            @break
            @case(\App\Enums\CompensationTypeEnum::EXACT)
            <x-input.text type="number" name="exact_compensation"  wire:model="exact_compensation" wrapClass="col-md-3"/>
            @break
            @case(\App\Enums\CompensationTypeEnum::UPTO)
            <x-input.text type="number" name="max_compensation"  wire:model="max_compensation" wrapClass="col-md-3"/>
            @break
        @endswitch

        <x-input.select name="compensation_interval" wrapClass="col-md-3"
                        wire:model="compensation_interval">
            <x-slot name="options">
                @foreach($compensation_intervals as $interval)
                    <option>{{ $interval }}</option>
                @endforeach
            </x-slot>
        </x-input.select>
    </div>

    <h5 class="mb-4 mt-5">Application</h5>
    <x-input.select name="application_method" label="How do you want to receive applications?"
                    wire:model="application_method">
        <x-slot name="options">
            @foreach($application_methods as $method)
                <option>{{ $method }}</option>
            @endforeach
        </x-slot>
    </x-input.select>

    @if($application_method == \App\Enums\JobApplicationMethodEnum::EMAIL)
        <x-input.switch name="require_cv" label="Require CV?" wire:model="require_cv"/>
    @endif

    <x-input.switch name="has_application_deadline" label="Set Application deadline?" wire:model="has_application_deadline"/>

    @if($has_application_deadline)
        <div wire:ignore>
            <x-input.date-picker label="Deadline" name="application_deadline" data-date-default-viewDate="{{ $application_deadline }}"/>
        </div>
    @endif


    <div class="d-flex justify-content-between mt-5">
        <h5 class="">Application Assistant</h5>
        <x-input.switch name="application_assistant" wire:model="application_assistant"/>
    </div>
    <p class="text-muted">
        Cut extra work by closing applications that you are not interested in. We will decline them on your behalf.
    </p>

    @if($application_assistant)
        <h6 class="">Close applications if I don't show interest after:</h6>
        <div wire:ignore class="p-5">
            <input type="text" class="js-range-slider" name="my_range" value="{{ $close_applications_after }}">
        </div>
    @endif

    <h5 class="mb-4 mt-5">
        Job Description
        <x-utils.popover title="Hint" :text="$this->description_hint"/>
    </h5>

    <div wire:ignore>
        <div class="job-description">{!! $description !!}</div>
    </div>
    @error('description')<small class="text-danger">{{ $message }}</small>@enderror
</div>
