<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\http\Controllers\Controller;
use app\models\Cliente; 

class ClienteController extends Controller
{ 
    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

}
