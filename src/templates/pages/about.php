<?php
$title = "À Propos";
ob_start();
?>

<div class="container">
  <h1>À Propos</h1>

  <p>Bac à sable pour le PHP.</p>
</div>

<?php
$content = ob_get_clean();

// LAYOUT
require_once dirname(__DIR__) . '/layout.php';
?>
