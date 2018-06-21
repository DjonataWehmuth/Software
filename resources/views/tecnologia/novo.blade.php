@extends('adminlte::page')

@section('title', "$tabela->nome")

@section('content')
<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{$tabela->descricao}}</h3>
    </div>
    <div class="box-body col-md-12">

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      
      <form role="form" autocomplete="off" method="post" id="cadastro" action="{{route($tabela->inserirregistro)}}">
      {{ csrf_field() }}
          @foreach($campos as $campo)
          
            @if($campo->componente === 'input')
              <div class="form-group {{$campo->tamanhof}}">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-{{$campo->icone}}"></i>
                 </div>
                 <input 
                        @if ($campo->mascara != '')
                          data-mask="{{$campo->mascara}}" 
                        @endif
                        value="{{ old($campo->nome) }}""
                        name="{{$campo->nome}}" type="{{$campo->tipo}}" class="form-control" onkeyup="maiuscula(this)" maxlength="{{$campo->caracteres}}" placeholder="{{$campo->descricao}}" {{$campo->obrigatorio}}>
                </div>
              </div>

            @elseif($campo->componente === 'select')
              <div class="form-group {{$campo->tamanhof}}">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-{{$campo->icone}}"></i>
                  </div>
                  <select carregar-input data-tabela="{{$campo->tabelareferencia}}" name="{{$campo->nome}}" id="{{$campo->nome}}" class="form-control" {{$campo->obrigatorio}}>
                    <option disabled selected>Carregando...</option>
                  </select>
                </div>
              </div>

            @elseif($campo->componente === 'textarea')
              <div class="form-group col-md-12">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-{{$campo->icone}}"></i>
                 </div>
                 <textarea name="{{$campo->nome}}" rows="{{$campo->tamanho}}" class="form-control" onkeyup="maiuscula(this)" placeholder="{{$campo->descricao}}" {{$campo->obrigatorio}}></textarea>
                </div>
              </div>
            @endif
          @endforeach
      </form>
    </div>
    <div class="box-footer">
      <a href="#" class="btn btn-primary">Cancelar</a>
      <button form="cadastro" type="reset" class="btn btn-primary">Limpar</button>
      <button form="cadastro" type="submit" class="btn btn-primary">Gravar</button>
    </div>
  </div>
</div>
@stop
@section('js')
<script type="text/javascript">
  var carregado = [];

   $('[carregar-input]').each(function(){
        eval($(this).data('onload')
        , CarregarCombo(this.getAttribute('data-tabela'), this.name)
        );
    });

    function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    };	
    
    function CarregarCombo(tabela, campo){
      if (carregado.indexOf(tabela) === -1 ){
        console.log('carregando: ' + tabela);
          $.ajax({
            type: "get",
            url: "/Tecnologia/TabelaComplementar/" + tabela,
            dataType: 'json',
            contentType: "application/json; charset=utf-8",
            
            success: function (obj) {
                if (obj != null) {
                    var data = obj.data;
                    var selectbox = $('#'+campo);
                    selectbox.find('option').remove();

                    $.each(obj, function(key, value) {   
                      $(selectbox)
                        .append($("<option></option>")
                        .attr("value",value.id)
                        .text(value.nome));
                    });
                }
            }
        });
        carregado.push(tabela);
      }};
	</script>		
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
@stop