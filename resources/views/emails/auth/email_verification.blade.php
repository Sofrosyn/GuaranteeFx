@component('mail::message')
# Hello

Please use the following code to verify your email address.

@component('mail::panel')
{{ $code }}
@endcomponent

If you did not create an account at <strong>{{ config('app.name') }}</strong> then you can safely ignore this email.

Regards,<br>
{{ config('app.name') }}
@endcomponent
