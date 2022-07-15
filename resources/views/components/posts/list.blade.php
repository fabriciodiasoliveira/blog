
@php
$col = array (
array(3,3,6),
array(6,3,3),
array(2,2,8),
array(8,2,2),
array(2,8,2),
array(2,4,2),
array(6,3,2),
);
$x = 0;
$y = rand(0,3);
@endphp
<div class="row">
    @foreach ($posts as $post)
    <div class="col-md-{{$col[$y][$x]}}">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('post.show.visit', $post->id) }}">
                    <div style="
                         background: gray;
                         border-radius: 10px;
                         color: white;
                         ">
                        <h2>{{ $post->head }}</h2>
                    </div>
                    {!! $post->summary !!}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-end"><small><i>{{ $post->name }}</i></small> - <i> Adicionado em {{ date('d/m/Y - H:i:s', strtotime($post->created_at)) }}</i></small></div>
            </div>
            <div class="col-md-12">
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
        @php $x++; @endphp
    </div>
    @if($x == 3)
</div>
<div class="row">
    @php $x = 0; $y = rand(0,count($col)-1); @endphp
    @endif
    @endforeach
</div>

<div class="d-flex">
    {!! $posts->links('pagination::bootstrap-4') !!}
</div>
