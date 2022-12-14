<?php
function get_cars_data() {
    $mysqli = new mysqli("db", "ivan", "ivan123321", "site");
    if (!empty($_GET)) {
        $id = $_GET["id"];
        $result = $mysqli->query("SELECT `id`, `name`, price FROM cars where `id` = $id");
        foreach ($result as $item) {
            $car = array(
                "id" => $item["id"],
                "name" => $item["name"],
                "price" => $item["price"]
            );
            echo json_encode($car);
        }
    } else {
        $result = $mysqli->query("SELECT `id`, `name`, price FROM cars");
        $array = array();
    
        foreach ($result as $item) {
            $car = array(
                "id" => $item["id"],
                "name" => $item["name"],
                "price" => $item["price"]
            );
            array_push($array, $car);
        }
        echo json_encode($array);
    }
}
