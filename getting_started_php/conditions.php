<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToMic</title>
</head>
<body>
    
</body>
</html>
<?php

$minimum_age = 18;

$dob = "1999-03-03";

$today = date("Y-m-d");

$birth_date = new DateTime($dob);
$current_date = new DateTime($today);
$age = $current_date->diff($birth_date)->y;

echo "Date of birth: {$dob}<br>";
echo "The person is ". $age . " years old.<br><br>";

if ($age >= $minimum_age) {
    echo "The person is eligible to open an account.<br>";
}else if ($age == 0) {
    echo "The person is not yet born.<br>";
}

else if ($age < $minimum_age) {
    echo "The person is not eligible to open an account.<br>";
} 
else {
    echo "Invalid age.<br>";
}


?>