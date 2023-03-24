<?php

$sql = "SELECT `email`, `pseudo` FROM `users`";
$reponse = $bdd->query($sql);

$users = [];
while ($data = $reponse->fetch()) {
  array_push($users, $data);
}

$reponse->closeCursor();
