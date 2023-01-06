<html>
<head>
</head>
<body>
<?php require_once "header.php" ?>
<h1> Voici la liste des students</h1>

<?php
foreach($students as $stud) { ?>
<h1>nom: <?= $stud['firstname'] ?> prenom: <?= $stud['lastname'] ?> email: <?= $stud['mail'] ?> mot de passe: <?= $stud['password'] ?></h1>


<?php } ?>


<?php
foreach($cstud as $cs) {  ?>
<h1> <?= $cs['titre'] ?> <?= $cs['language'] ?> </h1>

<?php } ?>
</body>