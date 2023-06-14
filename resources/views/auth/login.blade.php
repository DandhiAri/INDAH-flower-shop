<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDAH | LOGIN</title>
    <link rel="stylesheet" href="comp/auth/auth-style.css">
    <link rel="shortcut icon" href="/img/indah.png">
</head>
<body>
    <form action="{{route('verif')}}" method="post">
        @csrf       
        <ul style="padding-top:10%">
            <li>
                <img src="{{ asset('/img/indah putih.png') }}" alt="logo" width="90%">
            </li>
            <li style="padding-top:10%">
                <label for="username"> Username</label>
            </li>
            <li>
                <input type="text" name="username" placeholder="masukkan username anda">
            </li>
            <li>
                <label for="Password"> Password</label>
            </li>
            <li>
                <input type="password" name="password" placeholder="masukkan password anda">
            </li>
            <li style="display:flex; justify-content:center; padding-top:10px; margin-left:-30px;" >
                <input type="submit" value="MASUK">
            </li>
            {{-- <li class="lupa" style="display:flex; justify-content:center;">
                <a href="" >Lupa Password?</a>
            </li> --}}
            <li style="display:flex; justify-content:center; padding-top:10px; margin-left:-40px;">
                Belom punya akun?<a href="{{ route('regis') }}" >coba signup</a>
            </li>
        </ul>
    </form>
</body>
</html>