<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>

<body>
    <?php
        $result = insertion_sort(explode(",", $_GET['arr'])); 

        for ($i = 0; $i < count($result); $i++) {
            echo $result[$i] . " ";
        }

        function swap (&$array, $key1, $key2) 
        {
            list($array[$key1], $array[$key2]) = array($array[$key2], $array[$key1]);
        }

        function insertion_sort ($s)
        {
            $i = $j = 0;
            if (is_array($s)) {
                $n = count($s);
            } else {
                $s = (string) $s;
                $n = mb_strlen($s);
            }	
            for ($i=1; $i < $n; $i++) {
                $j = $i;
                while (($j > 0) && ($s[$j] < $s[$j - 1])) {
                    swap($s, $j, $j - 1);
                    $j = $j - 1;
                }
            }
            return $s;
        }
    ?>
</body>

</html>