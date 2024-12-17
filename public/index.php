<?php
// DATABASES
require dirname(__DIR__).'/src/config/bdd.php';
require dirname(__DIR__).'/src/config/session.php';

// ROUTER
if (isset($_GET["about"]))               { require dirname(__DIR__).'/src/controller/about.controller.php'; }
if (isset($_GET["films"]))               { require dirname(__DIR__).'/src/controller/films.controller.php'; }
if (isset($_GET["videogames"]))          { require dirname(__DIR__).'/src/controller/videogames.controller.php'; }
if (isset($_GET["minichat"]))            { require dirname(__DIR__).'/src/controller/minichat.controller.php'; }
if (isset($_GET["users"]))             { require dirname(__DIR__).'/src/controller/users.controller.php'; }
if (isset($_GET["login"]))             { require dirname(__DIR__).'/src/controller/login.controller.php'; }
else                                     { require dirname(__DIR__).'/src/controller/home.controller.php'; }
