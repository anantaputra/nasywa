@extends('layouts.app')

@section('content')

<div class="w-full px-16">

    <div class="w-auto flex items-center justify-between cursor-pointer text-2xl font-semibold text-red-300">
        <span>Varian dalam {{ $category->name }}</span>
    </div>

    {{-- tambah kategori --}}
    <div class="w-full flex justify-end mt-4 mb-4">
        <a href="{{ route('admin.category.addVariant', ['id' => $category]) }}">
            <div class="bg-red-300 text-white px-4 py-2">
                Tambah Varian
            </div>
        </a>
    </div>

    @if (count($variants) > 0)
    
        {{-- daftar kategori --}}
        <table class="w-full text-left text-gray-400">
            <thead class="text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama varian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Hapus</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($variants as $variant)    
                    <tr class="border-b bg-white">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                            {{ $variant->name }}
                        </th>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    @else
        
        <div class="w-full flex justify-center mt-40">
            <div class="text-xl text-red-300 px-4 py-2">
                Belum ada varian dalam kategori ini
            </div>
        </div>

    @endif

</div>

@endsection