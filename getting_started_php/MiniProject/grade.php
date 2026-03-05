<?php
$score = 40;

if($score >= 80 && $score <= 100){
    echo "Grade A";
}
elseif($score >= 70){
    echo "Grade B";
}
elseif($score >= 60){
    echo "Grade C";
}
elseif($score >= 50){
    echo "Grade D";
}
else{
    echo "Fail";
}
?>