@extends('layouts.app')

@section('content')

<div class="w-full px-16">
    <div class="w-full flex space-x-8 border-b shadow-b-md mb-4">
        <div id="product" class="w-auto flex items-center justify-between cursor-pointer font-semibold text-red-300 border-b-2 border-red-400 py-2.5">
            <span>Produk</span>
        </div>
        <div id="category" class="w-auto flex items-center justify-between cursor-pointer font-semibold text-slate-400 hover:text-red-300 hover:border-b-2 hover:border-red-400 py-2.5">
            <span>Kategori</span>
        </div>
    </div>

    {{-- tambah product --}}
    <div id="btn-produk" class="w-full flex justify-end mt-4 mb-4">
        <a href="{{ route('admin.product.create') }}">
            <div class="bg-red-300 text-white px-4 py-2">
                Tambah Produk
            </div>
        </a>
    </div>

    {{-- daftar produk --}}
    <table class="w-full text-left text-gray-400" id="table-product">
        <thead class="text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Berat Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)    
                <tr class="border-b bg-white">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                        {{ $product->name }}
                    </th>
                    <td class="px-6 py-4">
                        Rp.{{ $product->price }}
                    </td>
                    <td class="px-6 py-4">
                        Keripik
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->detailnya[0]->weight }} gram
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline">Detail</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- tambah product --}}
    <div id="btn-kategori" class="w-full flex justify-end mt-4 mb-4">
        <a href="{{ route('admin.product.create') }}">
            <div class="bg-red-300 text-white px-4 py-2">
                Tambah Kategori
            </div>
        </a>
    </div>

    {{-- daftar kategori --}}
    <table class="w-full text-left text-gray-400 hidden" id="table-category">
        <thead class="text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Varian
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)    
                <tr class="border-b bg-white">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                        {{ $product->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $product->detailnya[0]->weight }} gram
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline">Detail</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

<script src="{{ asset('js/_adp1.js') }}"></script>
@endsection