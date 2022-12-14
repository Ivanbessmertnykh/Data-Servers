<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['num'])) {
        $_SESSION['num'] = $_POST['num'];
    }
    if (!empty($_POST['theme'])) {
        $_SESSION['theme'] = $_POST['theme'];
    }
    if (!empty($_POST['lang'])) {
        if (empty($_SESSION["lang"]) || $_SESSION['lang'] == 'ru') {
            $_SESSION['lang'] = 'en';
        } else if ($_SESSION['lang'] == 'en') {
            $_SESSION['lang'] = 'ru';
        } else {
            $_SESSION['lang'] = 'ru';
        }
    }
}
