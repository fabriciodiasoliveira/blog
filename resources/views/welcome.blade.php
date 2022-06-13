@extends('layouts.app')

@section('content')
<div class="container">
    @component('components.posts.list', compact ('posts'))@endcomponent
    <div class="row">
        <div class='col-md-12'>
            
        </div>
    </div>
</div>
@endsection
