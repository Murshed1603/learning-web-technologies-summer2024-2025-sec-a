<?php
$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($row = 0; $row < 3; $row++) {          
    for ($col = 0; $col < 4; $col++) {       
        if ($arr[$row][$col] >= 0 && $arr[$row][$col] <= 9) { 
            echo $arr[$row][$col] . " ";
        }
    }
    echo "<br>";
}

echo "<br>"; 


for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 4; $col++) {
        if (!($arr[$row][$col] >= 0 && $arr[$row][$col] <= 9)) { 
            echo $arr[$row][$col] . " ";
        }
    }
    echo "<br>";
}
?>