<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>{{ $post->head }}</h1></div>

                <div class="card-body">
                    <h2>{!! nl2br($post->summary) !!}</h2>
                    {!! nl2br($post->body) !!}
                </div>
            </div>
        </div>
    </div>
</div>