<?php
$title = "Login";
ob_start();
?>

<div class="container">
    <h1>Se connecter</h1>

    <form action="?login" method="post">
        <div>
            <label for="email">Adresse email</label>
            <input type="email" name="email" id="email" placeholder="email@gmail.com" required />
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="password" required />
        </div>

        <div>
            <button type="submit" name="login">connexion</button>
        </div>
    </form>

    <p class="text-center"><a href="?register">Nouveau compte</a></p>
</div>

<?php
$content = ob_get_clean();

// LAYOUT
require_once dirname(__DIR__) . '/layout.php';
?>
