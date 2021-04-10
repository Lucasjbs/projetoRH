@extends('layouts.template')
@section('title', 'Enviar uma proposta - Emprego e Carreira')
@section('content')
<div class="container">
    <h2>Preencha o formulário para enviar sua proposta:</h2>
    <form method="POST" action="{{route('propostas.inserir')}}">
        @csrf
        <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name="titulo" placeholder="Título da proposta">
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Meu nome">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="exemplo@gmail.com">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input type="number" class="form-control" name="valor" placeholder="Valor do serviço">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea type="text" class="form-control" name="descricao" placeholder="Descrição do serviço" rows="3"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection