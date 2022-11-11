<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP: 2D Array Demo</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table, th, td {
            border: 1px solid rgb(0, 0, 0);
            border-collapse: collapse;
        }

        th, td {
            width: 70px;
            height: 40px;
        }

        th {
            background-color: rgb(200, 200, 200);
        }

        td {
            text-align: center;
        }
    </style>
</head>
<body>
<?php 
$workers = [
    array('Name' => 'Steve', 'Day 1' => 7, 'Day 2' => 7, 'Day 3' => 6, 'Day 4' => 6, 'Day 5' => 8),
    array('Name' => 'Jack', 'Day 1' => 7, 'Day 2' => 6, 'Day 3' => 7, 'Day 4' => 6, 'Day 5' => 7),
    array('Name' => 'John', 'Day 1' => 6, 'Day 2' => 7, 'Day 3' => 7, 'Day 4' => 7, 'Day 5' => 5)
];
?>    
<table>
    <tr>
        <th>Name</th>
        <th>Day #1</th>
        <th>Day #2</th>
        <th>Day #3</th>
        <th>Day #4</th>
        <th>Day #5</th>
        <th>Total</th>
    </tr>
    <?php 
        foreach ($workers as $worker) { 
            $worker_total = 0;
    ?>
        <tr>
        <?php
                foreach ($worker as $key => $value) {
                    if ($value != 'Name') {
                        $worker_total += intval($value);
                    }
        ?>
            <td><?= $value ?></td>
        <?php } ?>
        <td><?= $worker_total ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>