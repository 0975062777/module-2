<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_description = $_POST["product_description"];
        $list_price = $_POST["list_price"];
        $discount_percent = $_POST["discount_percent"];
        echo $product_description;
        echo "<br/>";
        echo $list_price;
        echo "<br/>";
        echo $discount_percent / 10;
        echo "<br/>";
        $discount_amount = $list_price * $discount_percent / 100 * 0.1;
        echo $discount_amount;
        echo "<br/>";
        $discount_price = $list_price - $discount_amount;
        echo $discount_price;
    }

    ?>

</body>

</html>