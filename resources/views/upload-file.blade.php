<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Million Records</title>
</head>
<body>
    <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="mycsv" id="mycsv">
        {{-- <input type="submit" value="Upload"> --}}
        <button class="btn btn-primary">upload</button>
    </form>
</body>
</html>
