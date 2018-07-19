@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
    <h1>Saldo</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
        <li class="active"><a href=""><i class="fa fa-credit-card-alt"></i> Saldo </a></li>
    </ol>
@stop

@section('content')
    <p>Está é a página de Saldos</p>
@stop
