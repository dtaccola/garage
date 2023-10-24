@extends('layouts.app')

@section('content')
  <a href="{{ route('users-index') }}">Voltar</a>
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <label for="nome">Nome</label>
              <p>{{ $user->nome }}</p>

              <label for="descricao">Descrição</label>
              <p>{{ $user->descricao }}</p>
          </div>
      </div>
  </div>
@endsection