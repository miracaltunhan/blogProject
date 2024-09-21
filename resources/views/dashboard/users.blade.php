<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kullanıcılar</title>
</head>
<body>
<h1>Kullanıcılar</h1>

<a href="{{ route('dashboard.users') }}">Kullanıcılar</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Ad</th>
        <th>Rol</th>
        <th>İşlemler</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <form action="{{ route('users.promote', $user->id) }}" method="POST">
                    @csrf
                    <input type="text" name="title" placeholder="Yeni Title" required>
                    <button type="submit">Yazara Terfi Et</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
