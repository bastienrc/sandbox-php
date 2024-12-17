<nav id="main-nav">
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="index.php?films">Films</a></li>
    <li><a href="index.php?videogames">Video Games</a></li>
    <li><a href="index.php?minichat">Minichat</a></li>
    <li><a href="index.php?users">Utilisateurs</a></li>
    <li><a href="index.php?login">login</a></li>
    <li><a href="index.php?about">À Propos</a></li>
  </ul>
  <div><?php if (isset($_SESSION["notification"])) { echo $_SESSION["notification"]; }  ?></div>
</nav>
