@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Crea un nuovo prodotto</h1>

    <form action="{{ route('products.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Nome</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="price">Prezzo</label>
        <input class="form-control" type="text" name="price">
      </div>
      <div class="form-group">
        <input class="form-control btn btn-success" type="submit" value="Salva">
      </div>
    </form>
  </div>
@endsection
