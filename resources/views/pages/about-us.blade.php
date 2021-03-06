@extends('base')

@section('title', 'About us | ' . config('app.name'))

@section('content')
        <p>Built with &hearts; by Les Teachers du net.</p>

        <p><a href="{{ route('app_home') }}">Back to Homepage</a></p>
@endsection