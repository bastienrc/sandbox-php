<?php

/**
 * les imports
 */
include_once './includes/bdd.inc.php';
include_once './includes/session.inc.php';

$_SESSION["notification"] = "Un problème est survenu!";

/**
 * Si "disconnection" - méthode GET
 * ...
 */
if (isset($_GET['disconnection']))
{
    // Destruction de la session
    session_destroy();
    unset($_SESSION['user_id']);
    session_start();
    $_SESSION["notification"] = "Bonne journée!";
}

/**
 * Sinon si "delete" - méthode GET
 * ...
 */
elseif (isset($_GET['delete']))
{
    // Efface l'utilisateur de la base de données
    $sql = "DELETE FROM `users` WHERE `id`=" . $_SESSION['user_id'];
    $req = $bdd->prepare($sql);
    $req->execute();

    // Efface l'image associé
    $image = './img/' . $_SESSION['user_id'] . '.jpg';
    if (file_exists($image))
    {
        unlink($image);
    }

    // Notif + Redirection
    $_SESSION["notification"] = "A bientôt!";
    unset($_SESSION['user_id']);

}

/**
 * Sinon si "submit_new_account" - méthode POST
 * ...
 */
elseif (isset($_POST['submit_new_account']))
{
    $pseudo = strtolower(trim(htmlspecialchars($_POST['pseudo'])));
    $email  = strtolower(trim(htmlspecialchars($_POST['email'])));
    $mdp    = trim(htmlspecialchars($_POST['mdp']));

    // Création d'un nouveau utilisateur
    $sql = "INSERT INTO `users`(`pseudo`, `email`, `mdp`, `created_at`) VALUES (:pseudo, :email, :mdp, :created_at)";

    $req = $bdd->prepare($sql);

    $req->execute(array(
        'pseudo'     => $pseudo,
        'email'      => $email,
        'mdp'        => $mdp,
        'created_at' => date("Y-m-d")
    ));

    $req->closeCursor();

    // Récupération de l'id de l'utilisateur
    $sql = "SELECT (`id`) FROM `users` WHERE `email`='" . $email . "'";

    $reponse = $bdd->query($sql);

    $user = $reponse->fetch();

    $reponse->closeCursor();

    $_SESSION['user_id'] = $user['id'];
    $_SESSION["notification"] = "Votre compte a bien été enregistré!";
}

/**
 * Sinon si "submit_connection" - méthode POST
 * ...
 */
elseif (isset($_POST['submit_connection']))
{
    // On se connecte
    $email = strtolower(trim(htmlspecialchars($_POST['email'])));
    $mdp = strtolower(trim(htmlspecialchars($_POST['mdp'])));

    $sql = "SELECT * FROM `users` WHERE `email`='" . $email . "'";

    $reponse = $bdd->query($sql);

    $user = $reponse->fetch();

    if ($email == $user['email'] && $mdp == $user['mdp'])
    {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION["notification"] = "Bonjour " . $user['pseudo'];
    }
    else
    {
        $_SESSION["notification"] = "Email ou mdp incorrect!";
    }
}

/**
 * Sinon si "submit_profile" - méthode POST
 * ...
 */
elseif (isset($_POST['submit_profile']))
{
    // Modification du profile
    $id     = $_SESSION['user_id'];
    $pseudo = strtolower(trim(htmlspecialchars($_POST['pseudo'])));
    $email  = strtolower(trim(htmlspecialchars($_POST['email'])));
    $imageName = './img/' . $id . '.jpg';
    $image  = file_exists($imageName) ? $imageName : NULL;
    $mdp    = trim(htmlspecialchars($_POST['mdp']));
    $messageImageErrorType   = "";
    $messageImageErrorTaille = "";

    if ($_FILES['file']['name'])
    {
        $type = $_FILES['file']['type'];
        $size = $_FILES['file']['size'];

        if ( $type === 'image/jpeg' )
        {

            if ($size <= 1000000 )
            {
                $image  = $imageName;
                move_uploaded_file($_FILES['file']['tmp_name'], $image);
            }
            else
            {
                $messageImageErrorTaille = "<br>L'image ne peut pas être enregistrer, elle est trop grande, taille max : 1mo !";
            }

        }
        else
        {
            $messageImageErrorType = "<br>L'image ne peut pas être enregistrer, elle n'est pas un jpeg !";
        }
    }

    $sql = "UPDATE `users` SET `pseudo`=:pseudo,`email`=:email,`mdp`=:mdp, `img`=:img, `modified_at`=:modified_at WHERE `id`=:id";

    $req = $bdd->prepare($sql);

    $req->execute(array(
        'id'          => $id,
        'pseudo'      => $pseudo,
        'email'       => $email,
        'img'         => $image,
        'mdp'         => $mdp,
        'modified_at' => date("Y-m-d")
    ));

    $req->closeCursor();

    $_SESSION["notification"] = "Les modifications ont été enregistrées!";
    $_SESSION["notification"] .= $messageImageErrorType;
    $_SESSION["notification"] .= $messageImageErrorTaille;
}


header('Location: index.php');
