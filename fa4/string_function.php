<?php
$names = [
    "marcus dylan", "railey reyes", "ozzy florendo", "fort pabalate", "ico salicanan",
    "michael tan", "sarah lim", "david ong", "emily cruz", "paul santos",
    "james reid", "karen joy", "patrick star", "tony stark", "bruce wayne",
    "clark kent", "diana prince", "peter parker", "wanda maximoff", "steve rogers"
];

function replaceVowels($name) {
    return preg_replace('/[aeiouAEIOU]/', '@', $name);
}



echo "
<style>
table {
    width: 100%;
}
th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}
.title {
    height: 100px;
    font-size: 20px;
}
</style>
";

echo "<table>";

echo "<tr>
        <th colspan='6' class='title'>List of names</th>
      </tr>";

echo "<tr>
        <th>Name</th>
        <th>Number of characters</th>
        <th>Uppercase first character</th>
        <th>Replace vowels with @</th>
        <th>Check position of character 'a'</th>
        <th>Reverse name</th>
      </tr>";


foreach ($names as $name) {
    $length = strlen($name);
    $ucfirst = ucfirst($name);
    $replaced = replaceVowels($name);
    $pos = stripos($name, 'a');
    $pos = ($pos !== false) ? $pos : "Not found";
    $reverse = strrev($name);

    echo "<tr>
            <td>$name</td>
            <td>$length</td>
            <td>$ucfirst</td>
            <td>$replaced</td>
            <td>$pos</td>
            <td>$reverse</td>
          </tr>";
}

echo "</table>";
?>