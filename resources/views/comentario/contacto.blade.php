<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

        <title>Formulario</title>
    </head>

    <body>

        <header>

            <div class="nav">

                <div class="img-titulo">
                    <img id= "logoPrincipal" src="img/programmer.png" alt="Logo de la pagina">
                
                    <h2 class="nombre">Josue Quezada</h2> 
                </div>
                
                
                <nav>
                    
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="formulario.html">FORMULARIO</a></li>
                        <li><a href="/informacion">INFORMACION</a></li>
                    </ul>
                </nav>

            </div>
           
        </header>

        <main>

            <form method="get" action="formulario.html">
                
                <h1>Contacto</h1>
                
                <label for="nombreApellido">Nombre y Apellido</label>
                <input type="text" id="nombreApellido" class="inputPadron" required>

                <label for="correoElectronico">Correo Electrónico</label>
                <input type="email" id="correoElectronico" class="inputPadron" required 
                placeholder="email@domain.com">

                <fieldset class="FieldIB">

                    <legend>Genero</legend>
                    <label for="radio-hombre"><input type="radio" name="genero" value="hombre" id="radio-hombre">Hombre</label>
                    

                    <label for="radio-mujer"><input type="radio" name="genero" value="mujer" id="radio-mujer">Mujer</label>
                    

                    <label for="radio-otro"><input type="radio" name="genero" value="otro" id="radio-otro" checked>Otro</label>
                    

                </fieldset>

                <fieldset class="FieldIB">

                    <legend>¿Como le contactamos?</legend>
                    <label for="radio-email"><input type="radio" name="contacto" value="email" id="radio-email">Email</label>
                    

                    <label for="radio-telefono"><input type="radio" name="contacto" value="telefono" id="radio-telefono">Teléfono</label>
                    

                    <label for="radio-whatsApp"><input type="radio" name="contacto" value="WhatsApp" id="radio-whatsApp" checked>WhatsApp</label>
                    

                </fieldset>


                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" class="inputPadron" required 
                placeholder="(XX) XXXX XXXX">

                <label for="mensaje">Comentario</label>
                <textarea cols="70" rows="10" id="mensaje" class="inputPadron" required>
                </textarea>

                <label for="ciudad">Ciudad:</label><br>
                <select id="ciudad" name="ciudad">
                    <option value="guadalajara">Guadalajara</option>
                    <option value="zapopan">Zapopan</option>
                    <option value="tonala">Tonalá</option>
                    <option value="otra">Otra</option>
                </select><br>


                <label class="checkbox">

                    <input type="checkbox" id="contratar" name="contratar" value="si" checked>Me interesa contratarte

                </label>

                <input type="submit" value="Enviar formulario" class="enviar"> 

            </form>

        </main>

        
    </body>
</html>