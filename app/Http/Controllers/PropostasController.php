<?php

namespace App\Http\Controllers;

use App\Models\Proposta;
use Illuminate\Http\Request;

class PropostasController extends Controller
{
    public function enviar()
    {
        return view('propostas');
    }

    public function inserir(Request $request){
        if( 
            $request->nome == null || 
            $request->email == null || 
            $request->titulo == null || 
            $request->valor == null || 
            $request->descricao == null
            ){
            return redirect()->route('propostas');
        }

        $propostas = new Proposta();

        $propostas->autor = $request->nome;
        $propostas->email = $request->email;
        $propostas->titulo = $request->titulo;
        $propostas->valor = $request->valor;
        $propostas->descricao = $request->descricao;

        $propostas->save();
        return redirect()->route('propostas.listas');
    }

    public function listar(){
        $propostas = Proposta::paginate();
        return view('listas', ['propostas' => $propostas]);
    }

    public function listarID($id){
        $propostas = Proposta::find($id);
        return view('listasid', ['proposta' => $propostas]);
    }

    public function editar($id){
        $propostas = Proposta::find($id);
        return view('editar', ['proposta' => $propostas]);
    }

    public function editarbd(Request $request, $id){
        if( 
            $request->nome == null || 
            $request->email == null || 
            $request->titulo == null || 
            $request->valor == null || 
            $request->descricao == null
            ){
            return redirect()->route('propostas.listas');
        }

        $propostas = Proposta::find($id);

        $propostas->autor = $request->nome;
        $propostas->email = $request->email;
        $propostas->titulo = $request->titulo;
        $propostas->valor = $request->valor;
        $propostas->descricao = $request->descricao;

        $propostas->save();
        return redirect()->route('propostas.listas');
    }

    public function deletar($id){
        $propostas = Proposta::find($id);
        $propostas->delete();
        return redirect()->route('propostas.listas');
    }
}