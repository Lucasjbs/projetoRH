@extends('layouts.layout-template')
@section('title', 'Editar proposta - Emprego e Carreira')
@section('content')
<div class="container">
    <h2>Preencha o formulário para editar sua proposta:</h2>
    <form method="POST" action="{{route('proposals.put.edit', $proposal->id)}}">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="author" placeholder="Meu Nome" value="{{$proposal->author}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Meu Email" value="{{$proposal->email}}">
        </div>
        <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name="title" placeholder="Título da proposta" value="{{$proposal->title}}">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input type="number" class="form-control" name="value" placeholder="Valor do serviço" value="{{$proposal->value}}">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea type="text" class="form-control" name="description" placeholder="Descrição do serviço" rows="3">{{$proposal->description}}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
@endsection