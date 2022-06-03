@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alterar usuário</div>

                <div class="panel-body">
                    @component('components.users.users', compact ('user'))@endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
