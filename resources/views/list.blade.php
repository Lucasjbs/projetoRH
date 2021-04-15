@extends('layouts.layout-template')
@section('title', 'Lista - Emprego e Carreira')
@section('content')
<div class="container">
    <h2>Propostas de trabalho disponíeis no site:</h2>
    <div class='row'>
        <div class='card p-2 my-3'>
            <div class='col-md-9 p-3'>
                @foreach($proposals as $proposal)
                <h3>{{$proposal->title}}</h3>
                <p>
                    <strong>Autor:</strong> {{$proposal->author}} <br>
                    <strong>Email:</strong> {{$proposal->email}} <br>
                    <strong>Criado em:</strong> {{$proposal->created_at}} <br>
                    <strong>Descrição:</strong> {{$proposal->description}} <br>
                </p>
                <form class="custom-btn-block" method="GET" action="{{route('listId.get.view.proposal.{id}', $proposal->id)}}">
                    <button type="submit" class="btn btn-primary">Acessar</button>
                </form>
                <form class="custom-btn-block" method="GET" action="{{route('edit.get.view.proposal.{id}', $proposal->id)}}">
                    <button type="submit" class="btn btn-warning">Editar</button>
                </form>
                <form class="custom-btn-block" method="POST" action="{{route('list.delete.proposal.{id}', $proposal->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                <hr>
                @endforeach
                </div>
            </div>
        </div>
    {{$proposals->links()}}
</div>
@endsection