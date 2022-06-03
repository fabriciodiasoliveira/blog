@foreach ($users as $user)
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            <tr>
                <td width="50%"> {{ $user->name }}</td>
                <td width="30%">{{ $user->email }}</td>
                <td width="20%">@if( $user->permission == null ) Usuário comum @else {{ $user->email }} @endif</td>
            </tr>
        </table>
    </div>
</div>
@endforeach