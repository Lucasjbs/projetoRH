@extends('layouts.template')
@section('title', 'Listar por proposta - Emprego e Carreira')
@section('content')
<div class="container">
    <h2>Proposta de trabalho:</h2>
    <div class='row'>
        <div class='card p-2 my-3'>
            <div class='col-md-9 p-3'>
                <h4>Título: {{$proposta->titulo}}</h4>
                <p>
                    <strong>Autor:</strong> {{$proposta->autor}} <br>
                    <strong>Email:</strong> {{$proposta->email}} <br>
                    <strong>Valor do Trabalho:</strong> {{$proposta->valor}} <br>
                    <strong>Criado em:</strong> {{$proposta->created_at}} <br>
                    <strong>Descrição:</strong> {{$proposta->descricao}} <br>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection