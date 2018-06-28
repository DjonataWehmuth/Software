@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Bem vindo</h1>
@stop

@section('content')
    @foreach($paineis as $painel)
    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-{{$painel->cor}}">
            <span class="info-box-icon"><i class="fa fa-{{$painel->icone}}"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{$painel->nome}}</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
    @endforeach
@stop
