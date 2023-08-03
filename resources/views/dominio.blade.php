<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$dominio}}</title>
</head>

<body>
    <h1>Domínio: {{$dominio}}</h1>

    @if ($status === "ativo")
    <p>O domínio está ativo.</p>
    @else
    <p>O domínio está inativo.</p>
    @endif

</body>

</html>