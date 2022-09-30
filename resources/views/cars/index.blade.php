<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
    @foreach ($cars as $car )
        <ul>
            <a href="{{ route(('single-car'), ['id' => $car->id ]) }}">
                <li>{{ $car->producer }}</li>
            </a>
        </ul>
    @endforeach
</body>
</html>