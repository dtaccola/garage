@extends('layouts.app')

@section('content')
  <a href="{{ route('users-index') }}">Voltar</a>
  <div class="container">
      <form action="{{ route('users-update', $user->id) }}" method="POST">
          @csrf          
          <div class="form-group">
              <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" name="nome" placeholder="Nome do usuário" value="{{ $user->name }}">
              </div>
              <div class="form-group">
                  <label for="nome_cientifico">Nome científico</label>
                  <input type="text" class="form-control" name="nome_cientifico" placeholder="Nome científico do animal" value="{{ $ave->nome_cientifico }}">
              </div>
          </div>
          <input type="submit" class="btn btn-danger">
      </form>
  </div>
@endsection