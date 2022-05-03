@extends('layouts.app')

@section('content')

<div class="w-full flex px-16 mt-4 mb-4">

    @include('partials.user-sidebar')

    <div class="w-3/4 bg-red-50 rounded-md shadow-md px-8 pb-8">
        
        <div class="w-full border-b py-4 text-lg font-bold">
            Profil Saya
        </div>

        <div class="flex">

            <form method="POST" action="/user/profile-update" class="w-2/3 mt-8 ">
                @csrf
                <div class="block mb-6">
                    <div class="flex space-x-4 items-center justify-center">
                        <label for="name" class="mb-2 mt-2 text-sm font-medium ">Name</label>
                        <input type="text" name="name" id="name" value="{{ auth()->user()->lastname ? auth()->user()->firstname.' '.auth()->user()->lastname : auth()->user()->firstname }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-5/6 p-2.5 @error('name') is-invalid @enderror" placeholder="name" required="">
                    </div>
                    @error('name')
                        <div class="ml-20 text-sm text-red-500 italic">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex space-x-4 items-center mb-6 justify-center">
                    <label for="email" class="mb-2 mt-2 text-sm font-medium ">Email</label>
                    <div class="w-5/6 flex space-x-2">
                        <?php 
                            $email = auth()->user()->email;
                            $email = explode('@', $email);
                            $dns = $email[1];
                            $length = strlen($email[0]);
                            $email = $email[0];
                            $bin = '';
                            for($i = 3; $i < $length - 2; $i++) {
                                $bin .= '*';
                            }
                            $email = substr($email, 0, 3).$bin.substr($email, $length - 2, $length).'@'.$dns;
                        ?>
                        <span>{{ $email }}</span>
                        @if (auth()->user()->email_verified_at == null)
                            <span><a href="{{ route('user.email-verify') }}" class="text-blue-600 underline">verifikasi email</a></span>
                        @else
                            <span><a href="" class="text-blue-600 underline">ubah</a></span>
                        @endif
                    </div>
                </div>
                <div class="block mb-6">
                    <div class="flex space-x-4 items-center justify-center">
                        <label for="phone" class="mb-2 mt-2 text-sm font-medium ">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ auth()->user()->phone ? auth()->user()->phone : ''}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-5/6 p-2.5 " placeholder="087889911xxx">
                        {{-- verifikasi telp --}}
                        {{-- <div class="w-5/6 flex space-x-2">
                            @if (auth()->user()->phone != null)
                                <?php 
                                    // $phone = auth()->user()->phone;
                                    // $length = strlen($phone);
                                    // $bin = '';
                                    // for($i = 5; $i < $length - 4; $i++) {
                                    //     $bin .= '*';
                                    // }
                                    // $phone = substr($phone, 0, 5).$bin.substr($phone, $length - 4, $length);
                                ?>
                                <span>{{ $phone }}</span>
                                <span><a href="" class="text-blue-600 underline">ubah</a></span>
                            @else
                                <span>Belum ditambahkan</span>
                                <span><a href="" class="text-blue-600 underline">tambahkan</a></span>
                            @endif
                        </div> --}}
                    </div>
                    @error('phone')
                        <div class="ml-20 text-sm text-red-500 italic">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex space-x-4 items-center mb-6 justify-center">
                    <label for="gender" class="mb-2 -mt-2 text-sm font-medium">Gender</label>
                    <div class="w-5/6 flex space-x-4">
                        <div class="flex items-center mb-4">
                            <input id="laki-laki" {{ (auth()->user()->gender == 'laki-laki') ? 'checked' : '' }} type="radio" name="gender" value="laki-laki" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1">
                            <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900">
                              Laki-laki
                            </label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="perempuan" {{ (auth()->user()->gender == 'perempuan') ? 'checked' : '' }} type="radio" name="gender" value="perempuan" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1">
                            <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900">
                              Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="text-white ml-20 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
            </form>
    
            <div class="w-1/3 border-l flex justify-center p-4 mt-4 mb-4">
                <div>
                    <div class="block">
                        <img class="w-40 h-40 rounded-full mb-4" src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="block">
                        <div class="border py-2.5 px-4 text-center">Pilih gambar</div>
                    </div>
                </div>
            </div>

        </div>
    
    </div>

</div>
    
@endsection