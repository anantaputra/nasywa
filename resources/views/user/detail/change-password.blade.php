@extends('layouts.app')

@section('content')

<div class="w-full flex px-16 mt-4 mb-4">

    @include('partials.user-sidebar')

    <div class="w-3/4 bg-red-50 rounded-md shadow-md px-8 pb-8">

        <div class="w-full flex space-x-4 border-b shadow-b-md mb-4 pt-2">
            <div id="email-verify" class="w-auto flex items-center justify-between cursor-pointer text-lg font-bold py-4">
                <span>Ganti Password</span>
            </div>
        </div>
        
        <form action="" method="post">
            @csrf
            <div class=" -mx-3 mb-6 space-y-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Password Saat ini
                    </label>
                    <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="text" placeholder="Password saat ini">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Password Baru
                    </label>
                    <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Password baru">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Konfirmasi Password Baru
                    </label>
                    <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Konfirmasi password baru">
                </div>
            </div>
            <div class="-mx-3 mb-6">
                <div class="w-full px-3 flex justify-between">
                    <button class="bg-red-300 rounded-xl py-2.5 px-4 text-white font-semibold hover:bg-red-400 duration-300 mt-4">
                        <a href="">Simpan</a>
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>
    
@endsection