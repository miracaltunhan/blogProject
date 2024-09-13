@extends('adminPanel.dashboard')

@section('content')
    <h1>Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create New Blog</a>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category->name ?? 'N/A' }}</td>
                <td>{{ $blog->author->name ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
