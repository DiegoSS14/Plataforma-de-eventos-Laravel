@extends('layouts.main')

@section('title', 'Criar Evento')
@section('content')
    <div class="col-md-6 offset-md-3" id="event-create-container">
        <h1>Crie seu Evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">Evento</label>
                <input type="text" class="from-control" name="title" id="title" placeholder="Nome do evento" required>
            </div>
            <div class="form-group">
                <label for="city">Cidade</label>
                <input type="text" class="from-control" name="city" id="city" placeholder="Local do evento" required>
            </div>
            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select name="private" name="private" id="private" class="form-control" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" name="description" id="description" placeholder="O que vai acontecer no evento..." required></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adicione os itens de infraestrutura</label>
                <div class="form-group form-row">
                    <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
                </div>
                <div class="form-group form-row">
                    <input type="checkbox" name="items[]" value="Palco">Palco
                </div>
                <div class="form-group form-row">
                    <input type="checkbox" name="items[]" value="Open bar">Open bar
                </div>
                <div class="form-group form-row">
                    <input type="checkbox" name="items[]" value="Estacionamento livre">Estacionamento livre
                </div>
                <div class="form-group form-row">
                    <input type="checkbox" name="items[]" value="Open food">Open food
                </div>
                <div class="form-group form-row">
                    <input type="checkbox" name="items[]" value="Premiações">Premiações
                </div>
                <div class="form-group form-row">
                    <input type="checkbox" name="items[]" value="Sorteios">Sorteios
                </div>
            </div>
            <input class="default-button" type="submit" name="send" id="send" value="Criar Evento">
        </form>
    </div>

@endsection
