@component('mail::message')
# Hello

There has been a contact message at {{ config('app.name') }}
from <a href="mailto:{{ $inputs['email'] }}">{{ $inputs['full_name'] }}</a> with the subject *{{ $inputs['subject'] }}*.
Find the message below:
@component('mail::panel')
{{ $inputs['message'] }}
@endcomponent

@endcomponent
