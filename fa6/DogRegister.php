<?php
include 'db.php';

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs
    (d_name,d_breed,d_age,d_add,d_color,d_height,d_weight)
    VALUES
    ('$name','$breed','$age','$address','$color','$height','$weight')";

    mysqli_query($conn,$sql);

    echo "<script>alert('Dog Information Saved!');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Register</title>

<style>

body{
    font-family: Arial;
}

.container{
    width:350px;
    margin:auto;
    border:1px solid gray;
    padding:15px;
}

input{
    width:100%;
    padding:8px;
    margin-bottom:10px;
}

button{
    width:100%;
    padding:10px;
}

</style>

</head>

<body>

<div class="container">

<h3>Dog Information</h3>

<form method="POST">

<label>Name</label>
<input type="text" name="name" required>

<label>Breed</label>
<input type="text" name="breed" required>

<label>Age</label>
<input type="text" name="age" required>

<label>Address</label>
<input type="text" name="address" required>

<label>Color</label>
<input type="text" name="color" required>

<label>Height</label>
<input type="text" name="height" required>

<label>Weight</label>
<input type="text" name="weight" required>

<button type="submit" name="save">Save</button>

</form>

<br>

<a href="DogView.php">View Dogs</a>

</div>

</body>
</html>