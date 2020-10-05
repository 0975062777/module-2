<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .result {
            width: 500px;
            height: 400px;
            border: 1px solid red;
        }
    </style>
</head>

<body>

    <h1>Simple Calculator</h1>

    <form method="post">
        <table>
            <tr>
                <td>First Operand:</td>
                <td><input type="number" name="number_one"></td>
            </tr>
            <tr>
                <td>Operate:</td>
                <td>
                    <select name="calculate">
                        <option value="Summation">Summation</option>
                        <option value="Subtraction">Subtraction</option>
                        <option value="Multiplication">Multiplication</option>
                        <option value="Division">Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second Operand:</td>
                <td><input type="number" name="number_two"></td>
            </tr>
        </table>
        <input type="submit">
    </form>

    <div class="result">

        <h1>Result</h1>

        <?php

        class Calculator
        {
            function calculate()
            {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $number_one = $_POST["number_one"];
                    $number_two = $_POST["number_two"];
                    $calculate = $_POST["calculate"];
                    if ($calculate == "Summation") {
                        return $number_one . "+" . $number_two . "=" . ($number_one + $number_two);
                    }
                    if ($calculate == "Subtraction") {
                        return $number_one . "-" . $number_two . "=" .  ($number_one - $number_two);
                    }
                    if ($calculate == "Multiplication") {
                        return $number_one . "X" . $number_two . "=" .  ($number_one * $number_two);
                    }
                    if ($calculate == "Division") {
                        if ($number_two == 0) {
                            try {
                                throw new Exception($number_two);
                            } catch (Exception $e) {
                                echo "lỗi";
                            }
                        } else {
                            return $number_one . ":" . $number_two . "=" .  ($number_one / $number_two);
                        }
                    }
                }
            }
        }

        $cal = new Calculator;
        echo $cal->calculate();


        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $number_one = $_POST["number_one"];
        //     $number_two = $_POST["number_two"];
        //     $calculate = $_POST["calculate"];
        //     $cal = new Calculator;

        //     if ($calculate == "Summation") {
        //         echo $number_one . "+" . $number_two . "=" . $cal->calculate($number_one, $number_two, $calculate);
        //     }
        // }


        ?>

    </div>

</body>

</html>