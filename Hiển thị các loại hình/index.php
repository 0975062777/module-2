<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <select name="chose">
            <option value="chose_1">--Chose--</option>
            <option value="rectangle">rectangle</option>
            <option value="square">square</option>
            <option value="isosceles">isosceles</option>
            <option value="exit">exit</option>
        </select>
        <input type="submit" value="submit">
    </form>

    <table>
        <?php
        if (isset($_POST["chose"])) {
            $chose = $_POST["chose"];
            if ($chose == "rectangle") {
                for ($i = 0; $i < 3; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 7; $j++) {
                        echo "<td>*</td>";
                    }
                    echo "</tr>";
                }
            }
            if ($chose == "square") {
                for ($v = 1; $v <= 5; $v++) {
                    echo "<tr>";
                    for ($k = 0; $k < $v; $k++) {
                        echo "<td>*</td>";
                    }
                    echo "</tr>";
                }
            }
            if ($chose == "isosceles") {
                for ($e = 7; $e >= 1; $e--) {
                    echo "<tr>";
                    for ($f = 1; $f <= $e; $f++) {
                        echo "<td>*</td>";
                    }
                    echo "</tr>";
                }
            }
            if ($chose == "exit") {
                echo "";
            }
        }
        ?>
    </table>


</body>

</html>