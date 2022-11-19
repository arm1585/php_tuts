<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .grade-a {
            background-color: #00b300;
        }

        .grade-b {
            background-color: #0099ff;
        }

        .grade-c {
            background-color: #ffcc00;
        }

        .grade-d {
            background-color: #ff3300;
        }

        .grade-f {
            background-color: #ff0000;
        }

        table, td, th {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        td, th {
            width: 70px;
            height: 50px;
        }

        td {
            text-align: center;
        }

        th {
            background-color: rgb(200, 200, 200);
            color: #000;
            /* border: 1px solid #fff; */
        }

        tr td:nth-child(1) {
            width: 120px;
        }

        tr td:nth-child(2) {
            background-color: rgb(220, 220, 220);
            font-weight: bold;
        }

        table {
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php
$stds = array(
    'Jack'      => 95, 
    'Steve'     => 80, 
    'Mark'      => 81, 
    'Suse'      => 97, 
    'Dave'      => 72,
    'Will'      => 63, 
    'Anna'      => 78, 
    'Abby'      => 65, 
    'Sunny'     => 100, 
    'Silvia'    => 70,
    'Benny'     => 50, 
    'Marta'     => 70, 
    'Cameron'   => 85
);

arsort($stds);
?>

<table>
    <tr>
        <th>Student</th>
        <th>Grade</th>
        <th>Status</th>
    </tr>
    <?php 
        foreach ($stds as $std => $grade) { 
            if ($grade >= 90 && $grade <= 100) {
                $grade_class = "grade-a";
                $grade_cat = 'A';
            } elseif ($grade >= 80 && $grade <= 89) {
                $grade_class = "grade-b";
                $grade_cat = 'B';
            } elseif ($grade >= 70 && $grade <= 79) {
                $grade_class = "grade-c";
                $grade_cat = 'C';
            } elseif ($grade >= 65 && $grade <= 69) {
                $grade_class = "grade-d";
                $grade_cat = 'D';
            } else {
                $grade_class = "grade-f";
                $grade_cat = 'F';
            }

            echo "<tr>";
            echo "<td>$std</td>";
            echo "<td>$grade</td>";
            echo "<td class=\"$grade_class\">$grade_cat</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>