<?php

namespace App\Http\Controllers;

use App\Models\TipoCafe;
use Illuminate\Http\Request;

class TiposCafeController extends Controller
{
    public function index()
    {
        $tiposCafe = TipoCafe::all();
        return view('tipos_cafe.index', compact('tiposCafe'));
    }
}
