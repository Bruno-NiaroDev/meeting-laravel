<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo</title>
</head>
<body>
    <h1>Bem Vindo, {{$apelido}}</h1>
    <h3>Ingredientes</h3>
    @for ($i=0;$i < count($ingredientes); $i++)
        <p>{{$ingredientes[$i]}}</p>
    @endfor
    <h3>Ingredientes (forech)</h3>
    @foreach ($ingredientes as $ingrediente)
        <p>{{$ingrediente}}</p>
    @endforeach

</body>
</html>
