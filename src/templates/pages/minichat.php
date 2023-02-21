<?php
$title = "Mini Chat";
ob_start();
?>
<div class="container-large">

  <h1><?= $title ?></h1>

  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert" role="alert">
      <?= $_COOKIE['msg']; ?>
    </div>
  <?php } ?>

  <div id="minichat">
    <form method="post" action="?minichat">
      <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <div>
          <input type="text" name="pseudo" id="pseudo" placeholder="Votre Pseudo" required="required">
        </div>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <div>
          <textarea name="message" id="message" required="required" rows="10"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div>
          <a href="?minichat">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="32">
              <path d="M89.1 202.6c7.7-21.8 20.2-42.3 37.8-59.8c62.5-62.5 163.8-62.5 226.3 0L370.3 160H320c-17.7 0-32 14.3-32 32s14.3 32 32 32H447.5c0 0 0 0 0 0h.4c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L398.4 97.6c-87.5-87.5-229.3-87.5-316.8 0C57.2 122 39.6 150.7 28.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5zM23 289.3c-5 1.5-9.8 4.2-13.7 8.2c-4 4-6.7 8.8-8.1 14c-.3 1.2-.6 2.5-.8 3.8c-.3 1.7-.4 3.4-.4 5.1V448c0 17.7 14.3 32 32 32s32-14.3 32-32V396.9l17.6 17.5 0 0c87.5 87.4 229.3 87.4 316.7 0c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.5 62.5-163.8 62.5-226.3 0l-.1-.1L109.6 352H160c17.7 0 32-14.3 32-32s-14.3-32-32-32H32.4c-1.6 0-3.2 .1-4.8 .3s-3.1 .5-4.6 1z" />
            </svg>
          </a>
          <input type="submit" value="Envoyer" />
        </div>
      </div>
    </form>

    <div>
      <?php
      foreach ($messages as $message) {
      ?>
        <p>
          <span class="date"><?= $message['date']; ?></span> ::
          <strong><?= htmlspecialchars($message['pseudo']); ?></strong>:
          <?= htmlspecialchars($message['message']); ?>
        </p>
      <?php
      }
      ?>
    </div>
  </div>

</div>

<?php
$content = ob_get_clean();

// LAYOUT
require_once dirname(__DIR__) . '/layout.php';
?>
