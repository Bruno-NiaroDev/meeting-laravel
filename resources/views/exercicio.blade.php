<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio - 2</title>
</head>
<body>
    @for ($i = 1; $i < 50 ; $i++)
    @component('components.imagem')
        @slot('url')
            {{$url.$i}}
        @endslot
    @endcomponent
    @endfor

</body>
</html>
