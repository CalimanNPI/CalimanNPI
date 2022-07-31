<form action="" method="POST">
    <?php
    if (isset($errorLogin))
        echo $errorLogin;
    ?>

    <h2>Register</h2>
    <br>
    <label for="name">NAME
        <input type="text" name="name" id="name">
    </label><br>
    <label for="username">USER NAME
        <input type="text" name="username" id="username">
    </label><br>
    <label for="password">PASSWORD
        <input type="text" name="password" id="password">
    </label><br>
    <input type="submit" value="REGISTER">

</form>