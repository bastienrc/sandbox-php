<h3 class='text-center'><?= ucfirst($user['pseudo']) ?></h3>

<p>
  Inscrit depuis le : <?= $user['created_at'] ?>
  <br />
  Dernière modification : <?= $user['modified_at'] ?>
</p>
<a href='index.php?change-profile'>Modifier mon profil</a>








<form action="treatment.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" class="form-control" id="pseudo" value="<?= $user['pseudo'] ?>" required />
  </div>

  <div class="form-group">
    <label for="email">Adresse email</label>
    <input type="email" name="email" class="form-control" id="email" value="<?= $user['email'] ?>" required />
  </div>

  <div class="form-group">
    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp" class="form-control" id="mdp" value="<?= $user['mdp'] ?>" required />
  </div>

  <div class="form-group">
    <label for="file">Changer fond d'écran</label>
    <input type="file" name="file" class="form-control" id="file" />
  </div>

  <div class="text-center">
    <button type="submit" name="submit_profile" class="btn btn-success">sauvegarder</button>
    <p><a href="index.php">Annuler</a></p>
  </div>
</form>
