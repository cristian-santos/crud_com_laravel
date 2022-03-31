@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar Livro</h1> <hr>

    <div class="col-8 m-auto" style="width: 500px">

        <form name="formCad" id="formCad" method="post" action="{{route('books.store')}}">
            @csrf
            <input class="form-control" type="text" name="nome_livro" id="nome_livro" placeholder="Nome do livro:" value="{{old('nome_livro')}}"><br>
            <select class="form-control select2" style="width: 100%" name="nome_autor" id="nome_autor" placeholder="Nome do autor">
                <option>--Selecione o autor--</option>
                 @foreach($autores as $autor)
                    <option value="{{$autor->nome_autor}}">{{$autor->nome_autor}}</option>
                    @endforeach
              </select><br><br>

            <input class="form-control" type="text" name="qtd_pag" id="qtd_pag" placeholder="Páginas:" value="{{old('qtd_pag')}}"><br>
            <input class="form-control" type="text" name="preco" id="preco" placeholder="Preço:" value="{{old('preco')}}"><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>


<script> 
   $(document).ready(function(){
    $('#nome_autor').select2({
    escapeMarkup: function(data) { 
        return data; 
    }
    })
})

</script>

@endsection