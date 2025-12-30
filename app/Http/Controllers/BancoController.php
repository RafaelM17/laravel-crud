<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\BancoModel;

class BancoController extends Controller
{
    public function index()
    {
        $nomes  =  BancoModel::all();
       return view('banco', compact('nomes'));
        
    }

    public function store(Request $request) 
    {
        BancoModel::create([
            'nome' => $request->nome
        ]);
        
        return  redirect('/banco');
    
    }

    public function atualizar(Request $request, $id)
    {
        $registro = BancoModel::find($id);

        if ($registro) {
            $registro->update([
                'nome' => $request->nome
            ]);
        }

        return redirect('/banco');
    }

    public function apagar($id)
    {
        BancoModel::destroy($id);
        return redirect('/banco');
    }
    
}
