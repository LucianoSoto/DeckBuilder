<?php require_once ('Navs/navMainPage.html') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DeckBuilder Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <br>
    <br>
    
    <h1>Inserta tus datos para iniciar sesion</h1>

    <br>
    <br>

    <form action="../login.php" method="post">
        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user" style="width: 60%; height: 40px;">
        <br>
        <label for="pw">Contraseña: </label>
        <input type="password" name="pw" id="pw" style="width: 60%; height: 40px;">
        <br>
        <input type="submit" style="width: 30%; height: 40px;" class="btn btn-primary">
    </form>
</body>
</html>