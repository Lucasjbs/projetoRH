@extends('layouts.template')
@section('title', 'Editar proposta - Emprego e Carreira')
@section('content')
<div class="container">
    <h2>Preencha o formulário para editar sua proposta:</h2>
    <form method="POST" action="{{route('propostas.editarbd', $proposta->id)}}">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Meu Nome" value="{{$proposta->autor}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Meu Email" value="{{$proposta->email}}">
        </div>
        <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name="titulo" placeholder="Título da proposta" value="{{$proposta->titulo}}">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input type="number" class="form-control" name="valor" placeholder="Valor do serviço" value="{{$proposta->valor}}">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea type="text" class="form-control" name="descricao" placeholder="Descrição do serviço" rows="3">{{$proposta->descricao}}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
@endsection