
<?php
/*DFP40443: Full Stack Web Development
Activity: My First PHP Script
Name: SITI
*/

$name ="SITI NUR KHADIJAH";

//This line prints a message to the browser
echo "Hello World!";

#You can also include HTML tags inside echo
echo "<h1>Welcome to PHP Programming</h1>";
echo "<hr><h3>My name is $name</h3>";
echo "<br><br>";

echo $name;

echo "<hr><h3>Double Quote vs Single Quote</h3>";

$institusi = "Politeknik Kuala Terengganu";

echo "institusi : $institusi";
echo "<br>";
echo 'institusi : $institusi';

echo "<hr><h3>Constant</h3>";

//Defining constant
define("SITE_URL","https://pkt.mypolycc.edu.my");


//using constant
echo 'Thank you for visiting - ' . SITE_URL;
echo "<br>";
echo SITE_URL;

echo "<hr><h3>Constant VS Varible </h3>";
// 1.Defining a constant (Fixed value)
define("TAX_RATE",0.06); //6% Salex Tax

// 2. Declaring Variable (can change)
$itemName = "Laptop";
$price = 2500;

$itemName = "Mouse";
$price = 25;

// 3.Calculation
$totalTax = $price * TAX_RATE;
$totalPrice = $price + $totalTax;

// 4.Output
echo "item: " . $itemName . "<br>";
echo "Base Price: RM " . $price . "<br>";
echo "Total with Tax : RM " . $totalPrice;
?>


