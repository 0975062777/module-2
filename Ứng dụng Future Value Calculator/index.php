<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Ứng dụng Future Value Calculatorđược sử dụng để tính giá
        trị tương lai đối với các khoản tiền đầu tư.</h2>

    <form method="post">

        <input type="text" name="invest" placeholder="Nhập lượng tiền đầu tư">
        <input type="text" name="interest_rate" placeholder="Nhập lãi suất">
        <input type="text" name="year_invest" placeholder="Nhập số năm đầu tư">
        <input type="submit" value="Calculate">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $invest = $_POST["invest"];
        $interest_rate = $_POST["interest_rate"];
        $year_invest = $_POST["year_invest"];
        for ($i = 1; $i <= $year_invest; $i++) {
            $invest += $invest * $interest_rate / 100;
        }
        echo $invest;
    }

    ?>

</body>

</html>