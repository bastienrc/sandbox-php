<?php
date_default_timezone_set('Europe/Paris');

// Connection
$host     = "db"; // Le nom du service docker correspondant à la base de donnée
$database = "mediatheque";
$login    = "root";
$mdp      = "mariadb";

try {
  $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $login, $mdp);
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

// Affiche tous les enregistrements de la table
$note = ['nul', 'bof', 'passable', 'bien', 'excellent'];

$sql = "SELECT * FROM `films`";
$reponse = $bdd->query($sql);

// while ($data = $reponse->fetch()) {
//   echo "<p>" . $data['title'] . " est sorti en " . $data['year'] . ", et c'est un film " . $note[$data['note'] - 1] . "</p>";
// }

// $reponse->closeCursor();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sandbox PHP</title>
  <style>
    #sword {
      width: 30%;
      float: left;
    }

    #info {
      width: 70%;
      float: right;
    }

    h1 {
      text-align: center;
    }
  </style>
</head>

<body>
  <h1>Sandbox PHP</h1>

  <svg id="sword" viewBox="0 0 30 10" width="300" height="300">
    <path d="m4 8 6-7 3-1-1 3-7 6c1 1 1 2 2 1 0 1 1 2 0 2a1.4 1.4 90 01-1 1 5 5 90 00-2-3q-.5-.1-.5.5t-1.5 1.3-.8-.8 1.3-1.5.5-.5a5 5 90 00-3-2 1.4 1.4 90 011-1c0-1 1 0 2 0-1 1 0 1 1 2m6-7 0 2 2 0-1.8-.2-.2-1.8" fill="red" />
  </svg>

  <div id="info">
    <ul>
      <?php
      while ($data = $reponse->fetch()) {
        echo "<li>" . $data['title'] . " est sorti en " . $data['year'] . ", et c'est un film " . $note[$data['note'] - 1] . "</li>";
      }
      ?>
    </ul>
  </div>


</body>

</html>
