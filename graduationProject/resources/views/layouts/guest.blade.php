
@extends('layouts.master')

@section('head')
   
@endsection

@section('content')
    
    {{ $slot }}
@endsection

@vite(['resources/css/app.css', 'resources/js/app.js'])