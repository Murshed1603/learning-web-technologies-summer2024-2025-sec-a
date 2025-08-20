<?php
 for($i =1; $i<=3;$i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
   echo "<br>";
}
"<br>";


for($i=3;$i>=1;$i--){
    $number=1;
    for($j=1;$j<=$i;$j++){
        echo $number++." ";
    }
   echo "<br>";
}
echo "<br>";

$char = 'A';
for($i=1;$i<=3;$i++){
    for($j=1;$j<=$i;$j++){
        echo $char++;
    }
   echo "<br>";
}

?>