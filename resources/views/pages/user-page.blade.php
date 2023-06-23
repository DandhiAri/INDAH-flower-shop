@extends('layout.mainH')
@section('title')
    
@endsection
@section('content')
<div class="flex items-center justify-center">
    <div class="max-w-md w-full mx-auto">
      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
          <img class="w-32 h-32 rounded-full mx-auto" src="/img/{{ auth()->user()->image }}" alt="User Avatar">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
            <p class="text-gray-900 font-semibold">{{ auth()->user()->name }}</p>
            {{-- <form action="{{ route('pfpupdate') }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="name" value="{{ auth()->user()->name }}">
            </form> --}}
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username:</label>
          <p class="text-gray-900 font-semibold">{{ auth()->user()->username }}</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address:</label>
          <p class="text-gray-900 font-semibold">{{ auth()->user()->alamat }}</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="number">Number:</label>
          <p class="text-gray-900 font-semibold">{{ auth()->user()->telp }}</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password:</label>
          <p class="text-gray-900 font-semibold">{{ auth()->user()->password }}</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email:</label>
          <p class="text-gray-900 font-semibold">{{ auth()->user()->email }}</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Role:</label>
          <p class="text-gray-900 font-semibold">{{ auth()->user()->role }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection