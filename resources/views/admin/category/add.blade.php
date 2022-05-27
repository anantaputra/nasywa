@extends('layouts.app')

@section('content')

<div class="w-full px-16">
    <div class="w-auto flex items-center justify-between cursor-pointer text-2xl font-semibold text-red-300 mb-8 -mt-4">
        <span>{{ $subtitle }}</span>
    </div>

    @if (!isset($category))
        
        {{-- form produk --}}
        <form action="{{ route('admin.category.store') }}" method="post">
            @csrf
            <div class="grid grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="flex flex-col space-y-2">
                        <label for="name" class="text-lg font-semibold text-gray-600">Nama Kategori</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Nama Produk">
                    </div>
                    <div class="inline-flex space-x-10">
                        <button type="submit" class="bg-red-300 text-white font-medium rounded py-2.5 px-8">Simpan</button>
                        <a class="border-2 border-red-300 text-red-300 font-medium rounded py-2.5 px-8" href="{{ route('admin.category') }}">Batal</a>
                    </div>
                </div>
            </div>
        </form>

    @else
        
        {{-- form Edit --}}
        <form action="{{ route('admin.category.update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $category->id }}">
            <div class="grid grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="flex flex-col space-y-2">
                        <label for="name" class="text-lg font-semibold text-gray-600">Nama Kategori</label>
                        <input type="text" name="name" id="name" value="{{ $category->name }}" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Nama Produk">
                    </div>
                    <div class="inline-flex space-x-10">
                        <button type="submit" class="bg-red-300 text-white font-medium rounded py-2.5 px-8">Simpan</button>
                        <a class="border-2 border-red-300 text-red-300 font-medium rounded py-2.5 px-8" href="{{ route('admin.category') }}">Batal</a>
                    </div>
                </div>
            </div>
        </form>

    @endif

</div>
    
@endsection