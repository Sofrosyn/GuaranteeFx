@component('mail::message')
# Your payment has been received

Hi {{ $user->first_name }}, your payment has been successfully processed and you have been given access to our exclusive
group. Use the button below to join

@component('mail::button', ['url' => settings('membership_link')])
Join Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
