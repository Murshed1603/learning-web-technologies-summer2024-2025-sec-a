<?php
$element = array(10, 12, 14, 56, 78, 99);
$findNum = 89;
$found = false;


for ($i = 0; $i < count($element); $i++) {
    if ($element[$i] == $findNum) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$findNum is found in the array.";
} else {
    echo "$findNum is not found in the array.";
}
?>
