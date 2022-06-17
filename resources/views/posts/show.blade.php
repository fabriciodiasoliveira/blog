@extends('layouts.app')

@section('content')
@component('components.posts.show', compact ('post'))@endcomponent
@endsection