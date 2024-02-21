<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Product</title>
</head>
<body>
    <div class="container text-center">
        <h1>List of iPhones</h1>
    </div>
    <div class="container col-5 mt-4">
        <ul>
            @foreach ($product as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>