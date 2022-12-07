<?php
session_start();

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

if (!empty($_SESSION['theme'])) {
    if ($_SESSION['theme'] == 'dark') {
        echo '<body style="background-color:black">';
    } else if ($_SESSION['theme'] == 'light') {
        echo '<body style="background-color:white">';
    }
}

if (!empty($_SESSION['lang'])) {
    if ($_SESSION['lang'] == 'ru') {
        echo
        '
    <form action="settings.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="theme" value="'. get_current_theme() . '">
        <input type="submit" value="Сменить тему">
    </form>
    
    <form action="settings.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="lang" value="en">
        <input type="submit" value="Сменить язык">
    </form>';
    } else if ($_SESSION['lang'] == 'en') {
        echo
    '<form action="settings.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="theme" value="'. get_current_theme() . '">
        <input type="submit" value="Change theme">
    </form>
   
    
    <form action="settings.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="lang" value="ru">
        <input type="submit" value="Change language">
    </form>';
    }
} else {
    echo
    '
    <form action="settings.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="theme" value="'. get_current_theme() . '">
        <input type="submit" value="Сменить тему">
    </form>
    
    <form action="settings.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="lang" value="en">
        <input type="submit" value="Сменить язык">
    </form>';
}

function get_current_theme(): string
{
    if (empty($_SESSION['theme'])) {
        return "dark";
    } else {
        if($_SESSION['theme'] == "dark"){
            return "light";
        } else {
            return "dark";
        }
    }
}
