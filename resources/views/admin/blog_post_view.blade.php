@extends('admin.Layout')

@Section('content')

<div class="container mt-5">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-4">← Back to Dashboard</a>

    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card shadow-sm">
                @foreach($post_data as $postdata)
                <img src="{{ asset('Assets/img/one.jpg') }}" class="card-img-top img-fluid" alt="Post Image">
                <div class="card-body">
                    <h2 class="card-title">{{$postdata->post_title}}</h2>
                    <p class="text-muted">
                        Posted by <strong>{{$postdata->author}}</strong> {{$postdata->created_at}} in 
                        <span class="badge bg-info text-dark">{{$postdata->post_category}}</span>
                    </p>
                    <hr>
                    <p class="card-text">
                        {{$postdata->post_content}}
                    </p>
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a href="{{ route('post_edit_view') }}" class="btn btn-primary">Edit Post</a>
                        <a href="#" class="btn btn-danger">Delete Post</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection