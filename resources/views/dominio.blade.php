<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$dominio}}</title>
</head>

<body>
    @if ($dominio !== "")
    <p>Domínio: {{$dominio}}</p>

       @if ($status === "ativo")
       <p>O domínio está ativo.</p>
       @else
       <p>O domínio está inativo.</p>
       @endif

    @else
    <p>Domínio não encontrado</p>
    @endif



</body>

</html>