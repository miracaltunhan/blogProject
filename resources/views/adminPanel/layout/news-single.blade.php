<!-- resources/views/news-single.blade.php -->
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }}</title>
</head>
<body>
<h1>{{ $news->title }}</h1>
<p>{{ $news->content }}</p>
@if($news->image)
    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" style="max-width: 100%;">
@endif
<p><strong>Yayın Tarihi:</strong> {{ $news->published_at ? $news->published_at->format('F d, Y') : 'Belirtilmemiş' }}</p>
</body>
</html>
