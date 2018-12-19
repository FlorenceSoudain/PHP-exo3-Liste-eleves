<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 15:24
 */

$promo = require 'promo.php';

?>
<!doctype html>
<html lang="fr">
<head>
    <title>Liste des apprenants</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<div id="container">
    <h1>Liste des apprenants</h1>
    <ul id="liste">
        <?php
        foreach ($promo as $i => $eleves) {
            ?>
            <li>
                <a href="infos.php?index=<?php echo $i ?>"> <?= $eleves[0] . " " . $eleves[1]; ?> </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
<script src="script.js"></script>
</body>
</html>