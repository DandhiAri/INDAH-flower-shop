@extends('layout.mainH')
@section('title')
    
@endsection
@section('content')
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        @foreach ($products as $item)
            <a href="{{ route('product',['slug'=>$item->slug]) }}" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                  <img src="/img/product/{{ $item->image }}" alt="{{ $item->image }}" style="height:350px">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">{{ $item->name }}</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Rp.{{ $item->price }}</p>
            </a>
        @endforeach
    </div>
  </div>
</div>

@endsection