<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>
    <style>
        body
        h2 {
            text-align: center;
        }

        table {
            width: 90%;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        img {
            width: 120px;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<h2>My Fruits</h2>

<?php
$fruits = [
    [
        "name" => "Apple",
        "image" => "images/apple.jpg",
        "description" => "Color: Red/Green",
        "facts" => "Apples are rich in fiber and vitamin C."
    ],
    [
        "name" => "Banana",
        "image" => "images/banana.jpg",
        "description" => "Color: Yellow",
        "facts" => "Bananas are high in potassium and good for digestion."
    ],
    [
        "name" => "Cherry",
        "image" => "images/cherry.jpg",
        "description" => "Color: Red",
        "facts" => "Cherries contain antioxidants and reduce inflammation."
    ],
    [
        "name" => "Grapes",
        "image" => "images/grapes.jpg",
        "description" => "Color: Green/Purple",
        "facts" => "Grapes support heart health."
    ],
    [
        "name" => "Mango",
        "image" => "images/mango.jpg",
        "description" => "Color: Yellow/Orange",
        "facts" => "Mangoes are rich in vitamin A."
    ],
    [
        "name" => "Orange",
        "image" => "images/orange.jpg",
        "description" => "Color: Orange",
        "facts" => "Oranges are rich in vitamin C."
    ],
    [
        "name" => "Pineapple",
        "image" => "images/pineapple.jpg",
        "description" => "Color: Yellow",
        "facts" => "Pineapple helps digestion due to bromelain."
    ],
    [
        "name" => "Strawberry",
        "image" => "images/strawberry.jpg",
        "description" => "Color: Red",
        "facts" => "Strawberries are rich in antioxidants."
    ],
    [
        "name" => "Watermelon",
        "image" => "images/watermelon.jpg",
        "description" => "Color: Green/Red",
        "facts" => "Watermelons are 90% water and keep you hydrated."
    ],
    [
        "name" => "Papaya",
        "image" => "images/papaya.jpg",
        "description" => "Color: Orange",
        "facts" => "Papaya improves digestion and skin health."
    ]
];
?>

<table>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>

    <?php
    // FOREACH LOOP
    foreach ($fruits as $fruit) {
        echo "<tr>";
        echo "<td><img src='" . $fruit['image'] . "'></td>";
        echo "<td>" . $fruit['name'] . "</td>";
        echo "<td>" . $fruit['description'] . "</td>";
        echo "<td>" . $fruit['facts'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>