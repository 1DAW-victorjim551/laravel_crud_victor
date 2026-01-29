<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Schema;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        $headers = Schema::getColumnListing((new Usuario)->getTable());
        return view('usuarios.index', compact('usuarios', 'headers'));

        
    }

}
