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
$ages = [ "Cathy" => 35, "Abba" => 17, "Bob" => 55 ];
?>
<table>
    <tr>
        <th>Unsorted</th>
        <? foreach ($ages as $name => $age) { ?>
            <td><?= $name ?></td>
            <td><?= $age ?></td>
        <?php } ?>
    </tr>
    <tr>
        <th>Sorted</th>
        <?php asort($ages); foreach ($ages as $name => $age) { ?> 
            <td><?= $name ?></td>
            <td><?= $age ?></td>
        <?php } ?>
    </tr>
</table>
</body>
</html>