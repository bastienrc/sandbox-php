<?php
$title = "Films";
ob_start();
?>

<div class="container">
  <h1>Films</h1>

  <div id="info">
    <ul>
      <?php
      foreach ($films as $film) {
        echo "<li>" . $film['title'] . " est sorti en " . $film['year'] . ", et c'est un film " . $note[$film['note'] - 1] . "</li>";
      }
      ?>
    </ul>
  </div>
</div>

<?php
$content = ob_get_clean();

// LAYOUT
require_once dirname(__DIR__) . '/layout.php';
?>
