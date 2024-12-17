<?php

include_once "../MovieController.php";
include_once "../Session.php";
Session::start();

$movieController = new MovieController;

$movie_id = $_GET['id'];

$movieController->deleteMovie($movie_id);