@extends('layouts.app')

@section('content')

<div class="w-full px-16">
    <div class="font-semibold text-3xl mb-2">Edit Profil Nasywa</div>
    <div class="font-semibold text-md text-gray-300 mb-8">Update kontak Nasywa atau ubah tampilan homepage</div>
    <div class="w-full flex space-x-8 border-b shadow-b-md mb-4">
        <div id="Btncontact" class="w-auto flex items-center justify-between cursor-pointer font-semibold text-red-300 border-b-2 border-red-400 py-2.5">
            <span>Kontak</span>
        </div>
        <div id="Btnhomepage" class="w-auto flex items-center justify-between cursor-pointer font-semibold text-slate-400 hover:text-red-300 hover:border-b-2 hover:border-red-400 py-2.5">
            <span>Homepage</span>
        </div>
    </div>
    <div>
    {{-- form kontak --}}
    <form action="" method="post" id="form-contact">
        <div class="grid grid-cols-2 gap-12">
            <div class="space-y-6">
                <p class="text-xl font-semibold">Informasi</p>
                <div class="flex flex-col space-y-2">
                    <label for="alamat" class="text-lg font-semibold text-gray-600">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Alamat">
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="telepon" class="text-lg font-semibold text-gray-600">No Telp</label>
                    <input type="text" name="telepon" id="telepon" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="No Telp">
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="price" class="text-lg font-semibold text-gray-600">Email</label>
                    <input type="email" name="price" id="price" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Email">
                </div>
            </div>
            <div class="space-y-6">
                <p class="text-xl font-semibold">Sosial Media</p>
                <div class="flex flex-col space-y-2">
                    <label for="alamat" class="text-lg font-semibold text-gray-600">Facebook</label>
                    <input type="text" name="alamat" id="alamat" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Alamat">
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="telepon" class="text-lg font-semibold text-gray-600">Twitter</label>
                    <input type="text" name="telepon" id="telepon" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="No Telp">
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="price" class="text-lg font-semibold text-gray-600">Instagram</label>
                    <input type="email" name="price" id="price" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Email">
                </div>
            </div>
                <div class="inline-flex space-x-10">
                    <button class="bg-red-300 text-white font-medium rounded py-2.5 px-8">Simpan</button>
                </div>
            </div>
        </div>
    </form>
    {{-- form homepage --}}
    <form action="" method="post" class="hidden" id="form-homepage">
        <div class="grid grid-cols-2 gap-12">
            <div class="space-y-6">
                <div class="flex flex-col space-y-2">
                    <label for="slogan" class="text-lg font-semibold text-gray-600">Slogan</label>
                    <input type="text" name="slogan" id="slogan" class="w-full px-4 py-2.5 text-sm border border-gray-400 rounded-md" placeholder="Slogan">
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="foto" class="text-lg font-semibold text-gray-600">Foto</label>
                    <div class="w-56 h-56 border border-dashed border-gray-300 rounded">
                        <div class="h-full flex items-center justify-center">
                            <div>
                                <div class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="inline-flex">
                                    <center>
                                        <div class="text-xs text-gray-500">
                                            Drop your image here, or select <span class="text-blue-500">click to browse</span>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inline-flex space-x-10">
                    <button class="bg-red-300 text-white font-medium rounded py-2.5 px-8">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
    
<script>
    let kontak = document.getElementById('form-contact');
    let homepage = document.getElementById('form-homepage');
    let kontak_btn = document.getElementById('Btncontact');
    let homepage_btn = document.getElementById('Btnhomepage');

    kontak_btn.addEventListener('click', function(){
        kontak_btn.classList.add('text-red-300', 'border-b-2', 'border-red-400');
        kontak_btn.classList.remove('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
        homepage_btn.classList.remove('text-red-300', 'border-b-2', 'border-red-400');
        homepage_btn.classList.add('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
        kontak.classList.remove('hidden');
        homepage.classList.add('hidden');
    });

    homepage_btn.addEventListener('click', function(){
        kontak_btn.classList.remove('text-red-300', 'border-b-2', 'border-red-400');
        kontak_btn.classList.add('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
        homepage_btn.classList.add('text-red-300', 'border-b-2', 'border-red-400');
        homepage_btn.classList.remove('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
        homepage.classList.remove('hidden');
        kontak.classList.add('hidden');
    });

</script>
@endsection