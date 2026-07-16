<?php

$favColor = "red";

switch ($favColor) {
    case "red":
        echo "Your favorite color is red!";
        break; //Stops the execution
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "purple":
        echo "Your favorite color is purple";
        break;
    default:
        echo "Your favorite color is neither red nor blue or purple!";

}


echo "<hr><h3>Exercise</h3>";

$item = "Tea";

switch ($item) {
    case "Coffee":
        $price = 1.00;
        break;
    case "Tea":
        $price = 0.80;
        break;
    case "Cappucino":
        $price = 5.00;
        break;
    case "Orange":
    $price = 2.50;
    break;

    default:
    echo "Item not found!";
}
 
echo "item :".$item."</br>";
echo "price :".number_format($price,2)."</br>";
echo "total price : RM";
echo $price * 15;

echo "<hr><h3>For Loop</h3>";
for ($x = 0; $x <10; $x ++){
    echo "Even number: $x <br>";
}

echo "<hr><h3>While Loop</h3>";
$i = 6;
while ($i <= 5) {
    echo "The number is: $i <br>";
    $i++; // increment to avoid infinite loop!
}

echo "<hr><h3>Do While Loop</h3>";
$b = 6;
do {
    echo "The number is: $b <br>";
    $b++; //increment
} while ($b <= 5);


echo "<hr><h3>Foreach Loop</h3>";
//Array
$students = ["Abu", "Raj", "Nilam"];

foreach ($students as $name) {
    echo "Student Name: $name <br>";
}

echo "<hr><h3>Multiplication Table for 5</h3>";
for ($i = 1; $i <=12; $i ++){
    $result = $i * 5;
    echo "$i x 5 = $result.<br>";
}

echo "<hr><h3>Defining the function</h3>";
function functionName()
{
    //code to be executed;
}

//Define the function
function greetStudent($name)
{
    echo "Hello $name, welcome to Full Stack class!<br>";
}
//calling the function
greetStudent("Siti");

echo "<hr><h3>Return Values</h3>";
function calculateTotal($price, $quantity) {
    $total = $price * $quantity;
    return $total; //Sends the result back
}
$bill = calculateTotal(10,5);
echo "Total Bill: RM " . $bill;
?>