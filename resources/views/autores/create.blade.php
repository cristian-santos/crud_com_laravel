@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar Autor</h1> <hr>
    <div class="col-8 m-auto" style="width: 400px">
        {{-- @if($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors as $erro)
        <li>{{$erro}}</li>
        @endforeach
        </div>
        @endif --}}
        <form name="formCad" id="formCad" method="post" action="{{route('autor.store')}}">
            @csrf
            <input class="form-control @error('nome_autor') is-invalid @enderror" type="text" name="nome_autor" id="nome_autor" placeholder="Nome do autor:" >
            @error('nome_autor')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror <br>
            
            <input class="form-control @error('dt_nasc') is-invalid @enderror" type="text" name="dt_nasc" id="dt_nasc" placeholder="Data de nascimento" >
            @error('dt_nasc')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror<br>

            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>

    <script>
       $(function() {
    $("#dt_nasc").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
});
    </script>
@endsection

