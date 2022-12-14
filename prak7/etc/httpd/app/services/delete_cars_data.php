<?php
function delete_cars_data() {
    $mysqli = new mysqli("db", "ivan", "ivan123321", "site");
    $entity = json_decode(file_get_contents('php://input'), true);
    
    $id = $entity["id"];
    $result = $mysqli->query("DELETE FROM cars where `id` = $id");
    echo "OK";
}
