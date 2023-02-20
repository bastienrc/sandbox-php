<?php
$sql = "SELECT * FROM `videogames`";
$reponse = $bdd->query($sql);

$videogames = [];
while ($data = $reponse->fetch()) {
  array_push($videogames, $data);
}

$reponse->closeCursor();
