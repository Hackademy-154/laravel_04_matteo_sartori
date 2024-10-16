<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grazie di averci contattato</title>
</head>

<body>
    <h1>Ciao, {{ htmlspecialchars($userName) }} </h1>
    <h2>Grazie di averci contattato, sarai ricontattato al più presto</h2>
    <h3>Ecco i tuoi dati:</h3>
    <ul>
        <li> Nome: {{ htmlspecialchars($userName) }} </li>
        <li> Email: {{ htmlspecialchars($email) }} </li>
        
    </ul>
</body>
</html>
