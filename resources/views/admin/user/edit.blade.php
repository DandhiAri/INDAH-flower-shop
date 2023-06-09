@extends('layout.main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @section('title')
            Edit Page | dashboard
        @endsection
    </title>
</head>
<body>
    @section('content')
    <form action="{{ route('useradmin.update', $user->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      @csrf
      @method('PUT')
      <h1 class="text-3xl text-black pb-6">Edit Page</h1>
      <div class="mb-4">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
          <input type="text" name="name" id="name" value="{{ $user->name }}" placeholder="masukkan nama user" class="shadow appearance-none border rounded w-full py-2 px-3 border-black-500 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="mb-4">
          <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
          <input type="text" name="username" id="username" value="{{ $user->username }}" placeholder="masukkan username user" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="mb-4">
          <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
          <input type="email" name="email" id="email" value="{{ $user->email }}" placeholder="masukkan email user" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <div class="mb-4">
          <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
          <textarea name="alamat" id="address" value="{{ $user->address }}" placeholder="masukkan alamat user" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $user->alamat }}</textarea>  
      </div>

      <div class="mb-4">
          <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
          <input type="text" name="telp" id="phone" value="{{ $user->telp }}" placeholder="masukkan nomer telpon user" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
          <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
          <input type="password" name="password" placeholder="masukkan password user" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div> 

      <div class="flex items-center justify-between">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button>
      </div>
  </form>
    @endsection
  
</body>
</html>