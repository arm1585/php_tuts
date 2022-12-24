<?php
    $worker["Steve"] = array(18, 18, 10, 7, 8);
    $worker["Mike"] = array(8, 8, 13, 18, 8);
    $worker["Bob"] = array(8, 8, 8, 8, 8);
    $worker["Leo"] = array(8, 7, 7, 17, 8);

    define("HOURS_PER_WEEK", 40);
    define("HOURLY_WAGE", 40);
    define("OVER_TIME_WAGE", 0.5);
    define("TAX_AMOUNT", 0.1);

    function get_total_wage($hrs) {
        $hours = 0;
        $over_time = 0;

        for ($i = 0; $i < count($hrs); $i++) {
            $hours += $hrs[$i];
            // echo "<script>console.log($hrs[$i]);</script>";
        }
        
        if ($hours > HOURS_PER_WEEK) {
            $over_time = $hours - HOURS_PER_WEEK;
            $hours = HOURS_PER_WEEK;
        }

        $total_wage = ($hours * HOURLY_WAGE) + ($over_time * (OVER_TIME_WAGE * HOURLY_WAGE));

        return $total_wage - ($total_wage * TAX_AMOUNT);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        table, td, th {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        td, th {
            width: 100px;
            height: 40px;
            text-align: center;
        }

        th {
            background-color: rgb(200, 200, 200);
        }

        table tr:nth-child(odd) {
            background-color: rgb(250, 210, 100);
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Day #1</th>
            <th>Day #2</th>
            <th>Day #3</th>
            <th>Day #4</th>
            <th>Day #5</th>
            <th>Total Wage</th>
        </tr>
        <?php 
            $total_workers_wage = 0;
            foreach ($worker as $name => $hours) { ?>
        <tr>
            <td><?= $name ?></td>
            <?php 
                for ($i = 0; $i < count($hours); $i++) { ?>
                <td><?= $hours[$i] ?></td>
            <?php } ?>
            <td><?= $hrs = get_total_wage($hours); ?></td>
        <?php $total_workers_wage += $hrs; } ?>
        </tr>
        <tr>
            <td colspan="6">Total Workers' Wage</td>
            <td><?= $total_workers_wage ?></td>
        </tr>
    </table>
</body>
</html>