@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @component('components.posts.anuncio', compact ('anuncio'))@endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @component('components.posts.show', compact ('post'))@endcomponent
        </div>
    </div>
</div>
@endsection