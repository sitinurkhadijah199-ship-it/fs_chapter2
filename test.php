<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset ="UTF-8">
        <meta name ="viewport" content= "width=device-width, initial-scale=1.0">
        <title>Document</title>


    </head>
    <body>
        <p>
            <h3>Arithmethic Logic</h3>
        </p>    
        
</body>
</html>


<?php
$a = 15;
$b = 4;

$x = $a + $b; //Addition = 19
$x = $a - $b; //Substraction = 11
$x = $a / $b; //division = 3.75
$x = $a * $b; //multiplication = 60
$x = $a % $b; //modulus = (reminder) = 3
$x = $a ** $b; //Exponentation = 50,625

echo $x;

echo "<hr><h3>Koperasi PKT</h3>";

$a = 4; //item price
$b = 5; //quantit 
$c = 0.06; //sst
$d = 2; //discount

$total = $a * $b;
$price_after_disc = $total - $d;
$sst_amount = $price_after_disc * $c;
$final_price = $sst_amount + $price_after_disc;



echo $final_price;


//Using Shorthand Assignment Operators

echo "<hr><h3> Shorthand Assignment Operators</h3>";


$x = 15; //assigns the value 15
$x += 15; //addition assignment (x - x + 15)
$x -= 15; //substraction assignment (x =x - 15)
$x *= 15; // multiplication assignment (x -x / 15)
$x /= 15; //division assignment (x - x / 15)
$x %= 15; // modulus assignment (x - x %  15)

$ao = 15;
$ao *= 15;
// $ao += 15;
// $ao -= 15;
// $ao *= 15;
// $ao /= 15;
// $ao %= 15;

echo "result" , $ao;

//using comparison operator
echo "<hr><h3>comparison operator</h3>";


echo "Value x=87 ; <br> Value y=90 <br><br>";
$x = 90;
$y = "90";

if ($x >= $y) {
    echo "True";
}else{
    echo "False";
}

//example usage
echo "<hr><h3>example</h3>";

$age = 20;
$hasLicense = true;

// Comparison: ($age >= 18)
// Logical: &&
if ($age >= 18 && $hasLicense == true) {
    echo "You are allowed to drive.";
    }

    //if statement
    echo "<hr><h3>if statement</h3>";
    $language = "en";
    $name = "siti";
    if ($language == 'en'){
        echo "Hi, Good Morning " .$name;
    }

    //if else example
    echo "<hr><h3>if else statement</h3>";
    $language = "my";
    $name = "siti";
    if ($language == 'en'){
        echo "Hi, Good Morning " .$name;
    } else {
        echo "Hey ".$name; 
    }

    //try it
    echo "<hr><h3>try it statement</h3>";
    $language = "en";
    $nama = "Minah";
    $citizen = "Malaysian";
    $age = "18";
    if ($age >= 18 && $citizen == true) {
        echo "Eligible to vote.";
        } else {
            echo "Not eligible " .$nama;
        }

        //C
        echo "<hr><h3>if...else if..else</h3>";
        $language = "my";
        $name = "siti";
        if ($language == 'en') {
            echo "Hi, Good Morning " . $name;
            } elseif ($language == 'my') {
            echo "Hai, Selamat Pagi " . $name;
            } else {
            echo "Hey " . $name;
            } 

    //if..else if..else
    echo "<hr><h3> language statement</h3>";
    $language = "fp";
    $nama = "siti";
    if ($language == 'en') {
        echo "Hi, Good Morning " . $name;
        } elseif ($language == 'fp') {
        echo "Hi, magandang umaga " . $name;
        } else {
        echo "Hey " . $name;
        } 
   
    //simple
    echo "<hr><h3> simple statement</h3>";
    $status = ($age >= 18) ? "Eligible" : "Not Eligible";
    echo "Voting Status: " . $status;

    //exercise 2
    echo "<hr><h3> simple statement</h3>";
    


   

    







?>

