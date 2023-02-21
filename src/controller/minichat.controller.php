<?php
require dirname(__DIR__) . '/model/minichat.model.php';

// POST
if (isset($_POST['pseudo'])) {

  if (!preg_match('#^[\p{L}\p{Nd}\s]+$#u', $_POST['pseudo'])) {
    // Un Cookie pour le message d'erreur
    setcookie('msg', 'Veuillez ne pas utilisez de caractéres spéciaux !!!', time() + 365*24*3600);
  }
  else
  {
    $pseudo = $_POST['pseudo'];
    $message = htmlspecialchars($_POST['message']);

    // Un Cookie pour initialiser le message d'erreur
    setcookie('msg', '', time() + 365*24*3600);

    // Un Cookie pour me souvenir du Pseudo
    setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600);

    // Envoie des données
    $req = $bdd->prepare('INSERT INTO minichat (date, pseudo, message) VALUES(NOW(), :pseudo, :message)');
    $req->execute(array(
      'pseudo' => $pseudo,
      'message' => $message
      ));
  }
}

require dirname(__DIR__) . '/templates/pages/minichat.php';

