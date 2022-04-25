<div class="min-w-full flex justify-beetwen p-4 space-x-20 px-16 {{ Request::is('checkout') ? '' : ''}} {{ Request::is('cart') ? 'space-x-48' : '' }} {{ Request::is('user/account/..') ? 'space-x-32' : '' }} {{ Request::is('login') || Request::is('register') ? 'hidden' : '' }}">

    <div class="w-1/3 flex {{ Request::is('checkout') ? 'w-full' : ''}}">
        <span class="logo cursor-pointer"><a href="/"> Nasywa </a></span>
        
        {{-- title cart --}}
        <div class="flex p-4 text-3xl text-red-300 ml-2 {{ Request::is('checkout') || Request::is('cart') ? '' : 'hidden' }}"> 
            <div class="w-px h-10 bg-red-300 mr-4"></div>
            @if (Request::is('checkout'))
                <span class="text-red-300">Checkout</span>
            @else
                <span>Shopping Cart</span>
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
                    @if (auth()->user() && count($cart) > 0)
                        <div class="w-6 h-6 bg-red-400 border border-red-200 rounded-full absolute pt-1 -top-4 left-3 {{ !isset($cart) ? 'hidden' : '' }}">
                            <div class="text-white text-xs flex justify-center" id="counterCart">{{ count($cart) }}</div>
                        </div>
                    @endif
                </div>

            @endif
        </div>
    </div>

    @auth

        {{-- profil --}}
        <div class="flex justify-end">
            <div class="menu-item">
                <div class="relative flex items-center">
                    <div class="w-14 h-14 rounded-full overflow-hidden border-2 border-white cursor-pointer" onclick="dropdownMenu()">
                        <img src="/img/neonbrand-SDprf7W3NUc-unsplash.jpg" alt="avatar" class="w-full h-full">
                    </div>
                </div>
                <div class="w-32 h-auto bg-red-100 absolute right-16" id="account">
                    <div class="w-full flex items-center justify-between border-b cursor-pointer px-2 space-x-2 pt-2 pb-1 hover:bg-red-50">
                        <span>Profil</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <form action="{{ route('logout') }}" method="post" id="logout-form">
                        @csrf
                        <button class="w-full" type="submit">
                            <div class="w-full flex items-center justify-between cursor-pointer px-2 space-x-2 pt-1 pb-2 hover:bg-red-50">
                                <span>Keluar</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
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