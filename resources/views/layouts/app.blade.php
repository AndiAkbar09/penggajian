<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Penggajian') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                        <div class="d-flex">
                            <svg enable-background="new 0 0 48 48" height="35" id="Layer_1" version="1.1" viewBox="0 0 48 48" width="35" xml:space="preserve" style="margin-top: -5px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" fill="#fff" d="M47,40L47,40c0,2.762-2.238,5-5,5l0,0H6l0,0c-2.762,0-5-2.238-5-5V11  c0-2.209,1.791-4,4-4l0,0h20.171l8.099-2.934c0.513-0.187,1.081,0.078,1.268,0.589L35.391,7H39c2.209,0,4,1.791,4,4v2l0,0  c2.209,0,4,1.791,4,4V40z M5,9L5,9c-1.104,0-2,0.896-2,2s0.896,2,2,2h3.445l0,0h0.189c0.013-0.005,0.021-0.016,0.034-0.021L19.65,9  H5z M34.078,9.181l-1.062-2.924l-0.001,0v0L30.964,7h0.003l-5.514,2h-0.01l-11.039,4h21.062L34.078,9.181z M41,11  c0-1.104-0.896-2-2-2h-2.883l1.454,4H41l0,0V11z M43,15H5l0,0c-0.732,0-1.41-0.211-2-0.555V40c0,1.657,1.344,3,3,3h36  c1.657,0,3-1.343,3-3v-7h-4c-2.209,0-4-1.791-4-4s1.791-4,4-4h4v-8C45,15.896,44.104,15,43,15z M45,31v-4h-4c-1.104,0-2,0.896-2,2  s0.896,2,2,2H45z M41,28h2v2h-2V28z" fill-rule="evenodd"/></svg>
                            <h3 class="text-light px-2">PAYMENT</h3>
                        </div>
                        <ul class="nav flex-column pt-4">

                            <li class="nav-item">
                                <a href="{{route('penggajians.home')}}" class="nav-link text-light">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('penggajians.pegawai')}}" class="nav-link text-light">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-light">Payment</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-light">Price</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('penggajians.data-hadir')}}" class="nav-link text-light">Type</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
                <div class="col-md-10">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
