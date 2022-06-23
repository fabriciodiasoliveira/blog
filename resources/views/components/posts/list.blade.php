
@php
 $col = array (
  array(3,3,6),
  array(6,3,3),
  array(2,2,8),
  array(4,4,4),
);
 $x = 0;
 $y = rand(0,3);
@endphp
<div class="row">
@foreach ($posts as $post)
    <div class="col-md-{{$col[$y][$x]}}">
        <div class="card">
            <div class="card-header"><a href="{{ route('post.show.visit', $post->id) }}"><h2>{{ $post->head }}</h2></a></div>

            <div class="card-body">
                {{ $post->summary }}
                <div class="text-end"><small><i>{{ $post->name }}</i></small> - <i> Adicionado em {{ date('d/m/Y - H:i:s', strtotime($post->created_at)) }}</i></small></div>
                @php $x++; @endphp
            </div>
        </div>
    </div>
@if($x == 3)
</div>
<div class="row">
@php $x = 0; $y = rand(0,3); @endphp
@endif
@endforeach
</div>

<div class="d-flex">
          {!! $posts->links('pagination::bootstrap-4') !!}
</div>
