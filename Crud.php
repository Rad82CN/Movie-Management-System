<?php

include_once "DbConfig.php";

class Crud {

    private $conn;

    public function __construct(){
        
        $this->conn = getdbconnection();
    }

    public function create($data_array, $table) {

        // creating a structure with given array that look like this: [data1,data2,data3]
        $columns = implode(",", array_keys($data_array));

        // creating a structure with given array that look like this: [:data1,:data2,:data3]
        $place_holders = ":".implode(",:", array_keys($data_array));
        
        $query = "INSERT INTO $table ($columns) VALUES ($place_holders)";

        $statement = $this->conn->prepare($query);
        $statement->execute($data_array);
        return $this->conn->lastInsertId();
    }

    public function read($sql_query) {

        $statement = $this->conn->query($sql_query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function update($sql_query) {

        $statement = $this->conn->prepare($sql_query);
        $statement->execute();
    }

    public function delete($sql_query) {

        $statement = $this->conn->prepare($sql_query);
        $statement->execute();
    }

}