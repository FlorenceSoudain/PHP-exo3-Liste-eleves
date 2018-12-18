<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 15:24
 */

$promo = [
    0 => ["Flamant", "Brian", "36", "Fontaine les Vervins", "Passions" => ["Crytocurrency", "Botanique", 'Alchimie']],
    1 => ["Spilmont", "André", "31", "Fourmies", "Passions" => ["Jeux Vidéo", "Nourriture", "Conduire"]],
    2 => ["Bon", "Romain", "26", "Berlaimont", "Passions" => ["Football", "Jeux Vidéo", "Cuisine"]],
    3 => ["Durvin", "James"],
    4 => ["Dohen", "Joffrey", "24", "Marpent"],
    5 => ["Labaeye", "Amandine", "17", "Etroeungt", "Passions" => ["Jeux video", "Football", "Netflix"]],
    6 => ["Soudain", "Florence", "33", "Leval", "Passions" => ["Japon", "Manga", "Jeux Vidéo"]],
    7 => ["Ducamp", "Maxime", "30", "Beaudignies", "Passions" => ["Fromage", "Science Fiction"]],
    8 => ["Bouret", "Sebastien", "40", "Fourmies", "Passions" => ["Jeux Vidéo", "Manga"]],
    9 => ["Bultot", "Bryan", "26", "Fourmies", "Passions" => ["Filles", "Nourriture", "Soirée"]],
    10 => ["Claisse", "Sophie", "34", "Fourmies", "Passions" => ["Musiques", "Littérature", "Langues Etrangères"]],
    11 => ["Pronnier", "David", "32", "Fourmies", "Passions" => ["Photographie", "Informatique", "Sonorisation"]],
    12 => ["Carpentier", "Benoit", "39", "Fourmies", "Passions" => ["Informatique", "Astronomie", "Tricot"]],
    13 => ["Carbonnier", "Romain"],
    14 => ["Duthoit", "Arnaud", "29", "Wignehies", "Passions" => ["Lecture", "Promenade", "Cacahouètes"]],
    15 => ["Leclerq", "Cyriak", "27", "Fourmies", "Passions" => ["Jeux Vidéo", "Séries", "Manga"]],
    16 => ["Dorchies", "Stevens", "23", "Floyon", "Passions" => ["South Park", "Jeux Vidéo", "Manga"]],
    17 => ["Meunier", "Lubin", "30", "Marcy sous marle", "Passions" => ["Gateaux", "Bonbons", "Chocolat Chaud"]],
    18 => ["Caron", "Grégory", "40", "Fourmies", "Passions" => ["Jeux Vidéo", "Informatique", "La Vie"]]
];

?>

<ul>
    <?php
    foreach ($promo as $i) {
        ?>
    <li>
        <a href="infos.php"><?=$i[0]." ".$i[1];?></a>
    </li>
    <?php
    }
    ?>
</ul>

