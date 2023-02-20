<?php
$title = "À Propos";
ob_start();
?>

<h1>À Propos</h1>

<p>Bac à sable pour le PHP.</p>

<?php
$content = ob_get_clean();

// LAYOUT
require_once dirname(__DIR__) . '/layout.php';
?>
