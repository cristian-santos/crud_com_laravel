<?php

namespace App\Http\Controllers;

use App\Models\ModelAutor;
use App\Models\ModelBook;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nome_autor'    => 'required|unique:tbl_autor',
            'dt_nasc'      => 'required'
        ],[
            'required' => 'Campo obrigatório',
            'unique'   => 'Esse registro já consta em nosso sistema'
    
        ]);
    
        $autor = new ModelAutor();
        $autor->nome_autor = $request->nome_autor;
        $autor->data_nasc  = $request->dt_nasc;
        $autor->save();
        
        return redirect()
                    ->route('autor.create')
                    ->with('success', 'autor registrado com sucesso');
        }

    public function show($id)
    {
        //   
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
       //
    }

    public function destroy($id)
    {
       //
    }
}
