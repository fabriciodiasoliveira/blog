<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="{{ asset('js/app.js') }}" ></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    </head>
    <body>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1>Últimas postagens</h1>
                </div>

            @foreach ($posts as $post)
                <div class="carousel-item">
                    <a href="{{ route('post.show.visit', $post->id) }}"><h2>{{ $post->head }}</h2>
                        {!! $post->summary !!}</a>
                </div>
            @endforeach
            </div>
        </div>




    </body>
</html>


