<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <div align="left" >
        <form action="contact.php" method="POST" >
            <div>
                <label for="inputEmail">Direccion email</label>
                <input type="text" id="inputEmail" name="email" placeholder="Ingresar email" >
            </div>
            <div>
                <label for="inputNombre">Nombre y apellido</label>
                <input type="text" id="inputNombre" name="nombre" placeholder="Ingresar nombre y apellido" >
            </div>
            <div>
                <label for="inputAsunto">Asunto</label>
                <input type="text" id="inputAsunto" name="asunto" placeholder="Ingresar asunto" >
            </div>
            <div>
                <label for="inputContenido">Contenido del email</label><br>
                <textarea name="contenido" id="inputContenido" cols="30" rows="10" ></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>