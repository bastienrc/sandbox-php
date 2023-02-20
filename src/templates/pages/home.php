<?php
$title = "Home";
ob_start();
?>

<h1>Home</h1>

<svg id="sword" viewBox="0 0 15 20" >
  <path d="m4 8 6-7 3-1-1 3-7 6c1 1 1 2 2 1 0 1 1 2 0 2a1.4 1.4 90 01-1 1 5 5 90 00-2-3q-.5-.1-.5.5t-1.5 1.3-.8-.8 1.3-1.5.5-.5a5 5 90 00-3-2 1.4 1.4 90 011-1c0-1 1 0 2 0-1 1 0 1 1 2m6-7 0 2 2 0-1.8-.2-.2-1.8" fill="darkgreen" />
</svg>

<?php
$content = ob_get_clean();

// LAYOUT
require_once dirname(__DIR__) . '/layout.php';
?>
