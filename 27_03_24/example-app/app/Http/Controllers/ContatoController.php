<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(Request $req){
        $contato = Contato::all();
        return view('welcome')->with("contato", $contato);
    }
    public function adicionar(Request $req){
        $contato = new Contato;
        $contato->nome = $req->nome;
        $contato->telefone = $req->telefone;
        $contato->origem = $req->origem;
        $contato->datacontato = $req->datacontato;
        $contato->observacao = $req->observacao;
        $contato->save();
        return redirect()->back();
    }
    public function editar($id){
        $contato = Contato::find($id);
        return view('editar')->with("contato", $contato);
    }
    public function atualizar(Resquest $req){
        $contato = Contato::find($req->id);
        $contato->update(
            [
                "nome" => $req->nome,
                "telefone" => $req->telefone,
                "origem" => $req-> origem,
                "datacontato" => $req-> datacontato,
                "observacao" => $req-> observacao
            ]
            );
            return redirect()->back();


    }

    public function excluir(Request $req){
        $contato = Contato::find($req->id);
        $contato->delete();
        return redirect()->back();
    }
}
