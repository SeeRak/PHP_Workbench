<?php

require 'traitement.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>    
    <form action="form.php" method="post">
    <div class="flexInput">
        <input type="text" name="nom">
        <input type="text" name="type">
    </div>
        <input type="submit" value="Ajouter">
    </form>
    <h1>Liste des chiens et des races :</h1>
<ul>
    <?php foreach($select as $key => $value) { ?>
        <li> <?= $value->nom ?> :  <?= $value->type ?> </li>
<?php } ?>
</ul>

</body>
</html>
