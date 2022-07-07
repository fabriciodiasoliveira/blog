@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 d-flex justify-content-center">
        <div class="card" style="width: 50%;">
                <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                <div class="card-body">
                    <h5 class="card-title">Postagens</h5>
                    <div class="col-md-12">
                        <a class="btn btn-primary rounded-pill" href="{{ route("post.create") }}">Nova postagem</a>
                    </div>
                    <p class="card-text">Minhas postagens</p>
                    @foreach ($posts as $post)
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><a href="{{ route('post.show', $post->id) }}"><h2>{{ $post->head }}</h2></a></div>

                                <div class="card-body">
                                    {{!! $post->summary !!}} - <h6><i>{{ $post->updated_at }}</i></h6>
                                    <br><a class="btn btn-primary rounded-pill" href="{{ route('post.edit', $post->id) }}"> Alterar</a>







                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      Deletar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remover postagem</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            Deseja realmente remover a postagem?
                                            <h2>{{ $post->head }}</h2>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-danger" onclick='$("#{{ $post->id }}").submit();'>Deletar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
               
                                    <form id="{{ $post->id }}" action="{{ route ('post.destroy', $post->id) }}" method="post">                                     
                                        {{ csrf_field() }}
                                        <input type='hidden' name='_method' value='DELETE' />
                                    </form>
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