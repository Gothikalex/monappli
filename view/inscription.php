<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription course</title>
</head>
<body>
    <?php require_once "header.php" ?>
    <form action="<?= _BASE ?>/inscription/ajouter" method="POST" >
        
        <select name='etudiant'>
            <?php foreach ($students as $stud){ 
                // print_r($stud)
                ?> 
        <option value="<?=$stud['id_student']?>"><?=$stud['firstname']?>, <?=$stud['lastname']?> </option>
            <?php } ?>
      </select>
        
        <fieldset>
            <legend>quel cours souhaitez vous suivre :</legend>
            <div>
                <?php foreach($course as $cour) {
                    //  print_r($cour) 
                    ?>
                
                <label for="<?=$cour['id_cours'] ?>"><?=$cour['titre'] ?>, <?=$cour['language'] ?></label>
                <input type="checkbox" id="<?=$cour['id_cours'] ?>" name="course[]" value="<?=$cour['id_cours'] ?>" > 
                <?php } ?>
            </div>
            <div>
                <button type="submit">Envoyer</button>
            </div>
        </fieldset>
    </form>
</body>
</html>