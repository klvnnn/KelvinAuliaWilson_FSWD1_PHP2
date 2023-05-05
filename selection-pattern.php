<?php
function printUpsideLeft($rows = 5, $symbol = "*") {
    if ($rows < 1) {
        echo "Invalid number of rows. Rows must be greater than 0.";
        return;
    }
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
function printDownsideLeft($rows = 5, $symbol = "*"){
    if ($rows < 1) {
        echo "Invalid number of rows. Rows must be greater than 0.";
        return;
    }
    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
function printUpsideRight($rows = 5, $symbol = "*"){
    if ($rows < 1) {
        echo "Invalid number of rows. Rows must be greater than 0.";
        return;
    }
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 1; $j < $rows - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k <= $i; $k++)
        {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
function printDownsideRight($rows = 5, $symbol = "*"){
    if ($rows < 1) {
        echo "Invalid number of rows. Rows must be greater than 0.";
        return;
    }
    for ($i = $rows; $i > 0; $i--) {
        for ($j = 0; $j < $rows - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k <= $i; $k++)
        {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
printUpsideLeft(5, "$");
printUpsideRight(5, "#");
printDownsideLeft(10, "@");
printDownsideRight(5);
?>