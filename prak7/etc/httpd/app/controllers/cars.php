<?php

require_once('../services/get_cars_data.php');
require_once('../services/post_cars_data.php');
require_once('../services/put_cars_data.php');
require_once('../services/delete_cars_data.php');

$request_method = $_SERVER['REQUEST_METHOD'];
switch ($request_method) {
    case 'GET':
        get_cars_data();
        break;
    case 'POST':
        post_cars_data();
        break;
    case 'PUT':
        put_cars_data();
        break;
    case 'DELETE':
        delete_cars_data();
        break;
}
