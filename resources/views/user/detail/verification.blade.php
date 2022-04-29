@extends('layouts.app')

@section('content')

<div class="w-full flex px-16 mt-4 mb-4">

    @include('partials.user-sidebar')

    <div class="w-3/4 bg-red-50 rounded-md shadow-md px-8 pb-8">

        <div class="w-full flex space-x-4 border-b shadow-b-md mb-4 pt-2">
            <div id="email-verify" class="w-auto flex items-center justify-between cursor-pointer font-semibold text-red-300 border-b-2 border-red-400 py-4">
                <span>Verifikasi Email</span>
            </div>
            <div id="phone-verify" class="w-auto flex items-center justify-between cursor-pointer font-semibold text-slate-400 hover:text-red-300 hover:border-b-2 hover:border-red-400 py-4">
                <span>Verifikasi Telepon</span>
            </div>
        </div>

        <div class="p-4">
            <div class="bg-white w-full py-6 px-8 rounded-md" id="email-notify">
                <p class="text-xl">Verifikasi Email</p>
                <p class="mt-2">
                    Untuk memudahkan anda berbelanja di Nasywa, kami telah mengirim email verifikasi ke email anda. Silahkan cek email anda untuk melakukan verifikasi.
                </p>
                <p class="mt-2">
                    Apabila anda belum menerima email verifikasi, silahkan klik tombol dibawah ini untuk mengirim ulang email verifikasi.
                </p>
                <button class="bg-red-300 rounded-xl p-4 text-white font-semibold hover:bg-red-400 duration-300 mt-4">
                    <a href="">Kirim Ulang Verifikasi</a>
                </button>
            </div>
            <div class="bg-white w-full py-6 px-8 rounded-md" id="phone-notify">
                <p class="text-xl">Verifikasi Nomor Telepon</p>
                <p class="mt-2">
                    Anda belum melakukan verifikasi nomor telepon. Silahkan melakukan verifikasi nomor telepon anda.
                </p>
                <form action="" method="post" class="mt-4">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6 ">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tlp">
                                Nomor Telepon
                            </label>
                            <input name="phone" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="tlp" type="text" placeholder="Nomor Telepon">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="kode">
                                Kode Verifikasi
                            </label>
                            <input name="kode" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="kode" type="text" placeholder="Kode Verifikasi">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 flex justify-between">
                            <button class="bg-red-300 rounded-xl py-2.5 px-4 text-white font-semibold hover:bg-red-400 duration-300 mt-4">
                                <a href="">Kirim Kode Verifikasi</a>
                            </button>
                            <button class="bg-red-400 rounded-xl py-2.5 px-4 text-white font-semibold hover:bg-red-300 duration-300 mt-4">
                                <a href="">Verifikasi</a>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
</div>

<script src="{{ asset('js/_usv1.js') }}"></script>
    

@endsection