<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="comp/auth/authR-style.css">
</head>
<body>
    <center>
        <form action="{{route('signup')}}" method="post">
            @csrf
            <div class="title">
                INDAH | REGRISTRATION PAGE
            </div>
            <ul>
                <li>
                    <label for="name">Nama</label><br>
                    <input type="text" name="name" placeholder="masukkan nama lengkap anda">
                </li>
                <li>
                    <label for="username"> Username</label><br>
                    <input type="text" name="username" placeholder="masukkan username anda">
                </li>
                <li>
                    <label for="email"> Email</label><br>
                    <input type="email" name="email"  placeholder="masukkan email anda">
                </li>
                <li>
                    <label for="telpon"> Telephon</label><br>
                    <input type="number" name="telp" placeholder="masukkan email anda">
                </li>
                <li>
                    <label for="password"> Password</label><br>
                    <input type="password" name="password" placeholder="masukkan password anda"><br>
                </li>
                <li>
                    <label for="alamat"> Alamat lengkap</label><br>
                    <textarea name="alamat" id="" cols="30" rows="15" placeholder="masukkan alamat rumah anda"></textarea>
                </li>
                <li>
                    <center style="margin-top: 30px;">
                        sudah punya akun ? <a href="{{ route('login') }}">Coba Login</a>
                    </center>
                </li>
                <li>
                    <center>
                        <input type="submit" value="SUBMIT">
                    </center>
                </li>
            </ul>
        </form>
    </center>
</body>
</html>