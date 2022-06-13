@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 text-center">
        <h2>{{ $mercadoria->nome }}<div class="animate__animated animate__heartBeat animate__infinite infinite">{{ $mercadoria->preco_formatado }}</div></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-3 animate__animated animate__zoomIn">
        <img src="{{'/'.config('pasta.foto', 'Laravel').$mercadoria->foto }}" alt="Foto do {{ $mercadoria->nome }}">
    </div>
    <div class="col-md-1">
        
    </div>
    <div class="col-md-8">
        {!! nl2br($mercadoria_detalhes->descricao) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-1">
        
    </div>
    <div class="col-md-11">
        {!! nl2br($mercadoria_detalhes->especificacao) !!}
    </div>
</div>
@endsection