<div class="card card-body">
    <h3>Welcome to {{ config('app.name') }} for employers</h3>
    @if(!session('employer_setup.just_registered'))
        <h6>You have not posted any jobs from this account before, let's get you started.</h6>
    @else
        <h5>Let's Get Started</h5>
    @endif
</div>

<div class="card card-body">
    <x-input.text name="company_name_for_this_job" label="Company Name For This Job" wire:model.defer="company_name_for_this_job"/>

    <x-input.select name="role" label="What is your role in the hiring process?"
                    wire:model="role">
        <x-slot name="options">
            @foreach($roles as $_role)
                <option>{{ $_role }}</option>
            @endforeach
        </x-slot>
    </x-input.select>

    @if($role == \App\Enums\HiringProcessRolesEnum::OTHER)
        <x-input.text name="other_role" placeholder="Your Role" wire:model.lazy="other_role" label="Require CV?"/>
    @endif

    <x-input.text name="job_title" label="Job Title" wire:model.defer="job_title"/>

    <x-input.text name="location" label="Location" wire:model.defer="location" placeholder="Eg City"/>

    <x-input.switch name="remote_friendly" label="Require CV?" label="Can this job be performed out of office (remotely)?"
                    wire:model="remote_friendly"/>

    <x-input.select name="country_id" label="Country" wire:model.defer="country_id" >
        <x-slot name="options">
            @foreach($countries as $_country)
                <option value="{{ $_country->id }}">{{ $_country->name }}</option>
            @endforeach
        </x-slot>
    </x-input.select>

    <div class="row mb-3">
        <label for="hires" class="col-12 col-form-label">Number of Hires</label>
        <div class="col-md-4">
            <input type="number" min="1" class="form-control" id="hires" wire:model.defer="number_of_hires">
        </div>
        @error('number_of_hires')<span class="text-danger d-block col-12">{{ $message }}</span>@endif
    </div>
</div>
