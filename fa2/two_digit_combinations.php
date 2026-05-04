<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Decimal Combinations</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #e3f2fd, #fce4ec);
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .title span {
            background: #1976d2;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 18px;
        }

        .output {
            margin-top: 20px;
            padding: 20px;
            border: 2px dashed #1976d2;
            font-family: "Courier New", monospace;
            font-size: 14px;
            line-height: 1.7;
            background-color: #f9fbff;
            word-wrap: break-word;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="title">
        <span>Two‑Digit Decimal Combinations</span>
    </div>

    <div class="output">
        <?php
        // Loop for first digit
        for ($i = 0; $i <= 9; $i++) {

            // Loop for second digit
            for ($j = 0; $j <= 9; $j++) {

                echo $i . $j . ", ";
            }
        }
        ?>
    </div>

</div>

</body>
</html>