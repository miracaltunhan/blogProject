<!-- resources/views/messages/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Mesajlar</h1>

        <div class="card mb-4">
            <div class="card-header">
                Gelen Mesajlar
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($messages as $message)
                    <li class="list-group-item">
                        <strong>{{ $message->sender->name }}:</strong> {{ $message->content }}
                        @if (!$message->is_read)
                            <span class="badge bg-danger">Okunmadı</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="card">
            <div class="card-header">
                Yeni Mesaj Gönder
            </div>
            <div class="card-body">
                <form action="{{ route('messages.send') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="receiver_id" class="form-label">Alıcı ID:</label>
                        <input type="text" name="receiver_id" id="receiver_id" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Mesaj:</label>
                        <textarea name="content" id="content" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>
        </div>
    </div>
@endsection
