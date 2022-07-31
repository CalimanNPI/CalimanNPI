<form action="" method="POST">
    <?php
    if (isset($errorLogin))
        echo $errorLogin;
    ?>

    <h2>LOGIN</h2>
    <br>
    <label for="username"> NAME
        <input type="text" name="username" id="username">
    </label><br>
    <label for="password">PASSWORD
        <input type="text" name="password" id="password">
    </label><br>
    <input type="submit" value="LOGIN">

</form><br>