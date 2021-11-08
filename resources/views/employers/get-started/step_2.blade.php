<div class="card card-body">
    <h3>Company Information</h3>
</div>

<div class="card card-body">
    <x-input.text name="full_name" label="Your Your Name" wire:model.defer="full_name"/>

    <x-input.text name="phone_number" label="Your Phone Number" wire:model.defer="phone_number"/>

    <h5>Company Info</h5>

    <x-input.text name="company_name" label="Company Name" wire:model.defer="company_name">
        <x-slot name="tip">
            For registered companies please ensure that your input here is the same as on your registration certificate
        </x-slot>
    </x-input.text>

    <x-input.select name="company_size" label="How many people work at your company?"
                    wire:model="company_size">
        <x-slot name="options">
            @foreach($company_sizes as $size)
                <option>{{ $size }}</option>
            @endforeach
        </x-slot>
    </x-input.select>

    <x-input.select name="industry_id" label="What is your primary industry?"
                    wire:model="industry_id">
        <x-slot name="options">
            @foreach($industries as $industry)
                <option value="{{ $industry->id }}">{{ $industry->name }}</option>
            @endforeach
        </x-slot>
    </x-input.select>

</div>
