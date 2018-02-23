@extends('adminlte::page')

@section('title', config('app.name', 'Laravel'))

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<p>Bem-vindo {{ Auth::user()->name }}, você está logado.</p>
@stop