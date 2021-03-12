<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $str_base = "A_B_C_D_E_F_G";
    
    $str = str_replace("A","Z",$str_base);
    $str2 = explode("_", $str_base);

     echo $str.'<br>';
     var_dump($str2);
     echo '$str[0]<br>';

     $d = date("Y/M/D");
     echo $d;


?>
</body>
</html>