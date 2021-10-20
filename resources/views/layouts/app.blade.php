<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/header&footer.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                

                <div class="header" id="navbarSupportedContent">
                    <div class="headerTengah">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('Assets/logo.png')}}" alt="">
                        </a>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="headerKanan">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <a href="{{route('login')}}">
                                <button >{{ __('Login') }}</button>
                            </a>
                            @endif

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button >{{ __('Register') }}</button>
                            </a>
                            @endif
                        @else
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        
        <div class="footer">
            <div class="baris1">
                <div class="aboutus">
                    <a href="">About Us</a>
                </div>
            </div>
            <div class="baris2">
                <div class="kiri-footer">
                    Kantor kami :
                    <br />
                    Gedung ABC lantai 51
                    <br />
                    Jalan Raya Garuda, Jakarta Pusat, 14320
                </div>
                <div class="kanan-footer">
                    <div class="text">Our Social Media</div>
                    <div class="socialMedia">
                        <img src="{{asset('Assets/facebook.png')}}" alt="" />
                        <img
                            src="{{asset('Assets/logo-ig-lighting-and-furniture-design-studio-aqua-creations-32.png')}}"
                            alt=""
                        />
                        <img src="{{asset('Assets/twitter.png')}}" alt="" />
                        <img src="{{asset('Assets/youtube.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
