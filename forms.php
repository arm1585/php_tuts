<?php


function form_start($action, $method = "post") {
    $method = strtolower($method);
    
    if ($method != "post" && $method != "get") {
        echo "Method should be 'POST' or 'GET'";
        return ;
    }

    echo "<form action=\"$action\" method=\"$method\">\n";
}

function form_end() {
    echo "</form>\n";
}

function create_input($type, $attrs) {
    $input_types = array(
        "button",
        "color",
        "checkbox",
        "date",
        "datetime-local",
        "email",
        "file",
        "hidden",
        "image",
        "month",
        "number",
        "password",
        "radio",
        "range",
        "reset",
        "search",
        "submit",
        "tel",
        "text",
        "time",
        "url",
        "week",
    );

    $type = strtolower($type);
    if (!in_array($type, $input_types)) {
        echo "Input type '$type' is not valid<br>";
        return ;
    }

    $html_string = "<input type=\"$type\" ";
    foreach ($attrs as $key => $value) {
        $html_string .= "$key=\"$value\" ";
    }
    $html_string .= ">\n";

    echo $html_string;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Demo</title>
</head>
<body>
    <?php form_start("/action_page.php"); ?>
        <?php create_input("color", array("id" => "user-name", "name" => "user-name")); ?>
    <?php form_end(); ?>
</body>
</html>
