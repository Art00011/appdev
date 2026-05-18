<!DOCTYPE html>
<html>
<head>

    <title>User Defined Function</title>

    <style>

        body{
            font-family: Arial;
        }

        table{
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 50px;
        }

        td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        h1{
            text-align: center;
        }

    </style>

</head>

<body>

<?php

function compute($num1, $num2, $num3){

    $addition = $num1 + $num2 + $num3;
    $subtraction = $num1 - $num2 - $num3;
    $multiplication = $num1 * $num2 * $num3;
    $division = $num1 / $num2 / $num3;

    echo "<table>";

    echo "<tr>";
    echo "<td colspan='2'>";
    echo "My Parameter values: $num1, $num2, $num3";
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Addition</td>";
    echo "<td>$addition</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Subtraction</td>";
    echo "<td>$subtraction</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Multiplication</td>";
    echo "<td>$multiplication</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Division</td>";
    echo "<td>$division</td>";
    echo "</tr>";

    echo "</table>";

}

compute(25,13,6);

?>

</body>
</html>