<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sandbox PHP<?= " ~ " . $title ?></title>
  <link rel="stylesheet" href="/assets/style.css">
</head>

<body>

  <header>
    <?php require_once dirname(__DIR__) . '/templates/components/nav.php'; ?>
  </header>

  <?= $content ?>

</body>

</html>
