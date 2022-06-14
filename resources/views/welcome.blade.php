@extends('layouts.app')

@section('content')
<div class="container">
    @component('components.posts.list', compact ('posts'))@endcomponent
</div>
@endsection
