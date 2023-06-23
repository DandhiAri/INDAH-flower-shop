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
    <form action="{{ route('productadmin.update',$prod->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')
        <h1 class="text-3xl text-black pb-6">Edit Page</h1>
        <div class="mb-4">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Produk</label>
          <input type="text" name="name" id="name" value="{{ $prod->name }}" placeholder="masukkan nama produk" class="shadow appearance-none border rounded w-full py-2 px-3 border-black-500 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload image</label>
          <input value="{{ $prod->image }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="image" id="multiple_files" type="file" multiple>
        </div>
        <div class="mb-4">
            <label for="produkname" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
            <input value="{{ $prod->category }}" type="text" name="category" id="produkname" placeholder="masukkan category produk" placeholder="masukkan category produk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="produkname" class="block text-gray-700 text-sm font-bold mb-2">Slug</label>
            <input type="text" name="slug" id="produkname" placeholder="masukkan category produk" placeholder="masukkan category produk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
            <textarea value="" name="desc" id="" cols="30" rows="10" placeholder="masukkan deskripsi produk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $prod->desc }}</textarea>
        </div>
  
        <div class="mb-4">
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Stok</label>
            <input value="{{ $prod->stock }}" name="stock" placeholder="masukkan address produk" placeholder="masukkan alamat produk" cols="30" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
        </div>
  
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Ukuran</label>
            <input value="{{ $prod->size }}" type="text" name="size" id="phone" placeholder="masukkan nomer produk" placeholder="masukkan nomer telpon produk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Harga</label>
            <input value="{{ $prod->price }}" type="text" name="price" placeholder="masukkan password produk" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div> 
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit
                
            </button>
        </div>
      </form>
    @endsection
  
</body>
</html>