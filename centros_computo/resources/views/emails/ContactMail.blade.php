<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
</head>
<body>
    <h1>Mensaje de contacto</h1>
    <p>Nombre: {{ $details['name'] }}</p>
    <p>Correo electrónico: {{ $details['email'] }}</p>
    <p>Teléfono: {{ $details['phone'] }}</p>
    <p>Asunto: {{ $details['subject'] }}</p>
    <p>Mensaje: {{ $details['msg'] }}</p>
</body>
</html>
