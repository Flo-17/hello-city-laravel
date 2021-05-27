@extends('base', ['title' => 'About Us'])

@section('content')
    <img src=" {{ asset('/Images/Logo.png') }} " alt="Logo" class="rounded shadow-md my-8 h-24">
    
    <h2 class="text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by Florian C.
    </h2>
    
    <p class="mt-5">
        <a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil.</a>   
    </p>

@endsection