<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recivido</title>
</head>
<body>
    <p>Recibiste un mensaje de: {{ $msg['nombre'] }} - {{ $msg['correo'] }}</p>
    <p><strong>celular:</strong>{{ $msg['celular'] }}</p>
    <p><strong>ciudad:</strong>{{ $msg['ciudad'] }}</p>
    <p><strong>direccion:</strong>{{ $msg['direccion'] }}</p>
    <p><strong>descripcion:</strong>{{ $msg['descripcion'] }}</p>
    <p><strong>marca:</strong>{{ $msg['marca'] }}</p>
    <p><strong>modelo:</strong>{{ $msg['modelo'] }}</p>
</body>
</html>