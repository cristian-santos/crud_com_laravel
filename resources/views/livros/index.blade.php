@extends('templates.template')
<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
@section('content')
    <h1 class="text-center">Crud com Laravel</h1> <hr>

    <div class="text-center mt-3 mb-4">
        <a href="{{route('books.create')}}" style="text-decoration: none">
            <button class="btn btn-outline-success">Cadastrar livro</button>
        </a>
        <a href="{{route('autor.create')}}">
            <button class="btn btn-outline-success">Cadastrar Autor</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table   e class="table text-center">
            <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Id</td>
                    <td>Titulo</td>
                    <td>R$</td>
                    <td>
                        <a href="" style="text-decoration: none">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>

                        <a href=""  style="text-decoration: none">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Id</td>
                    <td>Titulo</td>
                    <td>R$</td>
                    <td>
                        <a href="" style="text-decoration: none">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>

                        <a href=""  style="text-decoration: none">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
