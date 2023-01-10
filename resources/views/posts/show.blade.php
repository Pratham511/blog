@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Post
                @can('post-create')
                    <span class="float-right" style="float: right">
                        <a class="btn btn-primary" href="{{ route('posts.index') }}">Back</a>
                    </span>
                @endcan
                @can('post-download')
                <span class="float-right" style="float: right;margin-right:10px">
                    <a class="btn btn-success" id="pdf_download" data-id="{{ $post->id }}">Download</a>
                </span>
            @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Title:</strong>
                    {{ $post->title }}
                </div>
                <div class="lead">
                    <strong>Body:</strong>
                    {{ $post->body }}
                </div>
                <div class="lead">
                    <strong>Image:</strong>
                    <img src="{{asset('images').'/'. $post->image}}"  width="100px" height="100px">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

$(document).ready(function() {

    $(document).on("click","#pdf_download",function() {
        var fileName = "sample.pdf";
        var id = $(this).data('id');
        var url = "/posts/download/" + id;

        $.ajax({
            url : url,
            type:'GET',
            xhrFields: {
                responseType: 'blob'
            },
            contentType:false,
            processData:false,
            success: function(response)
                {
                    var blob = new Blob([response]);
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = "Sample.pdf";
                    link.click();
                }
        })

    });
});
</script>

@endsection
