@foreach ($users as $user)
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            <tr>
                <td width="50%"> {{ $user->name }}</td>
                <td width="30%">{{ $user->email }}</td>
                <td width="20%">
                    <form class="form-horizontal" method="POST" action="{{ route('user.update', $user->id) }}">
                        <input type="hidden" name="_method" value="put" />
                        @csrf
                        <select id="select" class="form-select" name ='tipo' onchange="teste(this)" @if(Auth::user()->id == $user->id) disabled @endif>
                            <option value="noadmin" @if($user->tipo == 'autor') selected @endif>Usuário comum</option>
                            <option value="admin" @if($user->tipo == 'admin') selected @endif>Administrador</option>
                        </select>
                        <input id="id" type="hidden" name="id" value="{{ $user->id }}">
                        {{ route('user.update', $user->id) }}
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endforeach