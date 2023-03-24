<?php
$sql = 'SELECT DATE_FORMAT(date, \'%d/%m/%Y %H:%i:%s\') AS date, pseudo, message FROM minichat, users WHERE minichat.user_ID=users.ID ORDER BY minichat.ID DESC LIMIT 0, 5';
$reponse = $bdd->query($sql);

$messages = [];
while ($data = $reponse->fetch()) {
  array_push($messages, $data);
}

$reponse->closeCursor();
