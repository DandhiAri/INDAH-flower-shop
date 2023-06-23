@extends('layout.mainH')
@section('title')
    
@endsection

@section('content')
<div class="mb-2 w-full flex items-center">
    <h1 class="text-3xl md:text-5xl font-bold text-gray-600">Status Page</h1>
</div>

    @foreach ($co as $item)
        <div class="bg-grey shadow-md rounded-lg mt-7 p-6">
            <h1 class="text-xl font-bold text-gray-600">kode: {{ $item->codeSent }}</h1>
            <img src="/img/product/{{ $item->product->image }}" style="width:60px;" alt="Card Image" class="w-full mb-4 rounded-lg">
            <h2 class="text-xl font-semibold mb-2">{{$item->product->name}}</h2>
            <p class="text-gray-700 mb-4">Jumlah: {{$item->quantity}}</p>
            <p class="text-gray-700 mb-4">Harga: Rp.{{$item->product->price}}</p>
            <p class="text-gray-700 mb-4">total bayar: Rp.{{$item->totalPrice}}</p>
            <p class="text-gray-700 mb-4">status : {{$item->status}}</p>
            {{-- <a href="#" class="text-blue-500 hover:text-blue-700">{{$item->status}}</a> --}}
        </div>
    @endforeach

    {{-- <div class="mb-2">
        <h1 class="text-xl md:text-5xl font-bold text-black-600">Checkout.</h1>
    </div> --}}

@endsection
@section('script')
    
@endsection