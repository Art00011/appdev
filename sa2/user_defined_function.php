<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <style>
        body {
        }

        h2 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        
    </style>
</head>
<body>

<h2>Volume of Shapes</h2>

<?php
// USER-DEFINED FUNCTIONS

function cubeVolume($s) {
    return pow($s, 3);
}

function rectangularPrismVolume($l, $w, $h) {
    return $l * $w * $h;
}

function cylinderVolume($r, $h) {
    return pi() * pow($r, 2) * $h;
}

function coneVolume($r, $h) {
    return (1/3) * pi() * pow($r, 2) * $h;
}

function sphereVolume($r) {
    return (4/3) * pi() * pow($r, 3);
}

// VALUES
$s = 5;
$l = 6; $w = 4; $h1 = 3;
$r1 = 3; $h2 = 7;
$r2 = 3; $h3 = 5;
$r3 = 4;

?>

<table>
    <tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
    </tr>

    <tr>
        <td>s = 5</td>
        <td>V = s³</td>
        <td><?php echo cubeVolume($s); ?></td>
    </tr>

    <tr>
        <td>l = 6, w = 4, h = 3</td>
        <td>V = l × w × h</td>
        <td><?php echo rectangularPrismVolume($l, $w, $h1); ?></td>
    </tr>

    <tr>
        <td>r = 3, h = 7</td>
        <td>V = πr²h</td>
        <td><?php echo round(cylinderVolume($r1, $h2), 2); ?></td>
    </tr>

    <tr>
        <td>r = 3, h = 5</td>
        <td>V = 1/3 πr²h</td>
        <td><?php echo round(coneVolume($r2, $h3), 2); ?></td>
    </tr>

    <tr>
        <td>r = 4</td>
        <td>V = 4/3 πr³</td>
        <td><?php echo round(sphereVolume($r3), 2); ?></td>
    </tr>

</table>

</body>
</html>
