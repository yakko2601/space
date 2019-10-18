<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="app.php" method="post">
        <input type="text" name="first_num" />
        <input type="text" name="second_num" />
        <input type="text" name="third_num" />
        <button type="submit">Send</button>
    </form>
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$third_num = $_POST['third_num'];

function summ($first_num, $second_num, $third_num) {
    return  $sum = $first_num + $second_num + $third_num;
}

echo 'Сумма = ' . summ($first_num, $second_num, $third_num);
?>
</body>
</html>