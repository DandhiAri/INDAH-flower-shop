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
    
</head>
<body>
    {{-- <div class="loader"></div> --}}
    <section id="navigation-bar">
        <nav>
            <a href="/"><img src="/img/indah.png" class="logo" alt="logo-indah"></a>
            <input type="text" name="cari" id="" placeholder="Cari bunga di Toko Indah" class="cari-input">
            <a href="/cart"><img src="/img/te.png" alt="cart-logo" class="cart-logo"></a>
            <img src="/img/sa.png" alt="" class="vertical-hr">
            {{-- <div class="vertical-hr"></div> --}}
            <a href="{{ route('login') }}" class="button login" style="margin-right: 10px">login</a>
            <a href="{{ route('regis') }}" class="button regis">regis</a>
        </nav>
    </section>
    @yield('content')
    
    <footer>

    </footer>
    <script src="/comp/home/script.js"></script>
</body>
</html>