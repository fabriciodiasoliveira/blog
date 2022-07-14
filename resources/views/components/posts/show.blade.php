<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h1>{{ $post->head }}</h1></div>

            <div class="card-body">
                <h2>{!! $post->summary !!}</h2>
                {!! $post->body !!}
                <div class="text-end"><small><i>{{ $post->name }}</i></small></div>
                @if(Auth::user() != null && Auth::user()->tipo == 'admin')
                <div class="card">
                    <div class="card-header">Área do administrador</div>

                    <div class="card-body">
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
                @endif
            </div>
        </div>
    </div>
</div>