<?php
$sql = "SELECT * FROM `films`";
$reponse = $bdd->query($sql);

$films = [];
while ($data = $reponse->fetch()) {
  array_push($films, $data);
}

$reponse->closeCursor();

