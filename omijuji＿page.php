<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $name = $_POST["name"];
    function h ($value) {
        return htmlspecialchars($value, ENT_QUOTES);
    }
    ?>
</head>

<body>
<p><?= h($name); ?>さんの本日の運勢はこちらです！</p>

<img src= "img/omikuji.png" />
<?php 

$num = mt_rand(1,7);
$dai = '<img src="img/1.png" />';
$cyu = '<img src="img/2.png" />';
$syou = '<img src="img/3.png" />';
$kichi = '<img src="img/4.png" />';
$kyou = '<img src="img/5.png" />';

if ($num === 1) {
    echo $dai;
} elseif ($num === 2) {
    echo $cyu;
} elseif ($num === 3) {
    echo $syou;
} elseif ($num === 4) {
    echo $kichi;
} else {
    echo $kyou;
}

?>
</body>
</html>