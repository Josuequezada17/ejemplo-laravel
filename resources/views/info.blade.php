<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
</head>
<body>
    <a href="{{ route('comentario.create') }}">Comentarios</a>
    <a href="/contacto-clase">Contacto Clase</a>
    <hr>
    <?php echo $tipo ?>
    <hr>
    {{$tipo}} <!--Otra alternativa gracias a blade que simplifica php-->
    <h1>Hola informacion para {{$tipo}}</h1>
    
    @if ($tipo == 'alumnos')
        <h2>Alumnos</h2>
        <p>Info para alumnnos</p>
    @elseif ($tipo == 'empresas')     
        <h2>Empresas</h2>
        <p>Info para empleados </p>
    @else
        <h2>Visitantes</h2>
        <p>Info para visitantes </p>
    @endif

    bla vbla bla

    
</body>
</html>
