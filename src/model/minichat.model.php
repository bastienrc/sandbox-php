<?php
$sql = 'SELECT DATE_FORMAT(date, \'%d/%m/%Y %H:%i:%s\') AS date, pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 5';
$reponse = $bdd->query($sql);

$messages = [];
while ($data = $reponse->fetch()) {
  array_push($messages, $data);
}

$reponse->closeCursor();
