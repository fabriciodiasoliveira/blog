@foreach ($users as $user)
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            <tr>
                <td width="50%"> {{ $user->name }}</td>
                <td width="30%">{{ $user->email }}</td>
                <td width="20%">
                    <form id="form" action="{{ route('user.setadmin') }}" method="post">
                        <select id="select" class="form-select" name ='permission' onchange="teste(this)">
                            <option value="noadmin" @if($user->permission == 'noadmin') selected @endif>Usuário comum</option>
                            <option value="admin" @if($user->permission == 'admin') selected @endif>Administrador</option>
                        </select>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endforeach