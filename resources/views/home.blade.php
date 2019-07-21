@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>HOME</h1>
    <h2>Bienvenid@ {{ $nombre ?? 'Invitado' }}</h2>
@endsection
