<?php
$title = "Utilisateurs";
ob_start();
?>

<div class="container-large">
  <div>
    <h1>Utilisateurs</h1>
    <a href="?users&add" class="Btn_add" title="Ajouter un nouvelle utilisateur">➕</a>
  </div>

  <?= (isset($_GET["add"])) ? 'Add' : 'No Add'; ?>

  <?php
  foreach ($users as $user) {
    echo "<p>" . $user['email'] . " => " . $user['pseudo'] . "</p>";
  }
  ?>
</div>

<?php
$content = ob_get_clean();

// LAYOUT
require_once dirname(__DIR__) . '/layout.php';
?>
