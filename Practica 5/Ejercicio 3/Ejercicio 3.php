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
        <form action="recomendar.php" method="POST" >
            <div>
                <label for="inputEmailRemitente">Direccion email remitente</label>
                <input type="text" id="inputEmailRemitente" name="emailRemitente" placeholder="Ingresar email" >
            </div>
            <div>
                <label for="inputNombreRemitente">Nombre y apellido remitente</label>
                <input type="text" id="inputNombreRemitente" name="nombreRemitente" placeholder="Ingresar nombre y apellido" >
            </div>
            <div>
                <label for="inputEmailDestinatario">Direccion email destinatario</label>
                <input type="text" id="inputEmailDestinatario" name="emailDestinatario" placeholder="Ingresar email" >
            </div>
            <div>
                <label for="inputNombreDestinatario">Nombre y apellido destinatario</label>
                <input type="text" id="inputNombreDestinatario" name="nombreDestinatario" placeholder="Ingresar nombre y apellido">
            </div><br>
            <button type="submit" >Submit</button>
        </form>
    </div>
</body>
</html>