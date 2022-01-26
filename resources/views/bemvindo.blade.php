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
    <p>Tipo (Ternário): {{ $tipoUser == 'admin' ? 'Administrador' : 'Usuário'}}</p>
    <p>Tipo (Comum):
        @if($tipoUser == 'admin')
            <b>Administrador</b>
        @elseif ($tipoUser == 'simple')
            <b>Usuário</b>
        @else
            <b>Visistante</b>
        @endif
    </p>

</body>
</html>
