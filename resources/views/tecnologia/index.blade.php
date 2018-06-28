@extends('adminlte::page')

@section('title', "$tabela->nome")

@section('content_header')
<h1>{{$tabela->descricao}}</h1>
@stop

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
        @foreach($campos as $campo)
          @if($campo->ehgrid === 'S')
            <th scope="col">{{$campo->titulo}}</th>
          @endif
        @endforeach
    </tr>
  </thead>
  <tbody>
    @foreach($dados as $dado)
      <tr class="box box-{{$dado->Situacao->cor}}" onclick="AbrirRegistro('{{route($tabela->formularioconsulta, ['id'=>$dado->id])}}')">
        <td scope="row">{{$dado->id}}</td>
          @foreach($campos as $campo)
            @if($campo->ehgrid === 'S')
              <td scope="col">{{$dado{$campo->nome} }}</td>
            @endif
          @endforeach
      </tr>
    @endforeach
  </tbody>
</table>

<a type="button" href="{{route($tabela->formularionovo)}}" class="btn btn-app btn-primary"><i class="fa fa-plus-square"></i>Incluir</a>

@stop
@section('js')

<script>
function AbrirRegistro(link){
    document.location.assign(link);
  };
</script>

@stop