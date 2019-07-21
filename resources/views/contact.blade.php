@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input type="text" placeholder="Nombre..."><br>
        <input type="email" name="email" placeholder="Email... "><br>
        <input type="subject" placeholder="Asunto..."><br>
        <textarea name="content" placeholder="Mensaje... "></textarea><br>
        {{-- Texto --}}

        <button>Enviar</button>
    </form>
@endsection
