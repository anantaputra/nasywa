<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ URL::asset('img/icon.svg') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>

@if (auth()->user() && auth()->user()->admin == true && strpos(Request::route()->getName(), 'admin') !== false)
    <div class="w-full flex">
        @include('partials.admin-sidebar')
        <div class="w-full pl-60 py-12">
            @yield('content')
        </div>
    </div>
@else
    @if (!Request::is('forgot-password'))
        @include('partials.navbar')
    @endif
    @yield('content')
@endif



<script>
    function cart(){
            window.location.href = "{{ route('cart') }}";
    }
</script>
    
</body>
</html>