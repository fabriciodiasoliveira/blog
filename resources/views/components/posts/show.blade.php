<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>{{ $post->head }}</h1></div>

                <div class="card-body">
                    <h2>{!! nl2br(e($post->summary)) !!}</h2>
                    {!! $post->body !!}
                    <div class="text-end"><small><i>{{ $post->name }}</i></small></div>
                </div>
            </div>
        </div>
    </div>
</div>