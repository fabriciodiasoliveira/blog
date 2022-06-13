
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" width="100%">
            @foreach ($posts as $post)
            <tr>
                <td> {{ $post->head }}</td>
            </tr>
            <tr>
                
                <td{{ $post->summary }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="d-flex">
          {!! $posts->links('pagination::bootstrap-4') !!}
</div>
