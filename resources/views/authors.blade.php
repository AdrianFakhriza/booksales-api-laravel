<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book_Author</title>
</head>
<body>
    <h1>Ini adalah halaman author dari buku</h1>
    <p>Selamat datang di author buku</p>

    @foreach ($authors as $item)
        <ul>
            <li>{{$item['id']}}</li>
            <li>{{$item['name']}}</li>
            <li>{{$item['description']}}</li>
            <li>{{$item['photo']}}</li>
        </ul>
    @endforeach
 
</body>
</html>