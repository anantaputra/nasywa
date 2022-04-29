@extends('layouts.app')

@section('content')

<div class="w-full flex px-16 mt-4 mb-4">

    @include('partials.user-sidebar')

    <div class="w-3/4 bg-red-50 rounded-md shadow-md px-8 pb-8">

        <div class="w-full border-b py-4 text-lg font-bold">
            Verifikasi Email
        </div>

        <div class="p-4">
            <div class="bg-white w-full py-6 px-8 rounded-md" id="email-notify">
                <p class="mt-2">
                    Untuk kemudahan dan kenyamanan anda berbelanja di Nasywa, kami telah mengirim email verifikasi ke email anda. Silahkan cek email anda untuk melakukan verifikasi.
                </p>
                <p class="mt-2">
                    Apabila anda belum menerima email verifikasi, silahkan klik tombol dibawah ini untuk mengirim ulang email verifikasi.
                </p>
                <button class="bg-red-300 rounded-xl p-4 text-white font-semibold hover:bg-red-400 duration-300 mt-4">
                    <a href="{{ route('user.email-verify') }}">Kirim Ulang Verifikasi</a>
                </button>
            </div>
        </div>
        
    </div>
    
</div>    

@endsection