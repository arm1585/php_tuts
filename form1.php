<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto Slab', serif;
        }

        table, td, th {
            border: 1px solid #343434;
            border-collapse: collapse;
        }

        th, td {
            width: 100px;
            height: 30px;
            padding: 5px;
            text-align: center;
        }

        table {
            margin: 10px auto;
        }
    </style>
</head>
<body>
<form action="action_page.php" method="get">
    <table>
        <tr>
            <td><label for="width">Width</label></td>
            <td><input type="text" name="width" id="width"></td>
        </tr>
        <tr>
            <td><label for="height">Height</label></td>
            <td><input type="text" name="height" id="height"></td>
        </tr>
        <tr>
            <td><label for="header-color">Header Color</label></td>
            <td><input type="color" name="header-color" id="header-color"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="reset" value="Clear Form">
                <input type="submit" value="Calculate">
            </td>
        </tr>
    </table>
</form>    
</body>
</html>