@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>@lang('Home')</h1>
    <h2>Bienvenid@ {{ $nombre ?? 'Invitado' }}</h2>
@endsection
