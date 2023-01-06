<html>
<head>
</head>
<body>
<?php require_once "header.php" ?>
<h1> Voici la liste des cours</h1>

<?php
foreach($course as $cour) { ?>
<h1><?= $cour['code'] ?> <?= $cour['titre'] ?> <?= $cour['language'] ?></h1>
<?php } ?>

</body>