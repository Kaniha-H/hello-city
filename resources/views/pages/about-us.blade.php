@extends('layouts/base', ['title' => 'About us'])

@section('content')
    <img src="{{ asset('/images/akali.jpg') }}" alt="Akali"  class="my-12 rounded-full shadow-md h-32">

    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by Les Teachers du net.
    </h2>

    <p>
        <a href="{{ route('app_home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Back to Homepage</a>
    </p>
@endsection