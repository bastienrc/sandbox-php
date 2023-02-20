<?php
// DATABASES
require dirname(__DIR__).'/src/config/bdd.php';

// ROUTER
if (isset($_GET["about"]))               { require dirname(__DIR__).'/src/controller/about.controller.php'; }
if (isset($_GET["films"]))               { require dirname(__DIR__).'/src/controller/films.controller.php'; }
else                                     { require dirname(__DIR__).'/src/controller/home.controller.php'; }
