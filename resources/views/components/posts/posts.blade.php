@if(strpos(url()->current(), 'create'))
<form id="form" class="form-horizontal" method="POST" action="{{ route('post.store') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('head') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Título</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="head" size="100" required autofocus>

            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('head') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
        <label for="summary" class="col-md-4 control-label">Resumo</label>

        <div class="col-md-6">
            <textarea class="form-control" name="summary"></textarea>

            @if ($errors->has('summary'))
            <span class="help-block">
                <strong>{{ $errors->first('summary') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label for="body" class="col-md-4 control-label">Matéria</label>

        <div class="col-md-6">
            <textarea class="form-control" name="body"></textarea>

            @if ($errors->has('body'))
            <span class="help-block">
                <strong>{{ $errors->first('body') }}</strong>
            </span>
            @endif
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
        </div>
    </div>
</form>
@else
<form id="form" class="form-horizontal" method="POST" action="{{ route('post.update', $post->id) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <<div class="form-group{{ $errors->has('head') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Título</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="head" size="100" value="{{ $post->head }}" required autofocus>

            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('head') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
        <label for="summary" class="col-md-4 control-label">Resumo</label>

        <div class="col-md-6">
            <textarea class="form-control" name="summary">{{ $post->summary }}</textarea>

            @if ($errors->has('summary'))
            <span class="help-block">
                <strong>{{ $errors->first('summary') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label for="body" class="col-md-4 control-label">Matéria</label>

        <div class="col-md-6">
            <textarea class="form-control" name="body">{{ $post->body }}</textarea>

            @if ($errors->has('body'))
            <span class="help-block">
                <strong>{{ $errors->first('body') }}</strong>
            </span>
            @endif
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
        </div>
    </div>
</form>
@endif