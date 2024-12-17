<?php
require dirname(__DIR__) . '/model/users.model.php';
require dirname(__DIR__) . '/templates/pages/users.php';

class User
{
  function updateUser()
  {
    $id = $_GET['id'];

    // requête pour afficher les infos d'un employé
    $req = mysqli_query($con, "SELECT * FROM Employe WHERE id = $id");
    $row = mysqli_fetch_assoc($req);

    // vérifier que le bouton ajouter a bien été cliqué
    if (isset($_POST['button'])) {
      extract($_POST);
      if (isset($nom) && isset($prenom) && $age) {
        $req = mysqli_query($con, "UPDATE employe SET nom = '$nom' , prenom = '$prenom' , age = '$age' WHERE id = $id");
        if ($req) {
          header("location: index.php");
        } else {
          $message = "Employé non modifié";
        }
      } else {
        $message = "Veuillez remplir tous les champs !";
      }
    }
  }

  function addUser()
  {
    if (isset($_POST['button'])) {
      extract($_POST);
      if (isset($nom) && isset($prenom) && $age) {
        include_once "connexion.php";
        $req = mysqli_query($con, "INSERT INTO Employe VALUES(NULL, '$nom', '$prenom','$age')");
        if ($req) {
          header("location: index.php");
        } else {
          $message = "Employé non ajouté";
        }
      } else {
        $message = "Veuillez remplir tous les champs !";
      }
    }
  }

  function deleteUser()
  {
    $id = $_GET['id'];
    $req = mysqli_query($con, "DELETE FROM employe WHERE id = $id");
    header("Location:index.php");
  }
}
