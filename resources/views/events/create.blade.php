@extends('layouts.main')

@section('title', 'Criar Evento')
@section('content')

@if (!empty($event))
    <h1>Evento : {{ $event }}</h1>
@else
    <h1>Criar Evento</h1>
@endif

@endsection
