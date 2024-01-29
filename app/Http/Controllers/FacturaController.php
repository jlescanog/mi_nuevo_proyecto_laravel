<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    //
    public function create()
    {
        return view('FactuaController.create');
    }
}
