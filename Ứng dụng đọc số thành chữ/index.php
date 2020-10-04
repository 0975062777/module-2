<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">

        <input type="number" name="num" placeholder="Nhập số cần đọc">
        <input type="submit" value="Đọc số">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["num"];
        $num = str_split($number);
        if ($number > 0 && $number < 20) {
            switch ($number) {
                case 1:
                    echo "one";
                    break;
                case 2:
                    echo "two";
                    break;
                case 3:
                    echo "three";
                    break;
                case 4:
                    echo "four";
                    break;
                case 5:
                    echo "file";
                    break;
                case 6:
                    echo "six";
                    break;
                case 7:
                    echo "seven";
                    break;
                case 8:
                    echo "eight";
                    break;
                case 9:
                    echo "night";
                    break;
            }
        }
        if ($number < 100) {
            switch ($num[1]) {
                case 2:
                    echo "twenty " . $num[2];
                    break;
            }
        }
    }

    ?>

</body>

</html>