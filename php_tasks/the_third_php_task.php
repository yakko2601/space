<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="surname" />
        <input type="text" name="name" />
        <input type="text" name="patronymic" />
        <button type="submit">Send</button>
    </form>
<?php

$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
//функция сокращающая слово до первой буквы
function abbreviation($value){
    return $res = mb_substr($value,0,1).'.';
}

echo $surname.' '. abbreviation($name) . abbreviation($patronymic);

?>

</body>
</html>