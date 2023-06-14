@extends('layout.mainH')
@section('title')
    
@endsection
@section('content')

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="md:col-span-1">
            <!-- Product image -->
            <img src="/img/product/{{ $product->image }}" alt="{{ $product->image }}" class="w-full">
        </div>
        <div class="md:col-span-1">
            <!-- Product details -->
            <h1 class="text-2xl font-bold mb-4">{{ $product->name }}</h1>
            <p class="text-gray-600 mb-4">{{ $product->desc }}</p>
            <div class="flex mb-4">
                <span class="text-gray-600 mr-2">Sisa Barang:</span>
                <span class="text-gray-800">{{ $product->stock }}</span>
            </div>
            <div class="flex mb-4">
                <span class="text-gray-600 mr-2">Ukuran Tanaman:</span>
                <span class="text-gray-800">{{ $product->size }}</span>
            </div>
            <div class="flex mb-4">
                <span class="text-gray-600 mr-2">Kategori:</span>
                <span class="text-gray-800">{{ $product->category }}</span>
            </div>
            <div class="flex mb-4 font-bold">
                <span class="text-gray-600 mr-2">Harga:</span>
                <span class="text-gray-800">Rp.{{ $product->price }}</span>
            </div>
            
            <form action="{{ route('addcart') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit"class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">Tambah ke Keranjang</button>
            </form>
            
        </div>
    </div>
</div>
@endsection