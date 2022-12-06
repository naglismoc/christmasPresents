<?php
class DB{
    public $conn;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "webwak1011_christmas_presents";
        $this->conn = new mysqli($servername, $username, $password, $db);
    }








}


?>