<?php
$w = $_GET['weight'];
$h = $_GET['height'];
$bmi = $w/($h*$h);
echo "<h2> BMI is $bmi </h2>";
?>