<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/comp/home/style.css">
    @vite('resources/css/app.css')
    <title>INDAH STORE</title>
    <link rel="shortcut icon" href="/img/indah.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    
</head>
<body>
    {{-- <div class="loader"></div> --}}
    <section id="navigation-bar">
        <nav>
            <a href="/"><img src="/img/indah.png" class="logo" alt="logo-indah"></a>
            <input type="text" name="cari" id="" placeholder="Cari bunga di Toko Indah" class="cari-input">
            <a href="/cart"><img src="/img/te.png" alt="cart-logo" class="cart-logo">
                {{-- <span id="cart-count" class="bg-red-500 text-white cart-count @if (session('cartCount') > 0) block @else hidden @endif">
                    {{ session('cartCount') }}
                </span> --}}
            </a>
            
            <img src="/img/sa.png" alt="" class="vertical-hr">
            @auth
            <div class="auth">
                <div class="dropdown">
                    <img src="/img/{{ Auth()->user()->image }}" class="pfp-img"alt="" style="border-radius:50%">
                    {{ auth()->user()->username }}
                    <div class="dropdown-content" id="myDropdown">
                        <a href="{{ route('profile') }}">
                            <div class="dropdown-child">
                                Profil User
                            </div>
                        </a>
                        @if ( auth()->user()->isAdmin())
                            <a href="{{ route('admin') }}">
                                <div class="dropdown-child">
                                    Admin Page
                                </div>
                            </a>
                        @endif
                        <a href="">
                            <div class="dropdown-child">
                                Status Barang
                            </div>
                        </a>
                        <a href="{{ route('logout') }}">
                            <div class="dropdown-child">
                                Log Out
                            </div>
                        </a>
                    </div>
                </div>
                @else
                <div class="guest-auth">
                    <a href="{{ route('login') }}" class="button login" style="margin-right: 10px">login</a>
                    <a href="{{ route('regis') }}" class="button regis">regis</a>
                </div>
                    
                @endauth
            </div>
            
        </nav>
    </section>
    @yield('content')
    
    <footer>

    </footer>
    <script src="/comp/home/script.js"></script>
    <script>
        // JavaScript to keep the dropdown content open when hovering over it
        document.addEventListener("DOMContentLoaded", function() {
          var dropdowns = document.getElementsByClassName("dropdown");
          for (var i = 0; i < dropdowns.length; i++) {
            dropdowns[i].addEventListener("mouseover", function() {
              this.getElementsByClassName("dropdown-content")[0].style.display = "block";
            });
            dropdowns[i].addEventListener("mouseout", function() {
              this.getElementsByClassName("dropdown-content")[0].style.display = "none";
            });
          }
        });

        function increment($id) {
            var input = document.getElementById('numberInput'.$id);
            input.stepUp();
        }

        function decrement($id) {
            var input = document.getElementById('numberInput'.$id);
            input.stepDown();
        }
    </script>
    @yield('script')
</body>
</html>