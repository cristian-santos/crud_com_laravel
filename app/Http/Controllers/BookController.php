<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function index()
    {
        return view('livros.index');
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(BookRequest $request)
    {
        //
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