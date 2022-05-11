@extends('layouts.app')

@section('content')

<div class="w-full px-16 py-4 mt-4 mb-40 space-y-8">

    <div class="w-full rounded shadow-md border-t-4 border-red-200 py-8 px-8">
        <div class="w-full flex text-red-300 font-semibold text-lg mb-4">
            Alamat Pengiriman
        </div>
        <div class="w-full flex">
            <div class="w-1/5">
                {{ $address[0]->name }} {{ $address[0]->phone }}
            </div>
            <div class="w-4/5">
                <div>
                    {{ $address[0]->address }}, {{ App\Http\Controllers\User\AddressController::getCityName($address[0]->province, $address[0]->city) }}, {{ App\Http\Controllers\User\AddressController::getProvinceName($address[0]->province) }}
                </div>
                <div>
                    {{ $address[0]->postal }}
                </div>
            </div>
            <div class="">
                <a href="#" class="text-red-300">Ubah</a>
            </div>
        </div>
    </div>

    <div class="w-full rounded shadow-md border-t-2 py-8 px-8">
        <div class="w-full flex justify-between mb-8">
            <span class="w-full text-red-300 font-semibold text-lg">Rincian Pesanan</span>
            <div class="w-1/2 flex space-x-32 text-gray-500">
                <span>Price</span>
                <span>Quantity</span>
            </div>
            <div class="w-1/5 text-gray-500">
                <span>Subtotal Produk</span>
            </div>
        </div>
        <div class="w-full flex justify-between mb-16">
            <div class="w-full flex space-x-4">
                <img class="w-14 h-14" src="../../img/neonbrand-SDprf7W3NUc-unsplash.jpg" alt="">
                <span class="text-red-300 font-semibold text-lg">Rincian Pesanan</span>
            </div>
            <div class="w-1/2 flex space-x-32">
                <span>Rp. 20000</span>
                <span>1</span>
            </div>
            <div class="w-1/5">
                <span>Rp. 20000</span>
            </div>
        </div>
        <div class="w-full flex justify-end space-x-8 border-t border-dashed px-6 pt-4">
            <span>Total Pesanan:</span>
            <span>Rp. 20000</span>
        </div>
    </div>

    <div class="w-full rounded shadow-md border-t-2 py-8 px-8">
        <span class="w-full text-red-300 font-semibold text-lg">Pilih Pengiriman</span>
        <div class="grid grid-cols-3 gap-4 mt-4">
            @if (isset($jne))    
                @foreach ($jne as $jne)
                    <div class="border px-8 py-4">
                        @php
                            $price = $jne->cost[0]->value;
                            $length = strlen($price);
                            $zero = substr($price, $length - 3, $length);
                            $number = substr($price, 0, $length - 3);
                            $price = $number . '.' . $zero;
                        @endphp
                        @php
                            $etd = $jne->cost[0]->etd;
                            $day = explode('-', $etd);
                            $soonest = $day[0];
                            $latest = $day[1];
                            $soondate = date('Y-m-d', strtotime("+$soonest day", strtotime(date("Y-m-d"))));
                            $latestdate = date('Y-m-d', strtotime("+$latest day", strtotime(date("Y-m-d"))));
                            $soondate = explode('-', $soondate);
                            $latestdate = explode('-', $latestdate);
                            $bulan = ['', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'];
                            $soondate[1] = (int) $soondate[1];
                            $soondate[1] = $bulan[$soondate[1]];
                            $latestdate[1] = (int) $latestdate[1];
                            $latestdate[1] = $bulan[$latestdate[1]];
                        @endphp
                        <div class="font-semibold">JNE {{ $jne->service }} Rp{{ $price }}</div>
                        @if ($soondate[1] == $latestdate[1])
                            <div class="text-xs text-gray-800">Akan diterima pada tanggal {{ $soondate[2] }}-{{ $latestdate[2] }} {{ $soondate[1] }}</div>
                        @else
                            <div class="text-xs text-gray-800">Akan diterima pada tanggal {{ $soondate[2] }} {{ $soondate[1] }}-{{ $latestdate[2] }} {{ $latestdate[1] }}</div>
                        @endif
                    </div>
                @endforeach
            @endif
            @if (isset($tiki))
                @foreach($tiki as $tiki)
                    <div class="border px-8 py-4">
                        @php
                            $price = $tiki->cost[0]->value;
                            $length = strlen($price);
                            $zero = substr($price, $length - 3, $length);
                            $number = substr($price, 0, $length - 3);
                            $price = $number . '.' . $zero;
                        @endphp
                        @php
                            $etd = $tiki->cost[0]->etd;
                            $date = date('Y-m-d', strtotime("+$etd day", strtotime(date("Y-m-d"))));
                            $date = explode('-', $date);
                            $bulan = ['', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'];
                            $date[1] = (int) $date[1];
                            $date[1] = $bulan[$date[1]];
                        @endphp
                        <div class="font-semibold">Tiki {{ $tiki->service }} Rp{{ $price }}</div>
                        <div class="text-xs text-gray-800">Akan diterima pada tanggal {{ $date[2] }} {{ $date[1] }}</div>
                    </div>
                @endforeach
            @endif
            @if (isset($pos))
                @foreach($pos as $pos)
                    <div class="border px-8 py-4">
                        @php
                            $price = $pos->cost[0]->value;
                            $length = strlen($price);
                            $zero = substr($price, $length - 3, $length);
                            $number = substr($price, 0, $length - 3);
                            $price = $number . '.' . $zero;
                        @endphp
                        @php
                            $etd = $pos->cost[0]->etd;
                            $etd = explode(' ', $etd);
                            $etd = $etd[0];
                            $date = date('Y-m-d', strtotime("+$etd day", strtotime(date("Y-m-d"))));
                            $date = explode('-', $date);
                            $bulan = ['', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'];
                            $date[1] = (int) $date[1];
                            $date[1] = $bulan[$date[1]];
                        @endphp
                        <div class="font-semibold">Pos {{ $pos->service }} Rp{{ $price }}</div>
                        <div class="text-xs text-gray-800">Akan diterima pada tanggal {{ $date[2] }} {{ $date[1] }}</div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="w-full rounded shadow-md border-t-2 py-8 px-8">
        <span class="w-full text-red-300 font-semibold text-lg">Pilih Metode Pembayaran</span>
        <div class="text-lg font-semibold mt-4">Transfer Bank</div>
        <div class="grid grid-cols-5 gap-4 mt-4">
            <div class="border text-center px-8 py-4">
                BCA
            </div>
            <div class="border text-center px-8 py-4">
                BNI
            </div>
            <div class="border text-center px-8 py-4">
                Mandiri
            </div>
            <div class="border text-center px-8 py-4">
                BRI
            </div>
            <div class="border text-center px-8 py-4">
                Permata
            </div>
        </div>
        
        <div class="text-lg font-semibold mt-4">E-wallet</div>
        <div class="grid grid-cols-5 gap-4 mt-4">
            <div class="border text-center px-8 py-4">
                QRIS
            </div>
            <div class="border text-center px-8 py-4">
                GoPay
            </div>
            <div class="border text-center px-8 py-4">
                ShopeePay
            </div>
        </div>

        <div class="text-lg font-semibold mt-4">Store</div>
        <div class="grid grid-cols-5 gap-4 mt-4">
            <div class="border text-center px-8 py-4">
                Alfamart
            </div>
            <div class="border text-center px-8 py-4">
                Indomaret
            </div>
        </div>

    </div>
    
</div>
<div class="w-full bg-white fixed bottom-0 left-0 right-0 px-16">
    <div class="w-full flex justify-end space-x-16 rounded shadow-md border-t-2 py-8 px-8">
        <div class="flex space-x-24">
            <div class="flex space-x-40">
                <span>Biaya Pengiriman</span>
                <span>Subtotal Produk</span>
            </div>
            <span>Total Pesanan</span>
        </div>
        <div class="w-32 mt-10 bg-red-400 flex justify-center">
            <div class="py-2.5 px-4 text-white  cursor-pointer">
                Checkout
            </div>
        </div>
    </div>
</div>
    
@endsection