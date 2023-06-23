@extends('layout.mainH')
@section('title')
    
@endsection
@section('content')
    <!-- component -->
<style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css')</style>
<style>
/*
module.exports = {
    plugins: [require('@tailwindcss/forms'),]
};
*/
.form-radio {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-print-color-adjust: exact;
          color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  flex-shrink: 0;
  border-radius: 100%;
  border-width: 2px;
}

.form-radio:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

@media not print {
  .form-radio::-ms-check {
    border-width: 1px;
    color: transparent;
    background: inherit;
    border-color: inherit;
    border-radius: inherit;
  }
}

.form-radio:focus {
  outline: none;
}

.form-select {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3e%3cpath d='M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z'/%3e%3c/svg%3e");
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-print-color-adjust: exact;
          color-adjust: exact;
  background-repeat: no-repeat;
  padding-top: 0.5rem;
  padding-right: 2.5rem;
  padding-bottom: 0.5rem;
  padding-left: 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  background-position: right 0.5rem center;
  background-size: 1.5em 1.5em;
}

.form-select::-ms-expand {
  color: #a0aec0;
  border: none;
}

@media not print {
  .form-select::-ms-expand {
    display: none;
  }
}

@media print and (-ms-high-contrast: active), print and (-ms-high-contrast: none) {
  .form-select {
    padding-right: 0.75rem;
  }
}
</style>

<div class="min-w-screen min-h-screen bg-gray-50 py-5">
    <div class="px-5">
        <div class="mb-2">
            <a href="/cart" class="focus:outline-none hover:underline text-gray-500 text-sm"><i class="mdi mdi-arrow-left text-gray-400"></i>Back</a>
        </div>
        <div class="mb-2">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-600">Checkout.</h1>
        </div>
    </div>
    <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-10 text-gray-800">
        <div class="w-full">
            <div class="-mx-3 md:flex items-start">
                <div class="px-3 md:w-7/12 lg:pr-10">
                    <div class="w-full mx-auto text-gray-800 font-light mb-6 border-b border-gray-200 pb-6">
                        @foreach ($barang as $item)
                        <div class="w-full flex items-center pt-3">
                            
                            <div class="overflow-hidden rounded-lg w-16 h-16 bg-gray-50 border border-gray-200">
                                <img src="/img/product/{{ $item->product->image }}" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-semibold uppercase text-gray-600">{{ $item->product->name }}</h6>
                                <p class="text-gray-400">x{{ $item->quantity }}</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-600 text-xl">Rp.{{ $item->product->price }} </span>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                    <div class="mb-6 pb-6 border-b border-gray-200">
                    </div>
                    <div class="mb-6 pb-6 border-b border-gray-200 text-gray-800">
                        <div class="w-full flex mb-3 items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Subtotal</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold">Rp.{{ $cartall }}</span>
                            </div>
                        </div>
                        {{-- <div class="w-full flex mb-3 items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Uang mu</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold">Rp.{{ $cartall }}</span>
                            </div>
                        </div>
                        <div class="w-full flex mb-3 items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Kembalian</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold">Rp.{{ $cartall }}</span>
                            </div>
                        </div> --}}
                        <div class="w-full flex items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Ongkir</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold">Rp.14000</span>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="mb-6 pb-6 border-b border-gray-200 md:border-none text-gray-800 text-xl">
                        <div class="w-full flex items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Total</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold">Rp.{{ $totalPrice = $cartall + 14000 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3 md:w-5/12">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-3 items-center">
                            <div class="w-32">
                                <span class="text-gray-600 font-semibold">Kontak nama</span>
                            </div>
                            <div class="flex-grow pl-3">
                                <span>{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                        <div class="w-full flex items-center">
                            <div class="w-32">
                                <span class="text-gray-600 font-semibold">Alamat</span>
                            </div>
                            <div class="flex-grow pl-3">
                                <span>{{ Auth::user()->alamat }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                        <div class="w-full p-3 border-b border-gray-200">
                            <div class="mb-5">
                                <label for="type1" class="flex items-center cursor-pointer">
                                    {{-- <a href="/checkout/card" style="cursor: pointer; background-color:red" >
                                        <button type="button" class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                            VAYAR CARD
                                        </button>
                                    </a> --}}
                                    <a href="/checkout/cod"  style="cursor: pointer; background-color:blue">
                                        <button type="button" class="inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#e4a11b] transition duration-150 ease-in-out hover:bg-warning-600 hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:bg-warning-600 focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:outline-none focus:ring-0 active:bg-warning-700 active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(228,161,27,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)]">
                                            COD
                                        </button>
                                    </a>
                                
                                </label>
                            </div>
                            <div>
                                @if(Route::currentRouteName() == 'checkout.card')
                                    <form action="{{ route('insertCard',$cart->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Nama Kartu VAYAR</label>
                                            <div>
                                                <input name="name" class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="masukkan username VAYAR card anda..." type="text"/>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Nomer Kartu VAYAR</label>
                                            <div>
                                                <input name="codeNumber" class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="masukkan nomer kode VAYAR card anda.." type="text"/>
                                            </div>
                                        </div>
                                        <input class=" block w-full max-w-xs mx-auto hover:bg-green-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-2 font-semibold" type="submit" value="Masukkan Data Akun">
                                    </form>
                                @endif
                            </div>
                        </div>
                        <div class="w-full p-3">
                        </div>
                    </div>
                    <div>
                        <form action="{{ route('addtoCo') }}" method="post">
                            @csrf
                            @foreach ($barang as $item)

                                <input type="hidden" name="product_id" value="{{ $item->product_id }}">
                                <input type="hidden" name="quantity" value="{{ $item->quantity }}">
                                <input type="hidden" name="subtotal" value="{{ $item->subtotal }}">
                            @endforeach
                            <input type="hidden" name="total" value="{{ $totalPrice }}">

                            <button type="submit" class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-2 font-semibold">
                                <i class="mdi mdi-lock-outline mr-1"></i> BELI
                            </button>
                           
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function goBack() {
        window.history.back();
    }
    
    function changeBackButtonDirection() {
        if (window.history && window.history.pushState) {
        window.history.pushState(null, null, window.location.href);
        window.addEventListener('popstate', function () {
            window.history.pushState(null, null, window.location.href);
            // Perform any other actions you want when the back button is clicked
        });
        }
    }
    
    changeBackButtonDirection();
</script>
@endsection