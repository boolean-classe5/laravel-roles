@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br>

                    @if (Auth::user()->hasRole('admin'))
                      Sei un amministratore
                    @elseif (Auth::user()->hasRole('customer'))
                      Sei un cliente
                    @else
                      Non sei un amministratore né un cliente
                    @endif

                    <br>

                    @if (Auth::user()->can('edit_product'))
                      Puoi modificare e gestire i prodotti
                    @elseif (Auth::user()->can('view_product'))
                      Puoi vedere i prodotti
                    @else
                      Non puoi fare niente
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
