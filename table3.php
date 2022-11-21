<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Demo</title>
    <style>
        table, td, th {
            border: 1px solid #000;
            border-collapse: collapse;
            font-family: monospace;
        }

        td, th {
            width: 40px;
            height: 40px;
        }
        
        td {
            text-align: center;
        }

        table {
            margin: 10px auto;
        }

        tr:first-child td, tr td:first-child {
            background-color: rgb(200, 200, 200);
        }
    </style>
</head>
<body>
<?php
function write_table($n) {
    if ($n < 2 || $n > 10) {
        echo "Too few or too many rows: $n";
        return ;
    }

    echo "<table>";
    for ($i = 1; $i <= $n; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $n; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

for ($i = 2; $i <= 10; $i++) {
    write_table($i);
}
?>
</body>
</html>