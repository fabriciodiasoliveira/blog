
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">{{ $post->head }}</div>

                <div class="card-body">
                    {{ $post->summary }}
                </div>
            </div>
            @endforeach
        </table>
    </div>
</div>
<div class="d-flex">
          {!! $posts->links('pagination::bootstrap-4') !!}
</div>
