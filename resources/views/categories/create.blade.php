@extends('layouts.app')

@section('content')
    <h1>Yeni Kategori Ekle</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Kategori Adı:</label>
        <input type="text" name="name" required>
        <button type="submit">Ekle</button>
    </form>
    <a href="{{ route('categories.index') }}">Geri Dön</a>
@endsection
