@extends('layouts.app')

@section('content')

<div class="w-full px-16">
    
    <div class="text-red-300 text-2xl mb-8 -mt-4">
        <span class="font-bold">Tambah Produk</span>
    </div>

    {{-- form produk --}}
    <form action="" method="post" id="form-product">
        <div class="grid grid-cols-2 gap-12">
            <div class="space-y-6">
                <div class="flex flex-col space-y-2">
                    <label for="name" class="text-lg font-semibold text-gray-600">Nama Produk</label>
                    <input type="text" name="name" id="name" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Nama Produk">
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="price" class="text-lg font-semibold text-gray-600">Harga Produk</label>
                    <input type="text" name="price" id="price" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Harga Produk">
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="category" class="text-lg font-semibold text-gray-600">Kategori Produk</label>
                    <select name="category" id="category" onchange="showVarian()" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md">
                        <option value="0" selected disabled>Pilih Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="description" class="text-lg font-semibold text-gray-600">Deskripsi Produk</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md"></textarea>
                </div>
            </div>
            <div class="w-full space-y-6">
                <div class="flex flex-col space-y-2">
                    <label for="image" class="text-lg font-semibold text-gray-600">Gambar Produk</label>
                    <div class="w-full inline-flex gap-4">
                        <div class="w-full h-44 border border-dashed rounded cursor-pointer">
                            <input type="file" name="gambar1" id="gambar1" class="hidden">
                            <label for="gambar1" class="cursor-pointer">
                                    <div class="h-full flex items-center justify-center">
                                        <div>
                                            <div class="flex justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div class="inline-flex text-center">
                                                <div class="text-xs text-gray-500">
                                                    Drop your image here, or select <span class="text-blue-500">click to browse</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </label>
                        </div>
                        <div class="w-full h-44 cursor-pointer border border-dashed rounded">
                            <div class="h-full flex items-center justify-center">
                                <div>
                                    <div class="flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="inline-flex text-center">
                                        <div class="text-xs text-gray-500">
                                            Drop your image here, or select <span class="text-blue-500">click to browse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-3/4 h-44 space-y-4">
                            <div class="w-full h-20 cursor-pointer border border-dashed rounded">
                                <div class="h-full flex items-center justify-center">
                                    <div>
                                        <div class="flex justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="inline-flex text-center">
                                            <div class="text-[8px] px-4 text-gray-500">
                                                Drop your image here, or select <span class="text-blue-500">click to browse</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-20 cursor-pointer border border-dashed rounded">
                                <div class="h-full flex items-center justify-center">
                                    <div>
                                        <div class="flex justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="inline-flex text-center">
                                            <div class="text-[8px] px-4 text-gray-500">
                                                Drop your image here, or select <span class="text-blue-500">click to browse</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="text-gray-400 text-sm">Anda perlu menambahkan gambar produk minimal 4. Perhatikan kualitas gambar yang anda unggah, gunakanlah warna background yang standar pada gambar. Gambar harus memiliki ukuran yang sama.</span>
                </div>
                <div class="flex flex-col space-y-2 pt-1">
                    <label for="image" class="text-lg font-semibold text-gray-600">Berat Produk</label>
                    <div class="w-1/2 flex">
                        <input type="text" id="website-admin" class="rounded-none rounded-l-lg border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 px-4 py-2.5" placeholder="1000">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-r-md border border-r-0 border-gray-300">
                          gram
                        </span>
                    </div>
                </div>
                <div class="flex flex-col space-y-2 pt-1">
                    <label for="image" class="text-lg font-semibold text-gray-600" id="variasi-title">Variasi Produk</label>
                    <div class="w-full grid grid-cols-3" id="varian-Produk">
                        
                    </div>
                </div>
                <div class="inline-flex space-x-10">
                    <button type="submit" class="bg-red-300 text-white font-medium rounded py-2.5 px-8">Tambah Produk</button>
                    <button class="border-2 border-red-300 text-red-300 font-medium rounded py-2.5 px-8">Batal</button>
                </div>
            </div>
        </div>
    </form>

</div>
    
<script>
    document.getElementById('variasi-title').style.display = 'none';
    function showVarian()
    {
        var category = document.getElementById('category').value;
        if (category != 0){
            $.ajax({
                url: '{{ route("admin.getVariant") }}',
                type: 'GET',
                data: {
                    category: category
                }, 
                success: function(data){
                    document.getElementById('variasi-title').style.display = 'block';
                    $('#varian-Produk').empty();
                    $.each(data, function(index, value){
                        $('#varian-Produk').append('<div class="flex items-center mb-4">\
                            <input id="checkbox-'+index+'" aria-describedby="checkbox-'+index+'" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">\
                            <label for="checkbox-'+index+'" class="ml-3 text-sm font-medium text-gray-900">'+value.name+'</label>\
                        </div>');
                    })
                }
            })
        }
    }
</script>

@endsection