<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIL</title>
</head>
<body>
    <form action="mail.php" method="post">
        <label for="name">NAME
            <input type="text" name="name">
        </label><br>
        <label for="email">EMAIL 
            <input type="text" name="email">
        </label><br>
        <label for="name">TEXT
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
        </label><br>
        <input type="submit" value="SEND EMAIL">
    </form>
</body>
</html>