<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    function h ($value) {
        return htmlspecialchars($value, ENT_QUOTES);
    }
    ?>
</head>
<body>

<p><?= h($name); ?>さん</p>
<p><?= h($age); ?>歳</p>

<?php
    $num = rand(1,5);

    if ($num == 1) {
        echo "大吉";
    } elseif ($num == 2) {
        echo "中吉";
    } elseif ($num == 3) {
        echo "小吉";
    } elseif ($num == 4) {
        echo "吉";
    } else {
        echo "凶";
    }

?>

</body>
</html>