<!DOCTYPE html>
<html>
<head>
    <title>Загрузка изображения</title>
    <script async src="https://imgbb.com/upload.js"></script>
</head>
<body>
<form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <button type="submit">Upload</button>
</form>

</body>
</html>
