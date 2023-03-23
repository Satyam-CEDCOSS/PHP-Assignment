<link rel="stylesheet" href="./CSS/style.css">
<!-- PHP FILE -->
<?php
// FIRST TASK 
echo"<h1>Wirte a Program to display count, from 5 to 15 using PHP loop as given below.</h1>";
echo"<br>";
for ($i=5; $i <16 ; $i++) { 
    echo "<div class='box'><span>$i </span></div>";
};
echo "<hr>";

// SECOND TASK
echo"<h1>Operators</h1>";
$first_value = 10;
$second_value = 5;
$sum =  $first_value+$second_value;
$diff = $first_value-$second_value;
echo "<p>Sum of $first_value and $second_value is $sum</p>";
echo "<p>Difference of $first_value and $second_value is $diff</p>";
echo "<hr>";

// THIRD TASK
echo"<h1>Printing string with variable</h1>";
$str = "Welcome to the";
echo "<p>$str PHP World</p>";
echo "<hr>";

// FOURTH TASK
echo"<h1>Print 2 variables</h1>";
$a = 10;
$b = 5;
echo "<p>$a $b</p>";
echo "<hr>";

// FIFTH TASK
echo"<h1>if-else</h1>";
function marks($val){
    if ($val >= 60){
        echo "<p>First division with $val % marks</p>";
    }
    else if ($val >= 45 && $val < 60){
        echo "<p>Secound division with $val % marks</p>";
    }
    else if ($val >= 33 && $val < 45){
        echo "<p>Third division with $val % marks</p>";
    }
    else{
        echo "<p>Fail</p>";
    }
}
marks(80);
echo "<hr>";

// SIXTH TASK
echo"<h1>Switch case</h1>";
function days($variable){
    switch ($variable) {
        case 1:
            echo "<p>Monday</p>";
            break;
        case 2:
            echo "<p>Tuesday</p>";
            break;
        case 3:
            echo "<p>Wednesday</p>";
            break;
        case 4:
            echo "<p>Thusday</p>";
            break;
        case 5:
            echo "<p>Friday</p>";
            break;
        case 6:
            echo "<p>Saturday</p>";
            break;
        case 7:
            echo "<p>Sunday</p>";
            break;
    }
}
days(6);
echo "<hr>";

// SEVENTH TASK
echo"<h1>For Loop</h1>";
function primenumber($MyNum) {
    $n = 0;
    for($i = 2; $i < ($MyNum/2+1); $i++) {
      if($MyNum % $i == 0){
        $n++;
        break;
      }
    }
    if ($n == 0){
      echo "<p>$MyNum is prime</p>";
    } 
}
for($i = 2; $i < 100 + 1; $i++) {
    primenumber($i);
}
echo "<hr>";

// EIGHTH TASK
echo"<h1>Nested for loop</h1>";
echo "<div class='box'>";
echo "<table style='border: 5px solid black;'>";
for ($i=0; $i < 8; $i++) { 
    echo "<tr>";
    for ($j=0; $j < 8; $j++) { 
        if (($i+$j)%2==0){
            echo "<td style='background-color: black; width: 40px; height: 40px;';></td>";
        }
        else{
            echo "<td style='background-color: white; width: 40px; height: 40px;';></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "<hr>";

// NINETH TASK
echo"<h1>Functions</h1>";
function palindrome($val){
    if (strrev($val)==$val){
        echo "<p>Palindrome</p>";
    }
    else{
        echo "<p>Not a Palindrome</p>";
    }
}
palindrome("qwerewq");
echo "<hr>";

// TENTH TASK
echo"<h1>Recursion</h1>";
function recursion($para){
    if ($para==1){
        return 1;
    }
    else{
        return recursion($para-1)*$para;
    }
}
echo "<p>".recursion(5)."</p>";
echo "<hr>";
?>