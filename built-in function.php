<?php

echo "<hr><h3>Built in function in PHP</h3>";
echo "<hr><h3>1. strlen</h3>";
echo "<br>";


$name = " SITI NUR KHADIJAH  ";
echo strlen($name);
?>


"<hr><h3>2. strtoupper($str) , strtolower($str)</h3>"
<?php
echo $name."<br><br>";
echo strtoupper($name)."<br><br>";
echo strtolower($name);

?>


<hr><h3>3.rand($min,max) </h3>

<?php
$lucky = rand(1,6);
echo $lucky;

?>

<hr><h3>4. date($format) </h3>
<?php

echo date("d-M-y");
echo"<br><br>";
echo "Copyright 2021 -". date("Y");

?>

<hr><h3>5. count($array) </h3>
<?php

$warna[] = ["purple", "merah", "kuning"];

echo count($warna); 

?>

<hr><h3>6.Trim </h3>
<?php
echo "Text = ".$name;
echo "<br>Size = ".strlen($name);

//remove white space
echo "<br>Trim = ". trim($name);
echo "<br>Size Trim = ". strlen(trim($name));

?>

<hr><h3>7.Substr</h3>
<?php
$institusi = "Politeknik Kuala Terengganu";
echo "Test : ".$institusi;

echo "<br>";
echo substr($institusi,0,10);

?>

