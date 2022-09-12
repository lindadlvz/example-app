<?php
// Varios destinatarios
$para  = 'Mauricio <deleoningrid@umes.edu.gt>' . ', '; // atención a la coma
$para .= 'lindadleonv@gmail.com>';


// título
$título = 'Prueba';
// mensaje
$mensaje = '
<html><head>
  <title>Hola Mundo</title>
</head>
<body>
  <h1>¡Ejemplo de correo electrónico!</h1>
  <p>Correo de Prueba</p>
</body>
</html>
';
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Cabeceras adicionales
$cabeceras .= 'To: Mauricio <deleoningrid@umes.edu.gt>, Luis <lmdbluis@gmail.com>' . "\r\n";
$cabeceras .= 'From: News <news@umes.edu.gt>' . "\r\n";
$cabeceras .= 'Cc: deleoningrid@umes.edu.gt' . "\r\n";
$cabeceras .= 'Bcc: mauricio@incodemode.com' . "\r\n";
$cabeceras .= 'Reply-to: Mauricio <mauricio@incodemode.com>' . "\r\n";


// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
