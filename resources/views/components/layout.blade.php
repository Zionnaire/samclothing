<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        
         <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#8db5c9",
                            btnBg: "#143A79",
                            hover: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Sam's Clothing</title>
        @viteReactRefresh
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
        @vite('resources/css/tailwind.css')
        {{-- @vite('resources/js/main.js') --}}
    </head>
                {{-- View Starts Here --}}

    <body class="mb-48">
        <div id="app">
        <x-flash-message />
        <nav class="flex justify-between items-center mb-2 shadow-lg bg-btnBg px-4 py-1 sticky top-0 z-50">
            <a href="/" class="flex gap-2 items-end px-4 py-2 text-lg font-bold text-btnBg rounded-lg hover:text-hover">
                <img class="w-[30%] shadow-sm" src="{{asset('images/logo.png')}}" alt="" class="logo"
            /></a>
            <ul class="flex gap-4 space-x-6 mr-6 text-lg">
                <li>
                    <a href="/" class="hover:text-hover text-white flex gap-1 items-center"><i class="fa-solid fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="/about" class="hover:text-hover text-white flex gap-1 items-center"><i class="fa-solid fa-about"></i>About</a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-hover text-white flex gap-1 items-center"><i class="fa-solid fa-envelope"></i>Contact</a>
                </li>
                @auth
                    
                <li>
<span class="font-bold uppercase">
    Welcome {{auth()->user()->name}}
    </span>                
</li>

<li>
    <a href="/collections" class="hover:text-hover text-white flex gap-1 items-center"><i class="fa-solid fa-folder"></i>Collections</a>
</li>
                <li>
                    <a href="/designs/cart" class="hover:text-hover text-white flex gap-1 items-center">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Cart
                    </a
                    >
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="hover:text-hover text-white flex gap-1 items-center">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            Logout
                            </button>
                    </form>
                </li>
                    
                @else
            <li>
                    <a href="/register" class="hover:text-hover text-white flex gap-1 items-center"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="/login" class="hover:text-hover text-white flex gap-1 items-center"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                @endauth
            </ul>
        </nav>
         
    <main>
   {{ $slot }}
    </main>
    <div class="bg-btnBg" id="footer">
    </div>
    {{-- <x-footer /> --}}
{{-- <footer-sect/> --}}
</div>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>