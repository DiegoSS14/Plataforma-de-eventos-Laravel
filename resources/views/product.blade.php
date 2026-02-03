@extends('layouts.main')
@section('title', 'Product')

@section('content')

@if (!empty($id))
    <span>Product id: <strong>{{ $id }}</strong></span>
@else
    <span>Product not found!</strong></span>
@endif

@endsection
