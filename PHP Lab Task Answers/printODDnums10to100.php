<?php
echo "The ODD numbers between 10 to 100 are: ";

for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i, ";
    }
}
?>
