<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create course</title>
</head>
<body>
    <?php require_once "header.php" ?>
    <form action="http://localhost<?= _BASE ?>/course/record" method="POST" >
        <input type="text" name="code" placeholder="code" ><br>
        <input type="text" name="titre" placeholder="titre" ><br>
        <input type="text" name="language" placeholder="language" ><br>
        <input type="submit" value="ok" ><br>
    </form>
</body>
</html>