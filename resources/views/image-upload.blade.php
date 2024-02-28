<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Result</title>
</head>
<body>
@if(isset($imageUrl))
    <div>
        <input type="text" id="image-url" value="{{ $imageUrl }}" readonly>
        <button class="copy-button" onclick="copyToClipboard()">Скопировать</button>
    </div>
    <img src="{{ $imageUrl }}" alt="Uploaded Image">
@else
    <p>Image upload failed.</p>
@endif

<script>
    function copyToClipboard() {
        var copyText = document.getElementById("image-url");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        alert("Ссылка скопирована: " + copyText.value);
    }
</script>
</body>
</html>
