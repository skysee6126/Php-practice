<?php

$s = date("s");

if ($s < 20) {
    echo '<p style = "background-color:red; color: white;">1~19</p>';
} elseif ($s <40) {
    echo '<p>20-39</p>';
} else {
    echo '<p style = "background-color:blue; color: white;">40~59</p>';
}

?>
