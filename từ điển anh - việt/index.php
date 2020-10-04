<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Từ điển Anh - Việt</h1>
    <form method="post">
        <input type="text" name="search" placeholder="Nhập từ cần tìm">
        <input type="submit" value="Tìm">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchword = $_POST["search"];
        $flag = 0;


        $distionary = array(
            "hello" => "xin chào",
            "book" => "quyển vở",
            "how" => "như thế nào",
            "computer" => "máy tính"
        );


        foreach ($distionary as $word => $value) {
            if ($searchword == $word) {
                echo "<h2>Từ: " . $word . "<br/>Có nghĩ là: " . $value . "<h2/>";
                $flag = 1;
            }
        }
        if ($flag == 0) {
            echo "<h2>không tìm thấy từ cần tra<h2/>";
        }
    }

    ?>
</body>

</html>