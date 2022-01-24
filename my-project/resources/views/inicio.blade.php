<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="{{ asset('css/estilo.css')}}">-->
    <title>Index</title>
</head>
<body>
    <h1>CholloSevero - Index</h1>

    <nav class="navegador">
        <a href="{{ route('inicio') }}">Listar chollos</a>
        <a href="{{ route('crear') }}">Crear chollo</a>
        <a href="{{ route('editar') }}">Editar chollo</a>
    </nav>

    <ol>
        <li>Lorem</li>
        <li>Ipsum</li>
        <li>Dolor</li>
        <li>Sit</li>
        <li>Amet</li>
        <li>Consectetur</li>
        <li>Adipisicing</li>
        <li>Nesciunt</li>
    </ol>
</body>
</html>