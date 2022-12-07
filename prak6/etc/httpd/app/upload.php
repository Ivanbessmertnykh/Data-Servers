<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (($_FILES['file']['name'] != "")) {

        $target_dir = "upload/";
        $file = $_FILES['file']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['file']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . "." . $ext;

        if (file_exists($path_filename_ext)) {
            echo "Этот файл уже существует";
        } else {
            move_uploaded_file($temp_name, $path_filename_ext);
            echo "Файл успешно загружен!";
        }
    }
}
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <input type="submit" value="Отправить">
</form>

<h4>Файлы на сервере</h4>
<?php
$arrFiles = scandir('upload');
foreach($arrFiles as $file) {
    if($file != "." && $file != "..") echo $file . "<br>";
}
