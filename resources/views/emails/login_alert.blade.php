@component('mail::message')
# Login alert

Hello {{ $user->name }},

We detected a successful login to your account. If this wasn't you, change your password immediately.

Regards,<br>{{ config('app.name') }}
@endcomponent