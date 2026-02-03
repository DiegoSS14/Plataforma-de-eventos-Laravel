@extends('layouts.main')

@section('title', 'Contatos')

@section('content')
<h1>Página de contatos</h1>
<h1>Teste de cor</h1>

<img src="/images/fred-moon-hjtaJzcANL4-unsplash.jpg" alt="show">

{{-- @if($nome == "Diego")
<h2>{{$nome}}</h2>
<span>Trabalha como {{$profissao}} e tem {{$idade}} anos</span>
@elseif($nome == "Ribamilson")
<h2>{{$nome}}</h2>
<span>Não trabalha, idade não identificada</span>
@endif --}}

<ol>
    @for($i = 0; $i < count($nomes); $i++)
    <li>
        {{ $nomes[$i] }} - indice {{ $i }}
    </li>
    @endfor
</ol>

<ul>
    @foreach($numeros as $numero)
    <li>{{$numero}} - indice {{ $loop->index }}</li>
    @endforeach
</ul>

@endsection
