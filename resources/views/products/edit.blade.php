@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Modifica prodotto: {{ $product->id }}</h1>

    <form action="{{ route('products.update', $product->id) }}" method="post">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="name">Nome</label>
        <input class="form-control" type="text" name="name" value="{{ $product->name }}">
      </div>
      <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" name="description">{{ $product->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="price">Prezzo</label>
        <input class="form-control" type="text" name="price" value="{{ $product->price }}">
      </div>
      <div class="form-group">
        <input class="form-control btn btn-success" type="submit" value="Salva">
      </div>
    </form>
  </div>
@endsection
