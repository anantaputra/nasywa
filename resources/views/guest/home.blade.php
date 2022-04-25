@extends('layouts.app')

@section('content')

<div class="px-16">
    <div>
        {{-- slogan goes here --}}
        <div class="px-12 py-2">
            <div class="mt-16 text-9xl">
                Camilan
            </div>
            <div class="ml-20 text-5xl">
                untuk
            </div>
            <div class="-mt-4 text-9xl">
                Semua
            </div>
            <div id="belanja" class="w-40 h-12 mt-8 bg-red-300 rounded-full cursor-pointer flex justify-center items-center space-x-2 hover:bg-red-400 hover:w-48 duration-300">
                <span class="-mt-1 text-white text-xl">Belanja</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    
        {{-- foto produk --}}
        <div class="flex h-96">
            <div class="w-96 h-96 shadow-lg shadow-red-200/50 bg-red-300 rounded-full absolute right-40 top-40">
            
            </div>
            <div class="w-20 h-20 mt-20 bg-red-300 rounded-full absolute right-28 top-96">
            
            </div>
        </div>
    </div>
    
    {{-- Rekomendasi --}}
    <div class="-mt-80">
        <div class="flex justify-center text-xl font-semibold mb-4">Rekomendasi</div>
        <div class="flex justify-center space-x-4">
            @foreach($products as $product)
                <div class="w-72 bg-white border rounded-lg shadow-md mb-4">
                    <a href="{{ $product->id }}">
                        <img class="p-2 rounded-t-xl w-full h-64" src="/img/emiliano-vittoriosi-ONQ86GlHs3c-unsplash.jpg" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $product->name }}</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-3xl font-bold text-gray-900">$599</span>
                            <a href="/cart/{{ $product->id }}" class="text-white bg-red-400 hover:bg-red-300 duration-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
 
    
    @if (Session::has('status'))    
    {{-- email verfiication link is sent --}}
    <div class="w-full h-full fixed top-0 left-0 __bgvrf">
        <div class="w-full h-full bg-gray-900 opacity-75">
        </div>
    </div>
    <div class="w-1/2 bg-white opacity-100 rounded border py-8 px-10 top-56 left-1/4 absolute __mdemvrf">
        <p class="text-xl font-semibold flex justify-center mb-4">Konfirmasi Email</p>
        <p class="mb-2">
            Silahkan periksa email anda, kami telah mengirimkan Email verifikasi ke alamat email anda.
        </p>
        <span>Jika anda belum mendapatkan email <a href="">klik disini</a> untuk mengirimkan ulang email verifikasi.</span>
        <div class="flex justify-center mt-4">
            <button class="bg-red-300 px-8 py-2.5 rounded text-white font-semibold" id="btn-close-modal">
                Tutup    
            </button>
        </div>
    </div>
    <script>
        document.querySelector('#btn-close-modal').addEventListener('click', function(){
            console.log('close-modal');
            document.querySelector('.__bgvrf').classList.add('hidden');
            document.querySelector('.__mdemvrf').classList.add('hidden');
        });
    </script>
    @endif
    
</div>

<script>
    document.getElementById('belanja').addEventListener('click', function(){
            window.location.href = "{{ route('product') }}";
    })
</script>
    
@endsection