<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload HTML File</title>
</head>
<body>
    <h1>Upload HTML File for Conversion</h1>
    <form action="{{ route('upload.html') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="html_file" accept=".html" required>
        <button type="submit">Upload and Convert</button>
    </form>
</body>
</html>
