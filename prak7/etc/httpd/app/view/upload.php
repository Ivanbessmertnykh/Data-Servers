<?php require_once('../services/upload_service.php'); ?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <input type="submit" value="Отправить">
</form>

<h4>Файлы на сервере</h4>
<?php
$arrFiles = scandir('../upload');
foreach($arrFiles as $file) {
    if($file != "." && $file != "..") echo $file . "<br>";
}
