<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 16:30
 */

$promo = require 'promo.php';

$recup = $_GET["index"];
$eleves = $promo[$recup];

/* Affiche le tableau avec les index
print_r($eleves);
*/

?>
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<div id="container">
    <h1><?= $eleves[0] . " " . $eleves[1]; ?> </h1>
    <div id="infos">
        <div><span class="titre">Âge : </span><?= $eleves[2]; ?></div>
        <div><span class="titre">Ville : </span><?= $eleves[3]; ?></div>
        <div><span class="titre">Passions : </span>

            <ul id="listePassions">
                <li><?= $eleves["Passions"][0]; ?></li>
                <li><?= $eleves["Passions"][1]; ?></li>
                <li><?= $eleves["Passions"][2]; ?></li>
            </ul>
        </div>
    </div>
    <div id="btn">
        <a href="index.php">
            <button id="retour">Retour</button>
        </a>
    </div>
</div>


<script src="script.js"></script>
</body>
