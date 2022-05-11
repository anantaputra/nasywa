@extends('layouts.app')

@section('content')

<div class="w-full px-16 mt-4">

    @if (count($items) > 0)

        <div class="w-full flex justify-between py-6 px-16 border-b font-medium text-lg">
            <div class="space-x-6">
                {{-- <input id="checkbox-all" aria-describedby="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300"> --}}
                <span>Produk</span>
            </div>
            <div class="flex justify-between space-x-40">
                <span>Harga</span>
                <span>Jumlah</span>
                <span>&nbsp;</span>
            </div>
        </div>

        @foreach ($items as $item)
                    
            <div class="flex justify-between items-center py-4 px-16 border-b">
                <div class="flex space-x-6 items-center">
                    {{-- <input id="checkbox-{{ $item->id }}" onchange="func({{ $item->id }})" value="{{ $item->id }}" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 "> --}}
                    <img src="/img/neonbrand-SDprf7W3NUc-unsplash.jpg" class="w-20 h-20" alt="" srcset="">
                    <span class="-mt-12">{{ $item->productnya->name }}</span>
                </div>
                <div class="flex justify-between space-x-24">
                    <span id="price-{{ $item->productnya->id }}">{{ $item->productnya->price }}</span>
                    <div class="flex border -mt-2">
                        <div class="bg-red-300 flex items-center p-2 _plus" onclick="plus({{ $item->productnya->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div id="qty-{{ $item->productnya->id }}" class="w-12 flex items-center justify-center __qty">{{ $item->quantity }}</div>
                        <div class="bg-red-300 flex items-center p-2 _minus" onclick="min({{ $item->productnya->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <a href="cart/remove/{{ $item->id }}">Hapus</a>
                </div>
            </div>

            <div class="fixed left-16 right-16 bottom-0 border-t py-6 px-4 flex justify-end space-x-10">
                <div class="text-lg font-semibold">
                    Subtotal
                </div>
                <div class="text-lg font-semibold __sub">
                    {{ $total }}
                </div>
                <a href="{{ route('checkout') }}">
                    <div class="py-2.5 px-4 text-white bg-red-400 cursor-pointer">
                        Checkout
                    </div>
                </a>
            </div>

        @endforeach
    
    @else
    
        <div class="w-full max-h-screen px-16 mt-4">
            <div class="w-full flex justify-center">
                <svg width="900" height="400" viewBox="0 0 900 700" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M360.81 435.744C422.32 473.413 502.341 458.588 546.274 401.383L552.046 393.867C560.633 382.686 570.849 372.855 582.353 364.704L627.517 332.702C688.928 289.187 774.912 316.4 800.107 387.323V387.323C816.222 432.687 801.968 483.282 764.543 513.564L761.003 516.428C744.465 529.809 724.665 538.551 703.634 541.758L592.077 558.765C566.656 562.641 545.075 579.449 535.093 603.148V603.148C518.181 643.299 470.39 660.191 432.004 639.584L385.802 614.782C368.111 605.285 348.344 600.315 328.265 600.315H262.449C243.307 600.315 224.365 596.417 206.778 588.859L185 579.5L157.5 565.003V565.003C118.437 542.124 117.4 486.028 155.59 461.72L166.608 454.707C178.574 447.09 187.929 435.828 193.291 422.697V422.697C209.434 383.169 256.94 366.547 293.902 387.92L297.5 390L340 423L360.81 435.744Z" fill="#F7D1C9"/>
                    <path d="M398.52 157.717C421.761 154.264 444.763 165.308 456.602 185.603L470.895 210.105C484.976 234.244 508.571 251.338 535.896 257.196L607.488 272.544C655.349 282.804 694.464 317.153 710.824 363.287L722.383 395.885C735.603 433.166 723.9 474.732 693.171 499.639V499.639C680.29 510.08 664.86 516.903 648.468 519.407L561.836 532.638C542.058 535.658 525.272 548.744 517.518 567.188V567.188C504.372 598.453 467.159 611.603 437.288 595.54L401.454 576.269C387.699 568.872 372.326 565 356.708 565H294.929C287.015 565 279.138 566.096 271.524 568.258L260.66 571.342C228.418 580.494 194.142 566.058 178.163 536.597V536.597C165.46 513.177 166.812 484.641 181.67 462.526L200.575 434.389C214.223 414.074 218.692 388.954 212.887 365.178L211.883 361.069C200.362 313.889 231.551 266.916 279.505 259.226L308.763 254.533C332.236 250.769 349.5 230.515 349.5 206.742V206.742C349.5 182.758 367.065 162.39 390.789 158.866L398.52 157.717Z" fill="#FCE1DB"/>
                    <path d="M444.018 580.37C436.329 597.238 413.891 600.736 401.432 587.009V587.009C393.684 578.472 381.212 576.111 370.879 581.225L349.371 591.871C343.717 594.669 337.441 595.972 331.14 595.654V595.654C295.75 593.869 282.967 548.086 312.314 528.226L315.915 525.79C320.909 522.41 326.709 520.415 332.725 520.006L357.6 518.317C370.184 517.462 377.815 504.043 372.116 492.791V492.791C369.847 488.311 369.598 483.075 371.433 478.4L371.82 477.414C377.241 463.601 395.298 460.312 405.241 471.328L409.959 476.555C419.688 487.334 436.633 487.247 446.25 476.368L452.675 469.101C454.515 467.019 456.797 465.374 459.355 464.287L463.782 462.404C477.271 456.669 491.039 469.933 485.811 483.626L485.244 485.11C480.508 497.513 492.205 509.896 504.858 505.872V505.872C521.912 500.45 533.481 523.025 519.12 533.702L504.706 544.419C502.604 545.982 500.199 547.09 497.645 547.672L469.843 554.008C460.133 556.221 452.012 562.837 447.881 571.898L444.018 580.37Z" fill="#A7A7A7"/>
                    <rect width="12.3504" height="97.498" transform="matrix(0.897401 -0.441215 0.508873 0.860842 169.861 280.179)" fill="#EB7A7A"/>
                    <rect width="12.3504" height="97.498" transform="matrix(0.897401 -0.441215 0.508873 0.860842 235.336 268.696)" fill="#EB7A7A"/>
                    <rect width="11.5093" height="104.353" transform="matrix(-0.16439 -0.986395 0.99053 -0.137299 144.892 288.447)" fill="#EB7A7A"/>
                    <rect width="8.24704" height="70.3236" transform="matrix(0.906657 -0.421868 0.488233 0.872713 347.819 475.447)" fill="white"/>
                    <ellipse cx="331" cy="545" rx="21" ry="19" fill="#EB7A7A"/>
                    <rect width="8.24704" height="80" transform="matrix(0.906657 -0.421868 0.488233 0.872713 286.541 475.447)" fill="white"/>
                    <path d="M325.5 545.5L328 536.671L385.688 531L385.881 539.245L325.5 545.5Z" fill="white"/>
                    <path d="M204.216 338.241L267.04 308.707L367.399 489.981L294.797 489.981L204.216 338.241Z" fill="#DFDEDE"/>
                    <rect width="8.24704" height="206.77" transform="matrix(-0.166341 -0.986068 0.970938 -0.239331 326.372 545.03)" fill="white"/>
                    <path d="M266.878 308.668L605.692 244L615.553 342.309L622.848 417.829L361.806 491.229L266.878 308.668Z" fill="#CFCFCF"/>
                    <ellipse cx="527" cy="493" rx="21" ry="19" fill="#EB7A7A"/>
                    <rect width="8.24704" height="206.77" transform="matrix(-0.166341 -0.986068 0.970938 -0.239331 397.372 537.619)" fill="white"/>
                    <ellipse cx="391" cy="536.514" rx="21" ry="19" fill="#EB7A7A"/>
                    <circle cx="391" cy="537" r="5" fill="white"/>
                    <ellipse cx="586" cy="487.5" rx="21" ry="19.5" fill="#EB7A7A"/>
                    <circle cx="586" cy="487.486" r="5" fill="white"/>
                    <rect x="325" y="318.612" width="10" height="150" rx="5" transform="rotate(-27.4646 325 318.612)" fill="#919191"/>
                    <rect x="392.534" y="304.555" width="10" height="145" rx="5" transform="rotate(-22.4789 392.534 304.555)" fill="#919191"/>
                    <rect x="456" y="291.823" width="10" height="140" rx="5" transform="rotate(-22.4789 456 291.823)" fill="#919191"/>
                    <rect x="521" y="287.89" width="10" height="130" rx="5" transform="rotate(-22.8944 521 287.89)" fill="#919191"/>
                    <path d="M556.5 253C696.433 48.1232 540.528 403.427 599.276 70.0484" stroke="black" stroke-width="5" stroke-miterlimit="1.41421" stroke-linejoin="round" stroke-dasharray="10 10"/>
                    <path d="M380.556 286.041C256 274 404 204.5 233.556 182.041" stroke="black" stroke-width="5" stroke-dasharray="10 10"/>
                    <path d="M213.435 194.701C207.848 195.118 205.078 189.022 210.989 189.046C216.901 189.07 221.102 188.283 223.094 183.81C225.086 179.336 228.684 187.045 225.54 189.464C222.396 191.883 219.022 194.283 213.435 194.701Z" fill="#EB7A7A"/>
                    <path d="M208.147 176.556C203.294 173.757 204.435 167.159 209.308 170.506C214.181 173.853 218.097 175.567 222.261 172.991C226.425 170.414 225.06 178.811 221.1 179.041C217.14 179.271 213.001 179.356 208.147 176.556Z" fill="#EB7A7A"/>
                    <path d="M233.461 170.201C233.768 175.795 227.618 178.444 227.759 172.534C227.901 166.624 227.197 162.408 222.764 160.327C218.332 158.247 226.11 154.803 228.466 157.994C230.823 161.185 233.154 164.606 233.461 170.201Z" fill="#EB7A7A"/>
                    <path d="M621 43.8624C607.199 52.912 602.138 54.3895 602.138 60.6687C602.138 66.948 602.138 49.2183 587.186 44.7859C572.235 40.3534 602.138 10.2499 602.138 27.0562C602.138 43.8624 621 34.5806 621 43.8624Z" fill="#EB7A7A"/>
                    <circle cx="602" cy="42" r="5" fill="white"/>
                </svg>
            </div>
            <div class="flex justify-center text-xl">
                Wah, keranjang kamu masih kosong nih. Pilih barang dulu yuk!
            </div>
        </div>

    @endif

</div>

<script>
    function plus(id){
        let url = 'plus';
        let qty = document.getElementById('qty-'+id).innerText;
        let price = document.getElementById('price-'+id).innerText;
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                id: id,
                _token: '{{csrf_token()}}',
                quantity: qty,
                price: price,
            },
            success: function(data) {
                console.log(data);
                document.getElementById('qty-'+id).innerText = data.at(0).at(0).quantity
                document.querySelector('.__sub').innerText = data.at(1)
            }
        });
    }
    function min(id){
        let url = 'minus';
        let qty = document.getElementById('qty-'+id).innerText;
        let price = document.getElementById('price-'+id).innerText;
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                id: id,
                _token: '{{csrf_token()}}',
                quantity: qty,
                price: price,
            },
            success: function(data) {
                console.log(data);
                document.getElementById('qty-'+id).innerText = data.at(0).at(0).quantity
                document.querySelector('.__sub').innerText = data.at(1)
            }
        });
    }
</script>

@endsection