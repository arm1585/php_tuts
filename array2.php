<?php
$numbers = array(
    array('name' => 'Steve', 'Day 1' => 10, 'Day 2' => 7, 'Day 3' => 7, 'Day 4' => 8, 'Day 5' => 7),
    array('name' => 'Jack', 'Day 1' => 10, 'Day 2' => 7, 'Day 3' => 7, 'Day 4' => 8, 'Day 5' => 7),
    array('name' => 'Dave', 'Day 1' => 10, 'Day 2' => 7, 'Day 3' => 7, 'Day 4' => 8, 'Day 5' => 7)
);

foreach ($numbers as $n) {
    foreach ($n as $k => $v) {
        echo "$k = $v, ";
    }
    echo "<br>";
}
?>