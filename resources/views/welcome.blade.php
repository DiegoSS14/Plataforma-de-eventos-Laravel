@extends('layouts.main')
@section('title', 'Home')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" name="search" id="form-control" placeholder="Buscar eventos...">
            <input type="submit" value="Buscar">
        </form>
    </div>
    <div class="nextevents">
        <div>
            <h2>Próximos eventos</h2>
            <p>Veja os eventos dos próximos dias</p>
        </div>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="cards col-md-3">
                    <span>19/05/2026</span>
                    <h3>{{ $event->title }}</h3>
                    <p>{{ $event->description }}</p>
                    <button class="default-button">Saber mais</button>
                </div>
            @endforeach
        </div>
    </div>
@endsection
