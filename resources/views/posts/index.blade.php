@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 d-flex justify-content-center">
        <div class="card" style="width: 50%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Postagens</h5>
                    <div class="col-md-12">
                        <a class="btn btn-primary" href="{{ route("post.create") }}">Nova postagem</a>
                    </div>
                    <p class="card-text">Minhas postagens</p>
                    @foreach ($posts as $post)
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><a href="{{ route('post.show', $post->id) }}"><h2>{{ $post->head }}</h2></a></div>

                                <div class="card-body">
                                    {{ $post->summary }} - <h6><i>{{ $post->updated_at }}</i></h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex">
                          {!! $posts->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
        </div>
    </div>

</div>
@endsection