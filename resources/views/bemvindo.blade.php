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
    <p>1 + 1 = {{ 1+1 }}</p>
    <p>Função = {{-- funcao() --}}</p>
    <p>Codigo html: {{$html}}</p>
    <p>Codigo html interpletado: {!! $html !!}</p>
</body>
</html>
