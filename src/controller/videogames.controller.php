<?php
require dirname(__DIR__).'/model/videogames.model.php';

$videogame = $videogames[mt_rand(0, count($videogames)-1)];

require dirname(__DIR__).'/templates/pages/videogames.php';
