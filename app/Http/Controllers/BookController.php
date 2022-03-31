<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\ModelAutor;

class BookController extends Controller
{
    public function index()
    {
        return view('livros.index');
    }

    public function create()
    {
        $autores = ModelAutor::get();
        return view('livros.create', compact('autores'));
    }

    public function store(BookRequest $request)
    {
        
        return view('livros.create');
    }

    public function show($id)
    {
        
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