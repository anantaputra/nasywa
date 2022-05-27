@extends('layouts.app')

@section('content')

<div class="w-full px-16">

    <div class="w-auto flex items-center justify-between cursor-pointer text-2xl font-semibold text-red-300">
        <span>Daftar Kategori</span>
    </div>
    @if (Session::has('success'))
    <div class="p-4 mt-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <span class="font-medium">{{ session()->get('success') }}</span>
    </div>
    @endif

    {{-- tambah kategori --}}
    <div class="w-full flex justify-end mt-4 mb-4">
        <a href="{{ route('admin.category.add') }}">
            <div class="bg-red-300 text-white px-4 py-2">
                Tambah Kategori
            </div>
        </a>
    </div>

    {{-- daftar kategori --}}
    <table class="w-full text-left text-gray-400">
        <thead class="text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Varian
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Detail</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)    
                <tr class="border-b bg-white">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                        {{ $category->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ App\Http\Controllers\Admin\CategoryController::getTotalVariant($category->id) }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.category.detail', ['id' => $category->name]) }}" class="font-medium text-blue-600 hover:underline">Detail</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.category.edit', ['id' => $category->name]) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
    
@endsection