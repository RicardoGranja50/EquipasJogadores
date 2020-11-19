<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogadores;
class JogadoresController extends Controller
{
    //
    public function index(){

        $jogadores = Jogadores::paginate(4);

        return view ('Jogadores.index',[

            'jogadores'=>$jogadores
        ]);
    }

    public function show(Request $r){

        $idJogador=$r->id;

        $jogador= Jogadores::where('id_jogador',$idJogador)->with('equipas')->first();
        return view('jogadores.show',[
			'jogadores'=>$jogador
		]); 
    }

}
