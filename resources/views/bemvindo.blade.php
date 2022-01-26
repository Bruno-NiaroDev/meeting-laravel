<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo</title>
</head>
<body>
    <h1>Bem Vindo, Brunin</h1>
    <h3>Listagem da galera</h3>

        @foreach ($pessoas as $pessoa)
            @component('components.card')
                @slot('caminhoImagem')
                    {{$pessoa['image']}}
                @endslot
                @slot('nome')
                    {{$pessoa['nome']}}
                @endslot
                @slot('idade')
                    {{$pessoa['idade']}}
                @endslot
                @slot('dataNasc')
                    {{$pessoa['birth']}}
                @endslot
            @endcomponent
        @endforeach


</body>
</html>
