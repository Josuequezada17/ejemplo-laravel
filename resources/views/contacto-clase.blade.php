<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/informacion">Informacion</a>


    <form action="/contacto-clase" method="POST">
        @csrf <!--token para asegurarnos que nuestro formulario venga desde nuestra pagina-->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo">
        <label for="correo">Comentario:</label>
        <textarea name="comentario" id="" cols="30" rows="10"></textarea>
        <br>
        <select name="ciudad" id="ciudad">
            <option value="GDL">GDL</option>
            <option value="TONALA">TONALA</option>
            <option value="ZAPOPAN">ZAPOPAN</option>
            <option value="TLAQUEPAQUE">TLAQUEPAQUE</option>
            <option value="TLAJOMULCO">TLAJOMULCO</option>
        </select>

        <input type="submit" value="Enviar">
    </form>

    //sanitizar inputs

    //Guardar en db
 
</body>
</html>