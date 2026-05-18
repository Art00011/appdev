<!DOCTYPE html>
<html>
<head>
    <title>Array of Students</title>

    <style>
        body{
            font-family: Arial;
            background-color: #f2f2f2;
        }

        h1{
            text-align: center;
            color: darkblue;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: darkblue;
            color: white;
        }

        img{
            width: 80px;
            height: 80px;
        }
    </style>
</head>

<body>

<h1>STUDENT INFORMATION</h1>

<?php

$students = array(

array(
"name"=>"Shai Gilgeous-Alexander",
"image"=>"images/sga.jpg",
"age"=>27,
"birthday"=>"July 12, 1998",
"contact"=>"09123456781"
),

array(
"name"=>"Lebron James",
"image"=>"images/lbj.jpg",
"age"=>41,
"birthday"=>"December 30, 1984",
"contact"=>"09123456782"
),

array(
"name"=>"Stephen Curry",
"image"=>"images/sc.jpg",
"age"=>38,
"birthday"=>"March 14, 1988",
"contact"=>"09123456783"
),

array(
"name"=>"Victor Wembanyama",
"image"=>"images/vw.jpg",
"age"=>22,
"birthday"=>"January 4, 2004",
"contact"=>"09123456784"
),

array(
"name"=>"Anthony Edwards",
"image"=>"images/ae.jpg",
"age"=>24,
"birthday"=>"August 5, 2001",
"contact"=>"09123456785"
),

array(
"name"=>"Chet Holmgren",
"image"=>"images/ch.jpg",
"age"=>24,
"birthday"=>"May 1, 2002",
"contact"=>"09123456786"
),

array(
"name"=>"Giannis Antetokounmpo",
"image"=>"images/ga.jpg",
"age"=>31,
"birthday"=>"December 6, 1994",
"contact"=>"09123456787"
),

array(
"name"=>"Jared McCain",
"image"=>"images/jm.jpg",
"age"=>19,
"birthday"=>"June 20, 2004",
"contact"=>"09123456788"
),

array(
"name"=>"Jalen Williams",
"image"=>"images/jw.jpg",
"age"=>24,
"birthday"=>"October 31, 2001",
"contact"=>"09123456789"
),

array(
"name"=>"Jaylin Williams",
"image"=>"images/jw2.jpg",
"age"=>22,
"birthday"=>"October 22, 2003",
"contact"=>"09123456780"
)

);

sort($students);

echo "<table>";
echo "<tr>
<th>Name</th>
<th>Image</th>
<th>Age</th>
<th>Birthday</th>
<th>Contact Number</th>
</tr>";

foreach($students as $student){

echo "<tr>";

echo "<td>".$student['name']."</td>";
echo "<td><img src='".$student['image']."'></td>";
echo "<td>".$student['age']."</td>";
echo "<td>".$student['birthday']."</td>";
echo "<td>".$student['contact']."</td>";

echo "</tr>";
}

echo "</table>";

?>

</body>
</html>