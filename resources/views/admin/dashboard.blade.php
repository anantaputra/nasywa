@extends('layouts.app')

@section('content')

<div class="w-full px-16">
    <div class="font-semibold text-3xl mb-2">Hai pemilik Nasywa</div>
    <div class="font-semibold text-md text-gray-300 mb-8">Selamat datang kembali !</div>
    <div class="w-full flex space-x-28 bg-red-200 rounded-3xl shadow-md mt-4 px-8 pt-8 pb-12 mb-16">
        <div class="w-full">
            <div class="flex space-x-4 mb-6">
                <div class="w-10 h-10 bg-white rounded-full flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex items-center text-lg text-gray-500 font-medium">
                    Pengguna
                </div>
            </div>
            <div class="flex justify-between">
                <span class="w-full text-7xl font-semibold">
                    @if (isset($user))
                        {{ $user }}
                    @else
                        0
                    @endif
                </span>
            </div>
        </div>
        <div class="w-full">
            <div class="flex space-x-4 mb-6">
                <div class="w-10 h-10 bg-white rounded-full flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex items-center text-lg text-gray-500 font-medium">
                    Produk
                </div>
            </div>
            <div class="flex justify-between">
                <span class="w-full text-7xl font-semibold">
                    @if (isset($product))
                        {{ $product }}
                    @else
                        0
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="w-full flex space-x-10 mb-8">
        <div class="w-1/2 h-48 bg-gray-100 shadow-md rounded-3xl py-6 px-10">
            <div class="flex space-x-4 mb-6">
                <div class="w-10 h-10 bg-slate-300 rounded-full flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex items-center text-lg text-gray-500 font-medium">
                    Kunjungan
                </div>
            </div>
            <div class="flex space-x-6">
                <span class="w-2/3 text-7xl font-semibold">2000k</span>
                <span class="w-1/3 self-end text-lg text-red-300">per Bulan</span>
            </div>
        </div>
        <div class="w-1/2 h-48 bg-gray-100 shadow-md rounded-3xl py-6 px-10">
            <div class="flex space-x-4 mb-6">
                <div class="w-10 h-10 bg-slate-300 rounded-full flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                      </svg>
                </div>
                <div class="flex items-center text-lg text-gray-500 font-medium">
                    Pesanan
                </div>
            </div>
            <div class="flex space-x-6">
                <span class="w-2/3 text-7xl font-semibold">2000k</span>
                <span class="w-1/3 self-end text-lg text-red-300">per Bulan</span>
            </div>
        </div>
    </div>
    <div class="w-full flex space-x-10">
        <div class="w-1/2 h-48 bg-gray-100 shadow-md rounded-3xl py-6 px-10">
            <div class="flex space-x-4 mb-6">
                <div class="flex items-center text-2xl font-medium">
                    Pendapatan minggu ini
                </div>
            </div>
            <div class="flex space-x-6">
                <span class="w-2/3 text-7xl font-semibold">2000k</span>
                <span class="w-1/3 self-end text-lg text-red-300">per Bulan</span>
            </div>
        </div>
        <div class="w-1/2 h-48 bg-gray-100 shadow-md rounded-3xl py-6 px-10">
            <div class="flex space-x-4 mb-6">
                <div class="flex items-center text-2xl font-medium">
                    Pesanan minggu ini
                </div>
            </div>
            <div class="flex space-x-6">
                <span class="w-2/3 text-7xl font-semibold">2000k</span>
                <span class="w-1/3 self-end text-lg text-red-300">per Bulan</span>
            </div>
        </div>
    </div>
</div>
    
@endsection