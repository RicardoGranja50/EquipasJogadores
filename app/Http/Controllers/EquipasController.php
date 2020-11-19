<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipas;
class EquipasController extends Controller
{
    //

    public function index(){

        $equipas = Equipas::paginate(4);

        return view ('Equipas.index',[

            'equipas'=>$equipas
        ]);
    }

    public function show(Request $r){

        $idEquipa=$r->id;

        $equipa= Equipas::where('id_equipa',$idEquipa)->with('jogadores')->first();

        return view('equipas.show',[
			'equipas'=>$equipa
		]); 
    }
}
