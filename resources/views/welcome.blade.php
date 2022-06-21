@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
@component('components.posts.list', compact ('posts'))@endcomponent
</div>
@endsection
