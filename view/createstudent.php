<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create student</title>
</head>
<body>
    <?php require_once "header.php" ?>
    <form action="http://localhost<?= _BASE ?>/student/record" method="POST" >
        <input type="text" name="firstname" placeholder="firstname" ><br>
        <input type="text" name="lastname" placeholder="lastname" ><br>
        <input type="text" name="mail" placeholder="mail" ><br>
        <input type="text" name="password" placeholder="password" ><br>
        <input type="submit" value="ok" ><br>
    </form>
</body>
</html>