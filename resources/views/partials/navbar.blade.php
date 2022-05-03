<div class="min-w-full flex justify-beetwen p-4 space-x-20 px-16 {{ Request::is('checkout') ? '' : ''}} {{ Request::is('cart') ? 'space-x-48' : '' }} {{ Request::is('user/account/..') ? 'space-x-32' : '' }} {{ Request::is('login') || Request::is('register') ? 'hidden' : '' }}">

    <div class="w-1/2 flex {{ Request::is('checkout') ? 'w-full' : ''}}">
        <span class="logo cursor-pointer"><a href="/"> Nasywa </a></span>
        
        {{-- title cart --}}
        <div class="flex p-4 text-3xl text-red-300 ml-2 {{ Request::is('checkout') || Request::is('cart') ? '' : 'hidden' }}"> 
            <div class="w-px h-10 bg-red-300 mr-4"></div>
            @if (Request::is('checkout'))
                <span class="text-red-300">Checkout</span>
            @else
                <span>Keranjang Belanja</span>
            @endif
        </div>

    </div>

    {{-- menu item --}}
    <div class="w-1/3 menu-item mt-6 {{ Request::is('checkout') || Request::is('cart') || Request::is('user/account/..') ? 'hidden' : '' }}">
        <ul class="flex justify-center">
            {{-- <li class="mr-16">
                <a href="{{ route('home') }}" class="block text-gray-600 hover:text-red-400 duration-300 {{ Request::is('/') ? 'text-red-400' : '' }}">Home</a>
                <div class="flex justify-center {{ !Request::is('/') ? 'hidden' : '' }}">
                    <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                </div> --}}
            </li>
            <li class="mr-16">
                <a href="{{ route('product') }}" class="text-gray-600 hover:text-red-400 duration-300 {{ Request::is('product') ? 'text-red-400' : '' }}">Produk</a>
                <div class="flex justify-center {{ !Request::is('product') ? 'hidden' : '' }}">
                    <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                </div>
            </li>
            <li class="mr-16">
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-red-400 duration-300 {{ Request::is('contact') ? 'text-red-400' : '' }}">Kontak</a>
                <div class="flex justify-center {{ !Request::is('contact') ? 'hidden' : '' }}">
                    <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                </div>
            </li>
            <li>
                <a href="#" class="text-gray-600 hover:text-red-400 duration-300 {{ Request::is('help') ? 'text-red-400' : '' }}">Bantuan</a>
                <div class="flex justify-center {{ !Request::is('help') ? 'hidden' : '' }}">
                    <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                </div>
            </li>
        </ul>
    </div>

    {{-- search --}}
    <div class="w-1/3 menu-item mt-3 {{ Request::is('checkout') ? 'hidden' : '' }} {{ Request::is('user/account/..') ? 'w-full' : '' }}">
        <div class="relative">
            <input type="text" class="w-full h-10 pl-10 p-2 pr-12 bg-gray-200 shadow-sm border-0 outline-none rounded-full hover:bg-white hover:border-white hover:ring-2 hover:ring-red-200 duration-500 focus:bg-white focus:ring focus:ring-red-300 focus:border-red-300" placeholder="Cari">
            <div class="absolute top-3 bottom-0 left-4">
                <svg class="fill-current text-gray-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
            </div>
            @if (!Request::is('cart') && !Request::is('checkout') )
                
                <div class="w-px h-6 absolute top-2 bottom-0 right-10 bg-black"></div>
                <div class="absolute top-2 bottom-0 right-3" onclick="cart()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                    </svg>
                    @if (auth()->user() && $cart > 0)
                        <div class="w-6 h-6 bg-red-400 border border-red-200 rounded-full absolute pt-1 -top-4 left-3 {{ !isset($cart) ? 'hidden' : '' }}">
                            <div class="text-white text-xs flex justify-center" id="counterCart">{{ $cart }}</div>
                        </div>
                    @endif
                </div>

            @endif
        </div>
    </div>

    @auth

    <div class="flex items-center md:order-2">
        <button type="button" class="w-10 h-10 flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
            <span class="sr-only">Open user menu</span>
            <img class="w-10 h-10 rounded-full" src="https://source.unsplash.com/400x300?man" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="dropdown">
            <div class="py-3 px-4">
                <span class="block text-sm text-gray-900">{{ auth()->user()->firstname }}</span>
                <span class="block text-sm font-medium text-gray-500 truncate">{{ auth()->user()->email }}</span>
            </div>
            <ul class="py-1" aria-labelledby="dropdown">
                <li>
                    <a href="{{ route('user.profile') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Akun saya</a>
                </li>
                <li>
                    <a href="{{ route('user.purchase') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Pesanan saya</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Keluar</a>
                </li>
            </ul>
        </div>
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>

    @else
        
        <div class="flex space-x-2">
            {{-- login --}}
            <div class="menu-item mt-3">
                <a href="{{ route('login') }}">
                    <button class="w-24 border p-2 rounded-full hover:border-red-300 duration-500">Masuk</button>
                </a>
            </div>
        
            {{-- register --}}
            <div class="menu-item mt-3">
                <a href="{{ route('register') }}">
                    <button class="w-24 border p-2 bg-red-300 text-white rounded-full hover:border-red-300 hover:bg-red-400 duration-500">Daftar</button>
                </a>
            </div>
        </div>

    @endauth

</div>