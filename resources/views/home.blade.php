@extends('base')

@section('title', config('app.name'))

@section('content')
    <img src=" {{ asset('/Images/Drapeau_Belge.jpg') }} "  alt="Belgian Flag" class="mt-12 rounded h-44">
    <h1 class="mt-5 mb-5 text-3xl sm:text-5xl font-semibold text-indigo-600"> Hello from Belgium ! </h1>

    <p class="text-lg text-gray-800"> It's currently {{ date('h:i A') }} </p> 
@endsection