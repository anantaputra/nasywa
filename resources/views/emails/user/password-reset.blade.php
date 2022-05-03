@component('mail::message')
## Halo {{ $notifiable->firstname }},
Silahkan gunakan link dibawah ini untuk mereset password Anda.

@component('mail::button', ['url' => $url])
Reset Password
@endcomponent

Hormat Kami,<br>
{{ config('app.name') }}
@endcomponent
