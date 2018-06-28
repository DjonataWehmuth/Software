@extends('adminlte::page')

@section('title', "$registro->nome")

@section('content')
<div class="col-md-12">
  <div class="box box-{{$registro->Situacao->cor}}">
    <div class="box-header with-border">
      <h3 class="box-title">{{$registro->nome}} - {{$registro->Situacao->nome}}</h3>
    </div>
    <div class="box-body col-md-12">
      <form role="form" autocomplete="off" method="post" id="cadastro" action="{{route($tabela->alterarregistro)}}">
      {{ csrf_field() }}
      
      <input name="id" type="number" hidden value="{{$registro->id }}">          

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
                        {{ $somenteleitura }}
                        {{$campo->somenteleitura}}
                        name="{{$campo->nome}}" type="{{$campo->tipo}}" class="form-control" onkeyup="maiuscula(this)" maxlength="{{$campo->caracteres}}" placeholder="{{$campo->descricao}}" value="{{$registro{$campo->nome} }}" {{$campo->obrigatorio}}>
                </div>
              </div>

            @elseif($campo->componente === 'select')
              <div class="form-group {{$campo->tamanhof}}">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-{{$campo->icone}}"></i>
                  </div>
                  <select {{ $somenteleitura }} carregar-input data-tabela="{{$campo->tabelareferencia}}" data-selecionado="{{$registro{$campo->nome} }}" name="{{$campo->nome}}" id="{{$campo->nome}}" class="form-control" {{$campo->obrigatorio}}>
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
                 <textarea {{ $somenteleitura }} {{$campo->somenteleitura}} name="{{$campo->nome}}" rows="{{$campo->tamanho}}" class="form-control" onkeyup="maiuscula(this)" placeholder="{{$campo->descricao}}" {{$campo->obrigatorio}}>{{$registro{$campo->nome} }}</textarea>
                </div>
              </div>
            @endif
          @endforeach
      </form>
    </div>
    <div class="box-footer">

    <div class="btn-group">
      <a href="#" class="btn btn-app btn-primary"><i class="fa fa-step-backward"></i> Voltar</a>

        @foreach($botoes as $botao)
          @if(in_array($registro->status_id, explode(',' ,$botao->situacao )))            
            @if($botao->tipo === 'submit')
              <button form="cadastro" type="{{$botao->tipo}}" class="btn btn-app btn-{{$botao->cor}}"><i class="fa fa-{{$botao->icone}}"></i> {{$botao->nome}}</button>
            @elseif($botao->tipo === 'acao')
              <form hidden method="POST" action="{{route($botao->url)}}" id="form{{$botao->nome}}">
                {{ csrf_field() }}
                <input hidden name='acao' value='{{$botao->acao}}'>
                <input hidden name='id' value='{{$registro->id}}'>
              </form>
              <button form="form{{$botao->nome}}" type="{{$botao->tipo}}" class="btn btn-app btn-{{$botao->cor}}"><i class="fa fa-{{$botao->icone}}"></i> {{$botao->nome}}</button>
            @elseif($botao->tipo === 'link')
              <a href="{{$botao->url}}" class="btn btn-app btn-{{$botao->cor}}"><i class="fa fa-{{$botao->icone}}"></i> {{$botao->nome}}</a>
            @endif
          @endif
        @endforeach

    </div>
  </div>
</div>
@stop
@section('js')
<script type="text/javascript">
    var carregado = [];

    $('[carregar-input]').each(function(){
        eval($(this).data('onload')
        , CarregarCombo(this.getAttribute('data-tabela'), this.name, this.getAttribute('data-selecionado'))
        );
    });

    function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    };	
    
    function CarregarCombo(tabela, campo, selecionado){
      if (carregado.indexOf(tabela) === -1 ){
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

                    $(selectbox).val( 
                        $('option[value='+selecionado+']').val()
                    );
                }
            }
        });
        carregado.push(tabela);
      }};
	</script>		
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
@stop