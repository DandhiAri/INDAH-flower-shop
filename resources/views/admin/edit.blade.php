@extends('layout.main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @section('title')
            Create Page | dashboard
        @endsection
    </title>
</head>
<body>
    @section('content')
    <form method="POST" action="{{ route('admin.update', $user->id) }}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter your name">
      </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" name="user" class="form-control" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
  
</body>
</html>