<?php

$name = "ToMic";
$age = 26;
$email = "ToMic9141@gmail.com";
$pizzaPrice = 10.99;
$quantity = 10;
$users = 1000;
$gpa = 3.5;
$taxRate = 0.07; // 7%
$onlineStatus = "Offline";
$employmentStatus = "Employed";
$forSale = "Yes";


$totalPrice = $pizzaPrice * $quantity;
$totalWithTaxSingle = $pizzaPrice + ($pizzaPrice * $taxRate);
$totalWithTaxAll = $totalPrice + ($totalPrice * $taxRate);


echo "The total price of the order is $$totalPrice <br><br>";

echo "This is $name <br>";
echo "He is $age years old <br>";
echo "Hello $name <br>";
echo "I like pizza <br>";
echo "My email is $email <br><br>";

echo "My name is $name and I am $age years old. <br>";
echo "The price of the pizza is $$pizzaPrice <br>";
echo "You are $age years old and your email is $email <br><br>";

echo "There are $users users and the quantity is $quantity <br>";
echo "The total price is $$totalPrice <br>";
echo "You would like to order $quantity pizzas and the total price is $$totalPrice <br><br>";

echo "Your GPA is $gpa <br>";
echo "Your pizza is $$pizzaPrice <br>";
echo "The tax is 7% <br>";
echo "The total price with tax for one pizza is $$totalWithTaxSingle <br><br>";

echo "The total price for $quantity pizzas with tax is $$totalWithTaxAll <br>";
echo "You have ordered $quantity pizzas and the total price with tax is $$totalWithTaxAll <br>";
echo "You have ordered $quantity x pizzas <br>";
echo "Your total price with tax is $$totalWithTaxAll <br><br>";

echo "Online status: $onlineStatus <br>";
echo "Employment status: $employmentStatus <br>";
echo "For sale: $forSale <br>";

?>