@component('mail::message')
# Welcome, {{ $user->name }}

Thank you for registering at Activity 9. Your account is ready.

If you did not create this account, please contact support.

Thanks,<br>{{ config('app.name') }}
@endcomponent