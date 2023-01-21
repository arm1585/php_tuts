<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <style>
        h1 {
            font-family: 'Roboto Slab', serif;
            border-bottom: 2px solid #000;
            color: <?php echo $_GET['header-color']; ?>;
        }
    </style>
</head>
<body>
    <h1>Rectangle Area and Circumference Calculator</h1>
    <p>For a recatngle with <?= $_GET['width']; ?> width, and <?= $_GET['height']; ?> height</p>
    <ul>
        <li>Area is <?php echo $_GET['width'] * $_GET['height']; ?></li>
        <li>Circumference is <?php echo ($_GET['width'] + $_GET['height']) * 2; ?></li>
    </ul>
</body>
</html>