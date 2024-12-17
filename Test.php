<?php

include_once "DbConfig.php";
include_once "Crud.php";
include_once "Paginator.php";

$crud = new Crud;

$data_array = [
    "title" => "interstellar",
    "year_released" => "2015-04-10",
];

// $crud->create($data_array, "movies");

// $results = $crud->read("SELECT * FROM movies");
// var_dump($results);

// $crud->update("UPDATE movies SET title = 'Titanic 2' WHERE id = 1");

// $crud->delete("DELETE FROM movies WHERE id=2");

$paginator = new Paginator(20,5);
echo $paginator->get_pagination_links();
echo $paginator->get_offset_and_limit();