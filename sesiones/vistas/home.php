<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="../main.css">
</head>

<body>
    <div class="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="include/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php echo $user->getUser() ?></h1>
    </section>
</body>

</html>