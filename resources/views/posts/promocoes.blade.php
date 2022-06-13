<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        @component('components.helpers.headers')@endcomponent
        <!-- Styles -->
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1>Atenção para nossas promoções</h1>
                        </div>
                        @foreach($mercadorias as $mercadoria)
                        <div class="carousel-item">
                            <a href="{{ route('mercadoria.show.one', ['id' => $mercadoria->id]) }}">
                                <h1>{{ $mercadoria->nome }}</h1>
                                <img src="{{'/'.config('pasta.miniatura', 'Laravel').$mercadoria->foto }}" alt="Foto do {{ $mercadoria->nome }}">
                                {{ $mercadoria->preco }}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </body>
</html>