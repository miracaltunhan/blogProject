@extends('layouts.app')

@section('content')
    <h1>Kategoriler</h1>
    <a href="{{ route('categories.create') }}" class="btn">Yeni Kategori Ekle</a>
    <ul>
        @foreach ($categories as $category)
            <li>
                {{ $category->name }}
                @if ($category->subcategories->isNotEmpty())
                    (
                    @foreach ($category->subcategories->unique('name') as $index => $subcategory)
                        {{ $subcategory->name }}@if (!$loop->last) / @endif
                    @endforeach
                    )
                @endif
                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Sil</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
