<?php
include "./models/Present.php";

class PresentController{

    public static function index()
    {
        $presents = Present::all();
        return $presents;
    }








}





















?>