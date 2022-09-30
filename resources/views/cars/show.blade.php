<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
    <h1>{{ $car->title }}</h1>
    <h3>This is model {{ $car->producer }}</h3>
    <p>This car has {{$car->number_of_doors}} doors</p>
</body>
</html>