<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index() {

        $produto = new Produto();
        $produto->nompro = "Teclado";
        $produto->estpro = 120;
        // $produto->save();
        
        $produtos = Produto::all();

        return view('produtos.index', compact('produtos'));

    }

    public function add(){

        return view('produtos.add');
    }

    public function store(Request $request){
        
        $produto = new Produto();
        $produto->nompro = $request->get('nompro');
        $produto->estpro = $request->get('estpro');

        $produto->save();

        return redirect()->route('lista-produtos');
    }
}