<?php
$db = new PDO('mysql:host=db;dbname=site', 'ivan', 'ivan123321');
$row = $db->query("SELECT `name`, price FROM cars")->fetchAll(PDO::FETCH_ASSOC);
