<?php
include 'db.php';

$sql = "SELECT * FROM dogs";
$result = mysqli_query($conn,$sql);

$count = 1;
?>

<!DOCTYPE html>
<html>
<head>
<title>Dog View</title>

<style>

body{
    font-family: Arial;
}

.box{
    border:1px solid black;
    padding:10px;
    margin-bottom:10px;
}

</style>

</head>

<body>

<h2>All Dogs</h2>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<div class="box">

Dog <?php echo $count; ?><br><br>

Name: <?php echo $row['d_name']; ?><br><br>

Breed: <?php echo $row['d_breed']; ?><br><br>

Age: <?php echo $row['d_age']; ?><br><br>

Address: <?php echo $row['d_add']; ?><br><br>

Color: <?php echo $row['d_color']; ?><br><br>

Height: <?php echo $row['d_height']; ?><br><br>

Weight: <?php echo $row['d_weight']; ?><br>

</div>

<?php
$count++;
}
?>

</body>
</html>