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
  @php
    $subtotal = 0;   
  @endphp
  <div class="h-screen bg-gray-100 pt-10 pb-30">
    <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
    <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
        @if (count($carts) > 0)
            <div class="rounded-lg md:w-2/3">
              @foreach ($carts as $cart)
                <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                  <img src="/img/product/{{ $cart->product->image }}" alt="{{ $cart->product->image }}" class="w-full rounded-lg sm:w-40" />
                  <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                      <div class="mt-5 sm:mt-0">
                          <h2 class="text-lg font-bold text-gray-900">{{ $cart->product->name }}</h2>
                          <p class="mt-1 text-xs text-gray-700">Ukuran {{ $cart->product->size }}</p>
                          @if( $cart->product->warna)
                          <p class="mt-1 text-xs text-gray-700">warna {{ $cart->product->warna }}</p>
                          @endif
                          <p class="mt-1 text-xs price text-gray-700">Harga Rp.{{ $cart->product->price }}</p>
                      </div>
                      <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                        <form action="{{ route('cartupdate',$cart->id) }}" method="post">
                          @csrf
                          @method('PUT')
                          <div class="flex items-center border-gray-100">
                            <input type="number" name="quantity" min="1" max="100" value="{{ $cart->quantity }}" style="text-align:center; border: 1px solid black;" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInputNumber"/>
                            {{-- <input type="hidden" name="subtotal" value="{{$cart->quantity*$cart->product->price}}"> --}}
                            {{-- <input type="submit" value="submit"> --}}
                          </div>
                        </form>
                        <div class="flex items-center space-x-4">
                            <p class="text-sm subtotal">Rp.{{ $cart->subtotal }}
                              
                              {{-- {{ $subtotal }} --}}
                            </p>
                            @foreach ($carts as $item)
                                @php
                                  $subtotal += $subtotal;
                                @endphp
                              @endforeach
                            <form  action="{{ route('removeCart',$cart->id) }}" method="Post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                              </button>
                          </form> 
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
                <div style="rounded-lg display: grid; place-items:center; text-align :center; margin-bottom:1rem; border-radius:25px;">
                  <a href="/shop" class="lanjut-shop">Lanjut Belanja</a>
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
        {{-- <div class="mb-2 flex justify-between">
          <p class="text-gray-700">Subtotal</p>
          <p class="subtotal text-gray-700">Rp. {{$cartall }}</p>
        </div> --}}
        {{-- <div class="flex justify-between">
          <p class="text-gray-700">Ongkir</p>
          <p class="text-gray-700">Rp.14000</p>
        </div> --}}
        <hr class="my-4" />
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
            <p class="total-price mb-1 text-lg font-bold">Rp.{{ $cartall }}</p>
            
            {{-- <p class="text-sm text-gray-700">including VAT</p> --}}
          </div>
        </div>
        <a href="{{ route('checkout') }}">
          <button class="mt-4 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button>
        </a>
        <form action="{{ route('checkout') }}" method="get">

          {{-- <input type="hidden" value="{{ $cart->product }}">
          <input type="hidden" value="{{ $total }}" name="total"> --}}
          {{-- <button type="submit" class="mt-6 w-full rounded-md bg-yellow-500 py-1.5 font-medium text-blue-50 hover:bg-green-600">Update</button> --}}
          
        </form>
      </div>
    </div>
  </div>
</body>
@endsection