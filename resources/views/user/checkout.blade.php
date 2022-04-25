@extends('layouts.app')

@section('content')

<div class="w-full px-16 py-4 mt-4 mb-40 space-y-8">

    <div class="w-full rounded shadow-md border-t-4 border-red-200 py-8 px-8">
        <div class="w-full flex text-red-300 font-semibold text-lg mb-4">
            Alamat Pengiriman
        </div>
        <div class="w-full flex">
            <div class="w-1/5">
                Ananta Putra Starna (+62) 85702339724
            </div>
            <div class="w-4/5">
                Jl. Raya Cikarang No.1, Cikarang Utara, Cikarang, Bekasi, Jawa Barat, Indonesia
            </div>
            <div class="">
                <a href="#" class="text-red-300">Ubah</a>
            </div>
        </div>
    </div>

    <div class="w-full rounded shadow-md border-t-2 py-8 px-8">
        <div class="w-full flex justify-between mb-8">
            <span class="w-full text-red-300 font-semibold text-lg">Rincian Pesanan</span>
            <div class="w-1/2 flex space-x-32 text-gray-500">
                <span>Price</span>
                <span>Quantity</span>
            </div>
            <div class="w-1/5 text-gray-500">
                <span>Subtotal Produk</span>
            </div>
        </div>
        <div class="w-full flex justify-between mb-16">
            <div class="w-full flex space-x-4">
                <img class="w-14 h-14" src="../../img/neonbrand-SDprf7W3NUc-unsplash.jpg" alt="">
                <span class="text-red-300 font-semibold text-lg">Rincian Pesanan</span>
            </div>
            <div class="w-1/2 flex space-x-32">
                <span>Rp. 20000</span>
                <span>1</span>
            </div>
            <div class="w-1/5">
                <span>Rp. 20000</span>
            </div>
        </div>
        <div class="w-full flex justify-end space-x-8 border-t border-dashed px-6 pt-4">
            <span>Total Pesanan:</span>
            <span>Rp. 20000</span>
        </div>
    </div>

    <div class="w-full rounded shadow-md border-t-2 py-8 px-8">
        <span class="w-full text-red-300 font-semibold text-lg">Pilih Pengiriman</span>
        <div class="flex space-x-4 mt-4">
            <div class="border px-8 py-4">
                JNE
            </div>
            <div class="border px-8 py-4">
                JNT
            </div>
            <div class="border px-8 py-4">
                Pos Indonesia
            </div>
        </div>
    </div>

    <div class="w-full rounded shadow-md border-t-2 py-8 px-8">
        <span class="w-full text-red-300 font-semibold text-lg">Pilih Metode Pembayaran</span>
    </div>
    
</div>
<div class="w-full bg-white fixed bottom-0 left-0 right-0 px-16">
    <div class="w-full flex justify-end space-x-16 rounded shadow-md border-t-2 py-8 px-8">
        <div class="flex space-x-24">
            <div class="flex space-x-40">
                <span>Biaya Pengiriman</span>
                <span>Subtotal Produk</span>
            </div>
            <span>Total Pesanan</span>
        </div>
        <div class="w-32 mt-10 bg-red-400 flex justify-center">
            <div class="py-2.5 px-4 text-white  cursor-pointer">
                Checkout
            </div>
        </div>
    </div>
</div>
    
@endsection