@component('mail::message')
# Hello

{{ config('app.name') }} here.

Please use the following code to complete your password recovery.

@component('mail::panel')
{{ $code }}
@endcomponent

If you did not request a password recovery at **{{ config('app.name') }}** then you can safely ignore this email.
@endcomponent
