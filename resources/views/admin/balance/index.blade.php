@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
    <h1>Crédito</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
        <li class="active"><a href="{{ route('admin.balance.index') }}"><i class="fa fa-credit-card-alt"></i> Crédito </a></li>
    </ol>
@stop

@section('content')

    <div class="box box-success">
        <div class="box-header">
            <a href="{{ route('admin.balance.deposit') }}" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Recarregar</a>

            @if ($amount)
            <a href="#" class="btn btn-danger"><i class="fa fa-cart-arrow-down"></i> Sacar</a>
            <a href="#" class="btn btn-warning"><i class="fa fa-exchange"></i> Transferir</a>
            @endif

        </div>
        <div class="box-body">
            <div class="small-box bg-green" style="margin-bottom: 0">
                <div class="inner">
                    <p>Saldo atual</p>
                    <h3>R$ {{ number_format($amount, 2, ",", ".") }}</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
            </div>
        </div>
    </div>

@stop
