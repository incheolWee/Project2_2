<?php
$name = $_POST['name'];
$price = $_POST['price'];
$drink = $_POST['drink'];
$date = $_POST['date'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h3>입력하신 데이터는 다음과 같습니다.</h3>
<div>이름: <?= $name ?></div>
<div>가격: <?= $price ?></div>
<div>종류: <?= $drink ?></div>
<div>날짜: <?= $date ?></div>
</body>
</html>
