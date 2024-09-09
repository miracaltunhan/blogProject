@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bildirimler</h1>
        @foreach($notifications as $notification)
            <div>
                {{ $notification->message }}
                <a href="{{ route('notifications.markAsRead', $notification->id) }}">Okundu olarak işaretle</a>
            </div>
        @endforeach
    </div>
@endsection
