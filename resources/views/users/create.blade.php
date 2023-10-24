@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{ route('users-index') }}">Voltar</a>
        <div class="container">
            <form action="{{ route('users-store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="text" class="form-control" name="password" placeholder="Senha">
                    </div>
                </div>
                <input type="submit" class="btn btn-danger">
            </form>
        </div>
    </div>
@endsection