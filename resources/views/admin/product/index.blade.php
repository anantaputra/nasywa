@extends('layouts.app')

@section('content')

<div class="w-full px-16">
    <div class="w-auto flex items-center justify-between cursor-pointer text-2xl font-semibold text-red-300">
        <span>Daftar Produk</span>
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

</div>

@endsection