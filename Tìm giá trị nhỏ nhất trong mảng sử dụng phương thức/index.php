<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $arr = array(6, 3, 7, 9, 10, 5);
    $arrlength = count($arr);
    $index = 0;
    $min = $arr[0];
    for ($i = 0; $i < $arrlength; $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    echo "Vị trí của phần tử nhỏ nhất là: " . $index;

    ?>

</body>

</html>