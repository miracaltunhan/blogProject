@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <article class="post-content">
                    <!-- Blog Başlığı -->
                    <h1 class="post-title">{{ $blog->title }}</h1>

                    <!-- Yayınlanma Tarihi -->
                    <div class="post-meta mb-3">
                        <span class="text-muted">Yayınlanma Tarihi: {{ $blog->created_at->format('d M Y') }}</span>
                    </div>

                    <!-- Blog Resmi (Eğer varsa) -->
                    @if ($blog->image)
                        <div class="post-image mb-4">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                        </div>
                    @endif

                    <!-- Blog İçeriği -->
                    <div class="post-body">
                        {!! $blog->content !!}
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
