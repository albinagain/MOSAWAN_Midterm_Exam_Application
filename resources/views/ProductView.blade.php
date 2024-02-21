<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <div>
        <h1>List of iPhones</h1>
    </div>
    <div>
        <ul>
            @foreach ($product as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>