@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <livewire:counter />
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h1>Lista</h1>
                        <a href="{{ route('users-create') }}" class="btn btn-primary">Novo registro</a>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col"><center>Ações</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>                                
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('users-show', $user->id) }}" class="btn btn-info mr-1" >Detalhes</a>    
                                    <a href="{{ route('users-edit', $user->id) }}" class="btn btn-warning mr-1" >Editar</a> 
                                    <form action="{{ route('users-destroy', $user->id) }}" method="POST">   
                                        @csrf
                                        @method('DELETE')      
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>                     
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @livewireScripts
        </body>
        </html>
    </div>
@endsection