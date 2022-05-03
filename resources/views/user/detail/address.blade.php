@extends('layouts.app')

@section('content')

<div class="flex px-16 mt-4 mb-4">

    @include('partials.user-sidebar')

    <div class="w-3/4 bg-red-50 rounded-md shadow-md px-8 pb-2">
        
        <div class="w-full border-b py-4 text-lg font-bold flex justify-between items-center">
            <span>Alamat saya</span>

            <div class="border border-red-400 rounded-md text-white py-2.5 px-4 text-center font-normal bg-red-400 cursor-pointer" data-modal-toggle="defaultModal">Tambah Alamat Baru</div>
        </div>
    @for ($i = 0; $i < 3; $i++)        
    <div class="w-full flex px-4 py-8 border-t space-x-6">
        <div class="w-1/5 font-light text-gray-600">
            <div class="flex justify-end">
                Nama
            </div>
            <div class="flex justify-end">
                Telepon
            </div>
            <div class="flex justify-end">
                Alamat
            </div>
        </div>
        <div class="w-3/5 font-light">
            <div class="font-semibold">
                Nama kamu
            </div>
            <div>
                (+62) 812-345-6789
            </div>
            <div>
                Kuwangan, Cawan, Jatinom
            </div>
        </div>
        <div class="w-1/5 font-light">
            <div class="flex space-x-10 justify-end mb-4">
                <div class="flex justify-end">
                    Edit
                </div>
                <div class="flex justify-end">
                    Hapus
                </div>
            </div>
            <div class="border py-1.5 px-4 text-center text-sm font-normal cursor-pointer hover:bg-gray-200">Atur sebagai utama</div>
        </div>
    </div>
    @endfor

    </div>

</div>

<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white shadow">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-5 border-b">
                <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl">
                    Alamat Baru
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="defaultModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
           {{-- form tambah alamat --}}
            <form action="" method="post" class="w-full bg-white border px-2">
                <div class="flex flex-wrap p-5">
                    <div class="w-full flex px-3 space-x-4 mb-4">
                        <input type="text" name="name" id="name" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nama">
                        <input type="text" name="phone" id="phone" class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nomor Telepon">
                    </div>
                    <div class="w-full flex space-x-4 px-3 mb-4">
                        <div class="w-full">
                            <select id="province" onchange="showCities()" class="appearence-none border border-gray-200 text-gray-700  leading-tight focus:outline-none focus:shadow-outline rounded block w-full px-3 py-2">
                                <option value="0" selected disabled>--Pilih Provinsi--</option>
                                
                            </select>
                        </div>
                        <div class="w-full">
                            <select disabled id="city" class="appearence-none border border-gray-200 text-gray-700  leading-tight focus:outline-none focus:shadow-outline rounded block w-full px-3 py-2">
                                <option selected disabled>--Pilih Kota--</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full px-3 mb-4">
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-700 rounded border border-gray-200 " placeholder="Nama Jalan, Gedung, No. Rumah"></textarea>
                    </div>
                    <div class="w-full px-3 mb-4">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    

@endsection