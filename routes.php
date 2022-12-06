<?php include "./controllers/PresentController.php";



$presents = PresentController::index();


if($_SERVER['REQUEST_METHOD'] == "POST"){

    print_r($_POST);
    die;
}


























?>