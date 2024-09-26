<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Ekle</title>
</head>
<body>
<h1>Haber Ekle</h1>

<form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Başlık:</label>
    <input type="text" name="title" id="title" required>

    <label for="content">İçerik:</label>
    <textarea name="content" id="content" required></textarea>

    <label for="image">Görsel:</label>
    <input type="file" name="image" id="image" accept="image/*">

    <button type="submit">Kaydet</button>
</form>

</body>
</html>
