<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<style>
    .first {
        width: 100px;
        height: 100px;
        background: #83A7C9;
        border-radius: 50%;
    }

    .second {
        width: 200px;
        height: 100px;
        background: #f40505;
        border-radius: 100px/50px;
    }

    .third {
        width: 0;
        height: 0;
        border-left: 50px solid transparent;
        border-right: 50px solid transparent;
        border-bottom: 100px solid #24375B;
    }

    .fourth {
        width: 0;
        height: 0;
        margin-bottom: 30px;
        border-left: 50px solid transparent;
        border-right: 50px solid transparent;
        border-bottom: 100px solid #374F9C;
        position: relative;
    }

    .fourth:after {
        content: "";
        width: 0;
        height: 0;
        position: absolute;
        top: 30px;
        left: -50px;
        border-left: 50px solid transparent;
        border-right: 50px solid transparent;
        border-top: 100px solid #374F9C;
    }
</style>

<body>
    <?php
        $number = $_GET['num'];
        switch ($number) {
            case 1:
                echo "<div class='first'></div>";
                break;
            case 2:
                echo "<div class='second'></div>";
                break;
            case 3:
                echo "<div class='third'></div>";
                break;
            case 4:
                echo "<div class='fourth'></div>";
                break;
        }
    ?>
</body>

</html>