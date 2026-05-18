<!DOCTYPE html>
<html>
<head>

    <title>Array Operations</title>

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

    </style>

</head>

<body>

<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

$addition = 0;
$subtraction = $numbers[0];
$multiplication = 1;
$division = $numbers[0];

foreach($numbers as $value){

    $addition = $addition + $value;
    $multiplication = $multiplication * $value;

}

for($x = 1; $x < count($numbers); $x++){

    $subtraction = $subtraction - $numbers[$x];
    $division = $division / $numbers[$x];

}

?>

<table>

<tr>
<td colspan="2">

Array list:

<?php

for($x = 0; $x < count($numbers); $x++){

    echo $numbers[$x];

    if($x < count($numbers)-1){
        echo ", ";
    }

}

?>

</td>
</tr>

<tr>
<td>Addition</td>
<td><?php echo $addition; ?></td>
</tr>

<tr>
<td>Subtraction</td>
<td><?php echo $subtraction; ?></td>
</tr>

<tr>
<td>Multiplication</td>
<td><?php echo $multiplication; ?></td>
</tr>

<tr>
<td>Division</td>
<td><?php echo $division; ?></td>
</tr>

</table>

</body>
</html>