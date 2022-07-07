<div class="card">
    <div class="card-header"><h1>{{ $anuncio->head }}</h1></div>

    <div class="card-body">
        <h2>{!! $anuncio->summary !!}</h2>
        {!! $anuncio->body !!}
        <div class="text-end card-text"><small><i>{{ $anuncio->name }}</i></small></div>
        @auth
        <div class="card-text">@if(Auth::user()->tipo == 'admin')<a class="btn btn-primary rounded-pill" href="{{ route('post.edit', $anuncio->id) }}"> Alterar</a>@endif</div>
        @endauth
    </div>
</div>