<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload GIF</title>
</head>
<body>
    <form action="{{ url('/convert-gif') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="gif_file" accept="image/gif" required>
        <button type="submit">Convert to PDF</button>
    </form>
</body>
</html>
