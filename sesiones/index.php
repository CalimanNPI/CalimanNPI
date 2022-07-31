<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <?php

    include_once 'include/user.php';
    include_once 'include/session.php';

    $userSession = new SessionUser();
    $user = new User();

    if (isset($_SESSION['user'])) {
        $user->setUser($userSession->getCurrent());
        include_once 'vistas/home.php';
    } elseif (isset($_POST['name'])) {
        if ($user->newUser($_POST['name'], $_POST['username'], $_POST['password'])) {
            $userSession->setCurrent($_POST['username']);
            $user->setUser($_POST['username']);
            include_once 'vistas/home.php';
        } else {
            $errorLogin = 'error al regitrar el usuario';
            include_once 'vistas/register.php';
        }
    } elseif (isset($_POST['username']) && isset($_POST['password'])) {
        if ($user->userExist($_POST['username'], $_POST['password'])) {
            $userSession->setCurrent($_POST['username']);
            $user->setUser($_POST['username']);
            include_once 'vistas/home.php';
        } else {
            $errorLogin = 'Nombre de usuario Y/o password incorrectos';
            include_once 'vistas/login.php';
        }
    } else {
        include_once 'vistas/login.php';
        include_once 'vistas/register.php';
    }
    ?>

</body>

</html>