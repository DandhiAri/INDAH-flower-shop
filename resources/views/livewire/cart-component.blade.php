
@extends('layout.mainH')
@section('title')
    
@endsection
@section('content')
<!-- component -->
<!-- Create By Joker Banny -->
<style>
    @layer utilities {
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  }
</style>

<body>
  {{-- <livewire:CartComponent  /> --}}
  <div class="h-screen bg-gray-100 pt-20">
    <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
    <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
          <div class="rounded-lg md:w-2/3">
            @if (count($carts) > 0)
            @foreach ($cart as $index => $item)
              <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                <img src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="product-image" class="w-full rounded-lg sm:w-40" />
                <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                    <div class="mt-5 sm:mt-0">
                      <h2 class="text-lg font-bold text-gray-900">{{ $cart->product->name }}</h2>
                      <p class="mt-1 text-xs text-gray-700">Ukuran {{ $cart->product->size }}</p>
                      @if( $cart->product->warna)
                      <p class="mt-1 text-xs text-gray-700">warna {{ $cart->product->warna }}</p>
                      @endif
                      <p class="mt-1 text-xs price text-gray-700">Harga Rp. {{ $cart->product->price }}</p>
                    </div>
                    <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                      <div class="flex items-center border-gray-100"> 
                          <span wire:loading:attr="disabled" wire:click.prevent="decQuantity('{{ $index }}')" class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50"> - </span>
                          <input class="quantity-input h-8 w-8 border bg-white text-center text-xs outline-none"  id="quantityInput" type="number" value="{{ $item['quantity'] }}" min="1" />
                          <span wire:loading:attr="disabled" wire:click.prevent="incQuantity('{{ $index }}')" class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50"> + </span>
                      </div>
                      <div class="flex items-center space-x-4">
                          <p class="text-sm subtotal">Rp.{{ $total }}</p>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                      </div>
                    </div>
                </div>
              </div>
            @endforeach
              <div class="lanjut-shop">
                <a href="/shop">Lanjut Belanja</a>
              </div>
          </div>
        @else
        <div class="rounded-lg md:w-2/3" style="display: grid; place-items:center; text-align :center;">
          KERANJANG KAMU MASIH KOSONG!
          <a href="/shop" class="lanjut-shop">Lanjut Belanja</a>
        </div>
        @endif
      <!-- Sub total -->
      <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
        <div class="mb-2 flex justify-between">
          <p class="text-gray-700">Subtotal</p>
          {{-- <p class="subtotal text-gray-700">Rp. {{ $cart->subtotal }}</p> --}}
        </div>
        <div class="flex justify-between">
          <p class="text-gray-700">Shipping</p>
          {{-- <p class="text-gray-700">Rp.{{ $totalPrice }}</p> --}}
        </div>
        <hr class="my-4" />
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
            <p class="total-price mb-1 text-lg font-bold">0.00</p>
          </div>
        </div>
        <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button>
      </div>
    </div>
  </div>
</body>

@endsection

