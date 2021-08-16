<?php

require '../app/core/model.php';

class user extends model{

    public $conn;

    function __construct(){
        
    }

    public function getData(){
        require '../app/core/database.php';
        $sql = "SELECT * FROM members";
        $result = $conn->query($sql);

          return $result;
        
    }

    public function search($name){
        require '../app/core/database.php';
        $sql = "SELECT * FROM `members` WHERE `name` LIKE '%{$name}%'";
        
        $result = $conn->query($sql);
        return $result;
    }

    public function insertData($id, $name, $address, $password){
        require '../app/core/database.php';
        $sql = "INSERT INTO members(id, name, address, password)
        VALUES ('.$id.', '.$name.', '.$address.', '.$password.')";

     if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }

}