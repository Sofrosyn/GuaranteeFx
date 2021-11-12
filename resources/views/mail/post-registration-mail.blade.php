@component('mail::message')
# Hello {{ preg_split("/\s/", $user->full_name)[0] }}

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eos hic molestias nulla ratione vel.

@component('mail::button', ['url' => $payment_url])
Make Payment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
