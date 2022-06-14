
@php
 $col = array (
  array(3,3,6),
  array(6,3,3),
  array(2,2,8),
  array(4,4,4),
);
 $x = 0;
 $y = 0;
@endphp
<div class="row">
@foreach ($posts as $post)
    <div class="col-md-{{$col[$y][$x]}}">
        <div class="card">
            <div class="card-header">{{ $post->head }}</div>

            <div class="card-body">
                {{ $post->summary }}
                @php $x++; @endphp
            </div>
        </div>
    </div>
@if($x == 3)
</div>
<div class="row">
@php $x = 0; $y++; @endphp
@endif
@if($y == 4)
@php $y = 0; @endphp
@endif
@endforeach
</div>

<div class="d-flex">
          {!! $posts->links('pagination::bootstrap-4') !!}
</div>
