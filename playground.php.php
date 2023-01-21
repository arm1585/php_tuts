<style>
    * {
        font-family: monospace;
    }
    .even {
        color: #fff;
        background-color: rgb(250, 210, 100);
    }
</style>
<?php
/*
 * if (condition) {
 *      statements;
 * }
 */

// $grade = 8;

// if ($grade < 10) {
//     echo "Sorry you did not pass<br>";
//     if ($grade == 9 || $grade == 8) {
//         echo "You were close to pass!<br>";
//     }
// } elseif ($grade >= 10 && $grade <= 15) {
//     echo "Good! you could be better<br>"; 
// } else {
//     if ($grade == 18 || $grade == 19) {
//         echo "You needed a little try!<br>";
//     }
//     echo "Nice! perhaps your are the best!<br>";
// }

// $color = "blue";

// if ($color == "red") {
//     echo "Apple<br>";
// } elseif ($color == "green") {
//     echo "Watermelon<br>";
// } elseif ($color == "yellow") {
//     echo "mango<br>";
// } else {
//     echo "Unknown fruit<br>";
// }

// $color = "yellow";
// switch ($color) {
//     case "red":
//         echo "Apple<br>";
//         echo "Strawberry<br>";
//         break;

//     case "orange":
//     case "yellow":
//         echo "Mango<br>";
//         break;

//     default:
//         echo "Unknown Fruit<br>";
//         break;

//     case "green":
//         echo "Watermelon<br>";
//         break;

// }

// while (condtion /* true */) {
//      statements;    
// }

// $i = 1;
// while ($i <= 10) {
//     $i++;
//     echo $i . "\n";
// }

/*
 * do {
 *    statements;
 * } while (condition);
 */

// $i = 1;
// do {
//     echo $i . "\n";
//     $i++;
// } while ($i <= 10);

// for (initial; condition; increment/decrement) {
//        statements;
// }

// for ($i = 1; $i <= 10; $i++) {
//     echo $i . "<br>";
// }

// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 5 || $i == 7) {
//         // echo "Skipping $i\n";
//         continue;
//     }
//     echo $i . "\n";
// }

// $x = 5;
// $y = 6;
// if ($x > $y) {
//     $max = $x;
// } else {
//     $max = $y;
// }

// echo "The maximum is $max\n";

// $x = 17;
// $y = 6;
// $max = $x > $y ? $x : $y;
// echo $max;

// $i = 1;
// while ($i <= 10) {
//     echo $i . "<br>";
//     $i++;
//     if ($i == 5) {
//         exit("Aliens ate my babysister! :)");
//     }
// }

// echo "Goodbye Galaxy!";

/*************************
 *  Even or Odd Numbers  *
 *************************/
// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 2 == 0) {
//         echo "<span class=\"even\">$i</span><br>";
//     } else {
//         echo "$i<br>";
//     }
// }

// $grades = array(10, 17, 14, 20);

// foreach ($grades as $grade) {
//     echo "$grade<br>";
// }

// $grades2 = array("David" => 66, "Mike" => 82, "Steve" => 100);
// foreach ($grades2 as $std => $grade) {
//     echo "$std = $grade<br>";
// }

// First way of numbered array declaration
// $grades[0] = 10;    // 1th
// $grades[1] = 14;    // 2th
// $grades[2] = 17;    // 3th
// $grades[3] = 15;    // 4th
// $grades[4] = 13;    // 5th

// Second way of numbered array declaration
// $grades[] = 10;    // 1th
// $grades[] = 14;    // 2th
// $grades[] = 17;    // 3th
// $grades[] = 15;    // 4th
// $grades[] = 13;    // 5th

// Third way of numbered array declaration
// $grades = [ 10, 13, 15, 20, 19 ];

// Fourth way of numbered array declaration
// $grades = array(17, 19, 20, 11, 14);

// echo $grades[0] . "<br>" . $grades[1] . "<br>" .
//      $grades[2] . "<br>" . $grades[3] . "<br>" . $grades[4];
// for ($i = 0; $i < count($grades); $i++) {
//     echo "i = $i, grades[$i] = $grades[$i]<br>";
// }

// foreach ($grades as $g) {
//     echo $g . "<br>";
// }

// $arr = array(10, true, "PHP", 3.14, array(10, 20, 30));

