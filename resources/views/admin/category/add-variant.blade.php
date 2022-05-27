@extends('layouts.app')

@section('content')

<div class="w-full px-16">
    <div class="w-auto flex items-center justify-between cursor-pointer text-2xl font-semibold text-red-300 mb-8 -mt-4">
        <span>Tambah varian dalam {{ $category->name }}</span>
    </div>

    <form action="{{ route('admin.category.storeVariant') }}" method="post">
        @csrf
        <input type="hidden" name="category_id" value="{{ $category->id }}">
        <div class="grid grid-cols-2 gap-12">
            <div class="space-y-6">
                <div class="flex flex-col space-y-2">
                    <label for="name" class="text-lg font-semibold text-gray-600">Nama Varian</label>
                    <input type="text" name="name" id="name" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Nama Produk">
                </div>
                <div class="inline-flex space-x-10">
                    <button type="submit" class="bg-red-300 text-white font-medium rounded py-2.5 px-8">Tambah</button>
                    <a class="border-2 border-red-300 text-red-300 font-medium rounded py-2.5 px-8" href="{{ route('admin.category.detail', ['id' => $category->name]) }}">Batal</a>
                </div>
            </div>
        </div>
    </form>
</div>
    
@endsection