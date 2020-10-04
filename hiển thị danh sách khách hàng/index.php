<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table tr td {
            width: 150px;
            border: 1px solid red;
        }

        table tr td img {
            width: 80px;
            height: 50px;
        }
    </style>
</head>

<body>
    <h1>Danh sách khách hàng</h1>
    <table>
        <thead>
            <tr>
                <td>Tên</td>
                <td>Ngày sinh</td>
                <td>Địa chỉ</td>
                <td>Ảnh</td>
            </tr>
        </thead>

        <?php
        $customer = array(
            "1" => array(
                "ten" => "Trang",
                "ngaysinh" => "1980",
                "diachi" => "khối 7, lê lợi",
                "anh" => "img/a1.jpg"
            ),
            "2" => array(
                "ten" => "Trang",
                "ngaysinh" => "1980",
                "diachi" => "khối 7, lê lợi",
                "anh" => "img/a1.jpg"
            ),
            "3" => array(
                "ten" => "Trang",
                "ngaysinh" => "1980",
                "diachi" => "khối 7, lê lợi",
                "anh" => "img/a1.jpg"
            )
        );
        ?>

        <?php
        foreach ($customer as $key => $value) {
            echo "<tr>";
            echo "<td>" . $value['ten'] . "</td>";
            echo "<td>" . $value['ngaysinh'] . "</td>";
            echo "<td>" . $value['diachi'] . "</td>";
            echo "<td><img src='" . $value['anh'] . "'></td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>