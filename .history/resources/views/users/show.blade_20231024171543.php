@extends('layouts.app')

@section('content')
  <a href="{{ route('aves-index') }}">Voltar</a>
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <label for="nome">Nome</label>
              <p>{{ $ave->nome }}</p>

              <label for="descricao">Descrição</label>
              <p>{{ $ave->descricao }}</p>
          </div>
      </div>
  </div>
@endsection