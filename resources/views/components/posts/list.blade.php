
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
                <a href="{{ route('post.show.visit', $post->id) }}"><h2>{{ $post->head }}</h2>
                        {!! $post->summary !!}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-end"><small><i>{{ $post->name }}</i></small> - <i> Adicionado em {{ date('d/m/Y - H:i:s', strtotime($post->created_at)) }}</i></small></div>
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
