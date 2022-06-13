@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{ route("mercadoria.create") }}">Novo produto</a>
    </div>
    <div class="col-md-12 d-flex justify-content-center">
        <div class="card" style="width: 50%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Nosso estoque</h5>
                    <p class="card-text">Produtos disponíveis</p>
                    @component('components.mercadoria.list', compact('mercadorias'))@endcomponent
                </div>
        </div>
    </div>
</div>
@endsection