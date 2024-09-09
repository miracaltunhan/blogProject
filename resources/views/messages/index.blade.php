<!-- resources/views/messages/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Mesajlar</h1>
    <ul>
        @foreach ($messages as $message)
            <li>
                <strong>{{ $message->sender->name }}:</strong> {{ $message->content }}
                @if (!$message->is_read)
                    <span class="text-danger">(Okunmadı)</span>
                @endif
            </li>
        @endforeach
    </ul>
    <form action="{{ route('messages.send') }}" method="POST">
        @csrf
        <label for="receiver_id">Alıcı ID:</label>
        <input type="text" name="receiver_id" id="receiver_id" required>
        <label for="content">Mesaj:</label>
        <textarea name="content" id="content" required></textarea>
        <button type="submit">Gönder</button>
    </form>
@endsection
