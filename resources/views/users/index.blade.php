@extends('adminlte::page') 

@section('title', config('app.name', 'Laravel')) 

@section('content_header')
<h1>Usuários</h1>
@stop 

@section('content') 
<table class="table table-condensed">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Opções</th>
        </tr>
    </thead>
    @foreach ($users as $user)
        <tbody>
            <tr>
                <th>{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="#" class="btn btn-outline-warning">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    @endforeach
    <tfoot>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Opções</th>            
        </tr>
    </tfoot>
</table>
@stop 
