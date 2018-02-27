@extends('adminlte::page') 

@section('title', config('app.name', 'Laravel')) 

@section('content_header')
<h1>Usuários</h1>
@stop 

@section('content') 
<table class="table table-condensed">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Nome</th>
            <th class="text-center">E-mail</th>
            <th class="text-center">Opções</th>
        </tr>
    </thead>
    @foreach ($users as $user)
        <tbody>
            <tr>
                <th class="text-center">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Visualizar usuário">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Alterar usuário">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Excluir usuário">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    @endforeach
    <tfoot>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Nome</th>
            <th class="text-center">E-mail</th>
            <th class="text-center">Opções</th>            
        </tr>
    </tfoot>
</table>
@endsection 