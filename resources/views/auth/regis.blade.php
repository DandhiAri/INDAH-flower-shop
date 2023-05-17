<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="{{route('signup')}}" method="post">
            <label for="name"> name</label>
            <input type="text" name="name">
            <label for="username"> Username</label>
            <input type="text" name="username">
            <label for="email"> email</label>
            <input type="email" name="email">
            <label for="telp"> telp</label>
            <input type="number" name="telp" id="">
            <label for="Password"> Password</label>
            <input type="password" name="password"><br>
            <input type="submit" value="submit">
        </form>
    </center>
</body>
</html>