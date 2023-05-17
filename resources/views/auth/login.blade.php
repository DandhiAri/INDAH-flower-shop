<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="comp/auth/auth-style.css">
</head>
<body>
    <center>
        <form action="{{route('verif')}}" method="post">
            <label for="username"> Username</label>
            <input type="text" name="username">
            <label for="Password"> Password</label>
            <input type="password" name="password"><br>
            <input type="submit" value="submit">
        </form>
    </center>
</body>
</html>