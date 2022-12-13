<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid #000;
            border-collapse: collapse;
            font-family: monospace;
            font-size: 1.2em;
        }

        th, td {
            height: 70px;
            width: 70px;
            text-align: center;
        }

        .div-by-3 {
            background-color: orange;
            color: #000;
        }

        .div-by-7 {
            background-color: darkred;
            color: #fff;
        }

        .normal-style {
            background-color: rgb(200, 200, 200);
            color: #000;
        }
    </style>
</head>
<body>
    <table>
        <?php 
            function div_by_3() { 
                echo "div-by-3"; 
            }
            function div_by_7() { 
                echo "div-by-7"; 
            }
            function normal_style() { 
                echo "normal-style"; 
            }

            for ($i = 1; $i <= 100; $i++) { 
                if ($i % 3 == 0) {
                    $style_func = "div_by_3";
                } elseif ($i % 7 == 0) {
                    $style_func = "div_by_7";
                } else {
                    $style_func = "normal_style";
                }
        ?>
        <tr>
            <td class=<?php $style_func(); ?>><?= $i ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>