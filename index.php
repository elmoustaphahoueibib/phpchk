<?php
$jour=array(
    "Dimanche",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi"
);

$mois=array(
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "août",
    "septembre",
    "octobre",
    "novembre",
    "décembre"
);

echo $jour[date("w",mktime(00,00,00,02,03,1993))].
    " ".
    date("j",mktime(00,00,00,02,03,1993)).
    " ".
    $mois[date("n",mktime(00,00,00,02,03,1993))].
    " ".
    date("Y",mktime(00,00,00,02,03,1993));
?>