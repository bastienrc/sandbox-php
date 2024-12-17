  <table>
    <tr id="items">
      <th>Nom</th>
      <th>Prénom</th>
      <th>Age</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
    <?php
    //inclure la page de connexion
    // include_once "connexion.php";
    //requête pour afficher la liste des employés
    // $req = mysqli_query($con, "SELECT * FROM Employe");
    if (mysqli_num_rows($req) == 0) {
      //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
      echo "Il n'y a pas encore d'employé ajouter !";
    } else {
      //si non , affichons la liste de tous les employés
      while ($row = mysqli_fetch_assoc($req)) {
    ?>
        <tr>
          <td><?= $row['nom'] ?></td>
          <td><?= $row['prenom'] ?></td>
          <td><?= $row['age'] ?></td>
          <!--Nous alons mettre l'id de chaque employé dans ce lien -->
          <td><a href="modifier.php?id=<?= $row['id'] ?>"><img src="images/pen.png"></a></td>
          <td><a href="supprimer.php?id=<?= $row['id'] ?>"><img src="images/trash.png"></a></td>
        </tr>
    <?php
      }
    }
    ?>


  </table>
