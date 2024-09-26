<h1>{{ $author->name }}'nin Blogları</h1>

@if($author)
    @if(isset($blogs))
        @if($blogs->isEmpty())
            <p>Bu yazarın henüz blogu yok.</p>
        @else
            @foreach($blogs as $blog)
                <div>
                    <h2>{{ $blog->title }}</h2>
                    <p>{{ $blog->content }}</p>
                </div>
            @endforeach
        @endif
    @else
        <p>Bloglar bulunamadı.</p>
    @endif
@else
    <p>Yazar bilgisi mevcut değil.</p>
@endif
