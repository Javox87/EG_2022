<?php
    $destinatario = "javierramos1987@gmail.com";
    $asunto = "Testing";
    $cuerpo = ' 
        <html> 
            <head> 
                <title>Prueba de correo</title> 
            </head> 
            <body> 
                <h1>XD</h1> 
                <p>
                    Práctica N° 5
                </p> 
            </body> 
        </html> 
        '; 

    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: Javier Ramos <javierramos1987@gmail.com>\r\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    echo "Enviado ";
?>