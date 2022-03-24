@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar Livro</h1> <hr>

    <div class="col-8 m-auto">

        <form name="formCad" id="formCad" method="post" action="">
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Título:" value="" required><br>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="">selecione</option>
                    <option value="">1</option>
            </select><br>

            <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas:" value="" required><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço:" value="" required><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection