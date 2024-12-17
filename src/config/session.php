<?php

session_start();

/**
 * Si session "notification"
 * ...
 */
$notif = "";

if (isset($_SESSION['notification']))
{
    $notif = "<div class='notification fixed-top' role='alert'>" . $_SESSION['notification'] . "</div>";
    unset($_SESSION['notification']);
}

/**
 * Si session "user_id"
 * ...
 */
if (isset($_SESSION['user_id']))
{
    $sql = "SELECT * FROM `users` WHERE `id`='" . $_SESSION['user_ID'] . "'";
    $reponse = $bdd->query($sql);
    $user = $reponse->fetch();
    $reponse->closeCursor();
}
