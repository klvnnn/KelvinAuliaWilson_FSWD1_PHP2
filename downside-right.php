<?php
    for ($i = 5; $i > 0; $i--) {
        for ($j = 0; $j < 5 - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k <= $i; $k++)
        {
            echo "*";
        }
        echo "<br>";
    }
?>