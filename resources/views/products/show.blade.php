@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Prodotto: {{ $product->id }}</h1>
    <ul>
      <li>Name: {{ $product->name }}</li>
      <li>Description: {{ $product->description }}</li>
      <li>Price: {{ $product->price }}</li>
    </ul>
  </div>


@endsection
