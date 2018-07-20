@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
    <h1>Recarregar</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
        <li><a href="{{ route('admin.balance.index') }}"><i class="fa fa-credit-card-alt"></i> Crédito </a></li>
        <li class="active"><a href="{{ route('admin.balance.deposit') }}"><i class="fa fa-cart-plus"></i> Recarregar </a></li>
    </ol>
@stop

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Fazer Recarga</h3>
        </div>
        <form action="{{ route('admin.balance.deposit') }}" method="POST">
            @csrf

            <div class="box-body">
                <div class="form-group">
                    <input type="text" name="value" id="money" class="form-control input-lg" style="font-size: 30px;" placeholder="Valor de Recarga" autofocus>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">Recarregar</button>
            </div>
        </form>
    </div>

@stop
