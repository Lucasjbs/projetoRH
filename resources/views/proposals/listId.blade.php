@extends('layouts.layout-template')
@section('title', 'Listar por proposta - Emprego e Carreira')
@section('content')
<div class="container">
    <h2>Proposta de trabalho:</h2>
    <div class='row'>
        <div class='card p-2 my-3'>
            <div class='col-md-9 p-3'>
                <h4>Título: {{$proposal->title}}</h4>
                <p>
                    <strong>Autor:</strong> {{$proposal->author}} <br>
                    <strong>Email:</strong> {{$proposal->email}} <br>
                    <strong>Valor do Trabalho:</strong> {{$proposal->value}} <br>
                    <strong>Criado em:</strong> {{$proposal->created_at}} <br>
                    <strong>Descrição:</strong> {{$proposal->description}} <br>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection