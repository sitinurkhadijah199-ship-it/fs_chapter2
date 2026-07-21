<?php
function checkBMI($weight, $heighht) {
    $bmi = $weight / ($height * $height);
    return $bmi;
}

$myBMI = checkBMI(70, 1.7); //70kg and 1.7m
echo "Your BMI is : " . number_format($myBMI, 2);

?>