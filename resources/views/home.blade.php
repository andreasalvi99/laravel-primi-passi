<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
</head>
<body>

    <h1>Questa è la prima homepage fatta con laravel</h1>
    <p>Hello wolrd</p>

    <h2>Ecco una lista di cose che possiamo fare:</h2>

    <ul>
        <li>Studiare la struttura dei file</li>
        <li>Capire la logica di Routing</li>
        <li>Creare la nostra homepage</li>
        <li>Creare il nostro progetto</li>
    </ul>

    <a href="{{ route('prodotti') }}">Vai ai prodotti</a>
    <a href="{{ route('contatti') }}">Vai ai contatti</a>
</body>
</html>