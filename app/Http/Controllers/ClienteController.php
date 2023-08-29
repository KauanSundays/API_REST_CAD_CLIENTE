<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Observe a capitalização correta
use App\Models\Cliente; // Supondo que seu modelo esteja no namespace 'App\Models'

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required',
            'endereco' => 'required',
            'cidade' => 'required', 
            'cep' => 'required',
            'telefone' => 'required'
        ]);
    }

    public function show($id)
    {
        return Cliente::findOrfail($id);
    }

}
