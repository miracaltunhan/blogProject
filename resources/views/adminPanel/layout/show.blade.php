@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $blog->title }}</h1>

        <div class="blog-content">
            <p>{{ $blog->content }}</p>
        </div>

        <div class="blog-meta">
            <p><strong>Category:</strong> {{ $blog->category->name }}</p>
            <p><strong>Author:</strong> {{ $blog->author_name }}</p>
            <p><strong>Published at:</strong> {{ $blog->created_at->format('d M Y') }}</p>
        </div>

        @if($blog->image)
            <div class="blog-image">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
            </div>
        @endif

        <form action="{{ route('blogs.like', $blog->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Like ({{ $blog->likes->count() }})</button>
        </form>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h2>Comments</h2>
        @foreach($blog->comments as $comment)
            <p><strong>{{ $comment->user->name }}:</strong> {{ $comment->content }}</p>
        @endforeach

        <form action="{{ route('comments.store', $blog->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="content" class="form-control" rows="3" placeholder="Add a comment" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Comment</button>
        </form>
    </div>
@endsection
