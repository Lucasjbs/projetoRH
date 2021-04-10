@extends('layouts.template')
@section('title', 'Lista - Emprego e Carreira')
@section('content')
<div class="container">
    <h2>Propostas de trabalho disponíeis no site:</h2>
    <div class='row'>
        <div class='card p-2 my-3'>
            <div class='col-md-9 p-3'>
                @foreach($propostas as $proposta)
                <h3>{{$proposta->titulo}}</h3>
                <p>
                    <strong>Autor:</strong> {{$proposta->autor}} <br>
                    <strong>Email:</strong> {{$proposta->email}} <br>
                    <strong>Criado em:</strong> {{$proposta->created_at}} <br>
                    <strong>Descrição:</strong> {{$proposta->descricao}} <br>
                </p>
                <form class="custom-btn-block" method="GET" action="{{route('propostas.listasid', $proposta->id)}}">
                    <button type="submit" class="btn btn-primary">Acessar</button>
                </form>
                <form class="custom-btn-block" method="GET" action="{{route('propostas.editar', $proposta->id)}}">
                    <button type="submit" class="btn btn-warning">Editar</button>
                </form>
                <form class="custom-btn-block" method="POST" action="{{route('propostas.deletar', $proposta->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                <hr>
                @endforeach
                </div>
            </div>
        </div>
    {{$propostas->links()}}
</div>
@endsection