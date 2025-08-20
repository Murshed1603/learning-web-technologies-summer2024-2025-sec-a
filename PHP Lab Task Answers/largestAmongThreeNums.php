<?php

$num1 = 34;
$num2 = 87;
$num3 = 34.562;

if($num1 >= $num2 && $num1 >= $num3)
{
    echo "The largest number among the numbers $num1, $num2 & $num3 is : $num1<br>";
}
if($num2 >= $num1 && $num2 >= $num3)
{
    echo "The largest number among the numbers $num1, $num2 & $num3 is : $num2<br>";
}
if($num3 >= $num1 && $num3 >= $num2)
{
    echo "The largest number among the numbers $num1, $num2 & $num3 is : $num3<br>";
}

?>