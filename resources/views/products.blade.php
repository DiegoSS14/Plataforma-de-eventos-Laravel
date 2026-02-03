@extends('layouts.main')
@section('title', 'Products')

@section('content')

<h1>Página de produtos</h1>

@if (!empty($busca))
    <span>Buscando por {{ $busca }}</span>
@endif

@endsection
