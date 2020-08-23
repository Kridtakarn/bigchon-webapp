<?php
    $args1 = $_POST["args1"];
    $args2 = $_POST["args2"];
    $operations = $_POST["operations"];

    if ($operations == 1) echo "Result of triangle that there are base $args1 unit and high $args2 unit is ", $args1*$args2/2, " unit^2";
    else if ($operations == 2) echo "Result of rectangle that there are wide $args1 unit and long $args2 unit is ", $args1*$args2 ," unit^2";
    else if ($operations == 3) echo "$args1 + $args2 = ", $args1+$args2;
    else if ($operations == 4) echo "$args1 - $args2 = ",$args1-$args2;
    else if ($operations == 5) echo "$args1 * $args2 = ",$args1*$args2;
    else if ($operations == 6) echo "$args1 / $args2 = ",$args1/$args2;
    else if ($operations == 7) echo "$args1 % $args2 = ",$args1%$args2;
    else if ($operations == 8) echo "$args1 ^ $args2 = ",$args1**$args2;
    else echo "Found error from \"operations\" variable!";
?>