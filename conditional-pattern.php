<?php
function printPattern($name, $size) {
    if ($name == "upsideleft") {
        for ($i = 1; $i <= $size; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    } elseif ($name == "downsideleft") {
        for ($i = $size; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    } elseif ($name == "upsideright") {
        for ($i = 0; $i < $size; $i++) {
            for ($j = 1; $j < $size - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 0; $k <= $i; $k++)
            {
                echo "*";
            }
            echo "<br>";
        }
    } elseif($name == "downsideright"){
        for ($i = $size; $i > 0; $i--) {
            for ($j = 0; $j < $size - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 0; $k <= $i; $k++)
            {
                echo "*";
            }
            echo "<br>";
        }
    } else {
        echo "Invalid pattern name.";
    }
}
printPattern("upsideleft",5);
?>
