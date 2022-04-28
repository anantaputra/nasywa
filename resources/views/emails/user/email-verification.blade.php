@component('mail::message')
## Halo {{ $notifiable->firstname }},
# Terima kasih telah bergabung di Nasywa
Untuk membantu kami mengonfirmasi bahwa ini memang Anda, harap verifikasi email Anda.

@component('mail::button', ['url' => $url])
Verifikasi Email
@endcomponent

Hormat Kami,<br>
{{ config('app.name') }}
@endcomponent
