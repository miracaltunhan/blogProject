@extends('layouts.app')

@section('content')
    <h1>Yeni Kategori Ekle</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label for="name">Kategori Adı:</label>
        <input type="text" name="name" required>

        <label for="parent_id">Üst Kategori:</label>
        <select name="parent_id" id="parent_id" required>
            <option value="">Üst Kategori Seçin</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit">Ekle</button>
    </form>
    <a href="{{ route('categories.index') }}">Geri Dön</a>
@endsection
