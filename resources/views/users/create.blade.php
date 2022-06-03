@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Novo usuário</div>

                <div class="panel-body">
                    @component('components.users.users')@endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
