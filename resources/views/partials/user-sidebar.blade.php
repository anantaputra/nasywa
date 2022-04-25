<div class="w-1/4 py-4 space-y-8">
    <div class="w-11/12 flex items-center space-x-4 border-b pt-2 pb-4">
        <img class="w-14 h-14 rounded-full" src="../../img/neonbrand-SDprf7W3NUc-unsplash.jpg" alt="" srcset="">
        <div>
           <div class="font-semibold">ananta</div> 
           <div class="flex text-sm font-medium text-gray-500 cursor-pointer __editP">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
                <span>Edit Profil</span>
           </div>
        </div>
    </div>
    <div class="space-y-2 font-semibold">
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
            </svg>
            <span>Akun saya</span>
        </div>
        <div class="px-8">
            <ul class="py-1 text-sm font-normal" aria-labelledby="dropdownDefault">
                <li>
                  <a href="#" class="block py-2 px-4 hover:bg-gray-100 {{ Request::is('user/account/profile') ? 'text-red-400' : '' }}">Profil</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-4 hover:bg-gray-100 {{ Request::is('user/account/address') ? 'text-red-400' : '' }}">Alamat</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-4 hover:bg-gray-100 {{ Request::is('user/account/password') ? 'text-red-400' : '' }}">Ganti Password</a>
                </li>
              </ul>
        </div>
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
            </svg>
            <span>Pesanan saya</span>
        </div>
    </div>
</div>