<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Programa;
use App\Familia;

use App\Tipo_Familia;
use App\Modo_Captacion;
use App\Evaluacion;

use App\Http\EvaluarRequest;
use DB;

class EvaluarController extends Controller
{
	public function index(Request $request)
    {
       $familia = DB::table('familia')
            ->join('madre', 'familia.Madre_idMadre', '=', 'madre.idMadre')
            ->join('evaluacion','familia.idFamilia','=','evaluacion.Familia_idFamilia')
            ->select('familia.Nom_fam','madre.Madre_nombre','madre.Madre_apel_pa','madre.Madre_apel_ma','madre.Madre_direccion','evaluacion.Estado_Eval')
            ->get();

       return view ("evaluar.evaluar",["famres"=>$familia]);
    }
    public function create(){
    	return view('Evaluar.evaluar');
    }
    public function show($id){
    	return view('Evaluar.evaluar',['familia'=>Familia::findOrFail($id)]);
    }


}