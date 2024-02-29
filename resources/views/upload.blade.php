<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
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
