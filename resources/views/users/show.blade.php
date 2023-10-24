@extends('layouts.app')

@section('content')
  <a href="{{ route('users-index') }}">Voltar</a>
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <label for="nome">Nome</label>
              <p>{{ $user->name }}</p>

              <label for="email">Email</label>
              <p>{{ $user->email }}</p>
          </div>
      </div>
  </div>
@endsection