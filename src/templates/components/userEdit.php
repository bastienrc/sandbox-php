  <div class="formAdd">
    <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
    <h2>Ajouter un employé</h2>
    <p class="erreur_message">
      <?php
      // si la variable message existe , affichons son contenu
      if (isset($message)) {
        echo $message;
      }
      ?>

    </p>
    <form action="" method="POST">
      <label>Nom</label>
      <input type="text" name="nom">
      <label>Prénom</label>
      <input type="text" name="prenom">
      <label>âge</label>
      <input type="number" name="age">
      <input type="submit" value="Ajouter" name="button">
    </form>
  </div>

  <div class="formUpdate">
    <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
    <h2>Modifier l'employé : <?= $row['nom'] ?> </h2>
    <p class="erreur_message">
      <?php
      if (isset($message)) {
        echo $message;
      }
      ?>
    </p>
    <form action="" method="POST">
      <label>Nom</label>
      <input type="text" name="nom" value="<?= $row['nom'] ?>">
      <label>Prénom</label>
      <input type="text" name="prenom" value="<?= $row['prenom'] ?>">
      <label>âge</label>
      <input type="number" name="age" value="<?= $row['age'] ?>">
      <input type="submit" value="Modifier" name="button">
    </form>
  </div>
