@extends('layouts.dashboard')

@section('content')
    <h1>Edit Blog</h1>
    <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $blog->title }}" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content" required>{{ $blog->content }}</textarea>
        </div>
        <div>
            <label for="category_id">Category</label>
            <select id="category_id" name="category_id">
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="author_id">Author</label>
            <select id="author_id" name="author_id">
                <option value="">Select an author</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $blog->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
            @if($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Image" width="100">
            @endif
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