// First way of associative array decalaration
// $grades['Ahmad'] = 17;
// $grades['Saeed'] = 20;
// $grades['Mahdi'] = 7;
// $grades['Kamran'] = 15;
// $grades['Vahid'] = 10;

// Second way of associative array decalaration
// $grades = array(
//     'Ahmad'     => 17, 
//     'Saeed'     => 20,
//     'Mahdi'     => 12,
//     'Kamran'    => 15,
//     'Vahid'     => 10
// );

// Third way of associative array decalaration
// $grades = [
//         'Ahmad'     => 17, 
//         'Saeed'     => 20,
//         'Mahdi'     => 19,
//         'Kamran'    => 15,
//         'Vahid'     => 10
// ];

// foreach ($grades as $student => $grade) {
//     echo "$student -> $grade<br>";
// }

// $book1 = 
//     array("title" => "PHP Programming", "isbn" => 123, "Author" => "Ramin Jahani");

// foreach ($book1 as $key => $value) {
//     echo "$key = $value<br>";
// }

// $books = array(
//     array("title" => "PHP Programming", "Pages" => 500),    // [0], 1th
//     array("title" => "Linux By Example", "Pages" => 850),   // [1], 2th
//     array("title" => "HTML & CSS", "Pages" => 310),         // [2], 3th
//     array("title" => "C/C++ Programming", "Pages" => 1000)  // [3], 4th
// );

// for ($i = 0; $i < count($books); $i++) {
//     foreach ($books[$i] as $key => $value) {
//         echo "$key -> $value<br>";
//     }
//     echo "<hr>";
// }

// $matrix = array(
//     [ 1, 2, 3 ],    // [0], 1th
//     [ 4, 5, 6 ],    // [1], 2th
//     [ 7, 8, 9 ]     // [2], 3th
// );

// for ($i = 0; $i < count($matrix); $i++) { // Outer-loop: 3
//     for ($j = 0; $j < count($matrix[$i]); $j++) { // Inner-loop: 3
//         echo "matrix[$i][$j] = " . $matrix[$i][$j] . " ";  // Print each column
//     }
//     echo "<br>";
// }

// function function_name (param_1,param_2,...,param_n) {
//     function statements;
//     return reurn_value;
// }

// function write_greeting($user, $h) {
//     echo "<h$h>Welcome $user to our site.</h$h>";
// }

// write_greeting("David", 3);

// date_default_timezone_set('Asia/Tehran');

// function today($brk, $glue = '-') {
//     $year   = date("Y");
//     $day    = date("d");
//     $month  = date("m");

//     $date_string = $year . $glue . $day . $glue . $month;
//     if ($brk == true) {
//         $date_string .= "<br>";
//     }

//     return $date_string;
// }

// $today_date = today(true, "*-*");
// echo "Today date is " . $today_date;
// $today_date = today(true);
// echo "Today date is " . $today_date;

// function square($x) {
//     return $x * $x;
// }

// function cube($x) {
//     return $x * $x * $x;
// }

// echo cube(square(2));

// function power_two(&$x) {
//     $x = $x * $x;
// }

// $x = 20;
// power_two($x);
// echo $x;

// $x = 30; // Global scope
// $y = 20;

// function write_var() {
//     // echo "x: " . $GLOBALS['x'] . " ,y: " . $GLOBALS['y'] . "<br>";
//     $GLOBALS['x'] = 50;
//     $GLOBALS['y'] = 60;
// }

// echo "x: $x, y: $y<br>";
// write_var();
// echo "x: $x, y: $y<br>";

// function write_value(...$values) {
//     if (count($values) == 0) {
//         echo "No items eneterd...<br>";
//         return ;
//     }

//     for ($i = 0; $i < count($values); $i++) {
//         echo "$values[$i]<br>";
//     }
//     echo "<hr>";
// }

// write_value(10, 20, 30, 40);
// write_value(10, 20, 30);
// write_value(10, 20);
// write_value(10);
// write_value();

/*function average(&$result, ...$values) {
    $result = 0;

    for ($i = 0; $i < count($values); $i++) {
        $result += $values[$i];
    }

    $result /= count($values);
}

$result = 0;
average($result, 10, 20, 30);
echo $result; */
?>