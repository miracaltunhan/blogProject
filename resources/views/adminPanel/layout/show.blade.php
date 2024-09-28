@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $blog->title }}</h1>

        <div class="blog-content">
            <p>{{ $blog->content }}</p>
        </div>

        <div class="blog-meta">
            <p><strong>Category:</strong> {{ $blog->category->name }}</p>

            @if($blog->category->subcategories->isNotEmpty())
                <p><strong>Subcategories:</strong>
                    @foreach($blog->category->subcategories as $subcategory)
                        {{ $subcategory->name }}@if (!$loop->last), @endif
                    @endforeach
                </p>
            @endif

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

        <h2>Liked by:</h2>
        <ul>
            @foreach($blog->likes as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>

        <h2>Comments</h2>
        @foreach($blog->comments as $comment)
            <div class="comment">
                <p><strong>{{ $comment->user->name }}:</strong> {{ $comment->content }}</p>
                <form action="{{ route('comments.like', $comment->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-light">Like ({{ $comment->likes_count }})</button>
                </form>

                <h4>Replies:</h4>
                @foreach($comment->replies as $reply)
                    <p><strong>{{ $reply->user->name }}:</strong> {{ $reply->content }}</p>
                @endforeach

                <form action="{{ route('comments.store', $blog->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                    <div class="form-group">
                        <textarea name="content" class="form-control" rows="2" placeholder="Reply to this comment" required></textarea>
                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                    </div>
                    <button type="submit" class="btn btn-secondary">Reply</button>
                </form>
            </div>
        @endforeach

        <form action="{{ route('comments.store', $blog->id) }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
            <div class="form-group">
                <textarea name="content" class="form-control" rows="3" placeholder="Add a comment" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Comment</button>
        </form>
    </div>
@endsection
