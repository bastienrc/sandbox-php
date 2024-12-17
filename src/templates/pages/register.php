<h3 class="text-center">Créer un nouveau compte</h3>

<form action="treatment.php" method="post">
  <div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="pseudo" required />
  </div>

  <div class="form-group">
    <label for="email">Adresse email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="email@gmail.com" required />
  </div>

  <div class="form-group">
    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp" class="form-control" id="mdp" placeholder="mdp" required />
  </div>

  <div class="text-center">
    <button type="submit" name="submit_new_account" class="btn btn-success">nouveau compte</button>
  </div>
</form>

<div class="dropdown-divider"></div>

<p class="text-center"><a href="index.php?">Se connecter</a></p>
