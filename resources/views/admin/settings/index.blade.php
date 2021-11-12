@extends('layouts.admiria.master', ['title' => 'Settings'])

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="post">
                @csrf
                <x-input.text name="membership_link" type="url" label="WhatsApp Link (sent to users after payment confirmation)" :value="settings('membership_link')"/>

                <x-input.text name="registration_fee" label="Registration Fee (USD)"  type="number" :value="settings('registration_fee')"/>

                <x-input.switch name="accept_registration" label="Accept New Registrations?" :pre-checked="settings('accept_registration')"/>

                <x-input.loadable-button label="Sibmit"  class="btn-primary" type="submit"/>
            </form>
        </div>
    </div>
@endsection
