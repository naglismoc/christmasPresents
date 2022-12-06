<?php
include "./models/DB.php";

class Present {
    public $price;
    public $presentTitle;
    public $wrapped;


    public function __construct($id = null, $price = null, $presentTitle = null, $wrapped = null)
    {
        $this->id = $id;
        $this->price = $price;
        $this->presentTitle = $presentTitle;
        $this->wrapped = $wrapped;
    }

    public static function all(){
        $presents = [];
        $db = new DB();
        $query = "SELECT * FROM `presents`";
        $result = $db->conn->query($query);

        while($row = $result->fetch_assoc()){
            $presents[] = new Present( $row['id'], $row['price'], $row['present_title'], $row['wrapped']);
        }
        $db->conn->close();
        return $presents;
    }





}
?>