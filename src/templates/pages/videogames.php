<?php
$title = "Video Games";
ob_start();
?>

<h1>Video Games</h1>

<p>
  <strong>Jeu</strong> : <?= $videogame['nom']; ?><br />
  Le possesseur de ce jeu est : <?= $videogame['possesseur']; ?>, et il le vend à <?= $videogame['prix']; ?> euros !<br />
  Ce jeu fonctionne sur <?= $videogame['console']; ?> et on peut y jouer à <?= $videogame['nbre_joueurs_max']; ?> au maximum<br />
  <?= $videogame['possesseur']; ?> a laissé ces commentaires sur <?= $videogame['nom']; ?> : <em><?= $videogame['commentaires']; ?></em>
</p>

<?php
$content = ob_get_clean();

// LAYOUT
require_once dirname(__DIR__) . '/layout.php';
?>
