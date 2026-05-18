<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 800px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:first-child td.title {
            background-color: #333;
            color: white;
            font-weight: bold;
            text-align: left;
        }

        td:first-child {
            width: 35%;
            font-weight: bold;
            color: #444;
            background-color: #f9f9f9;
        }

        td:last-child {
            color: #222;
        }
    </style>
</head>

<body>

<?php
$studentNumber = "202410263";

$firstName = "Marcus Dylan";
$middleName = "Oca";
$lastName = "Ramirez";

$gender = "Male";
$birthDate = "January 10, 2006";
$address = "Antipolo City";
$contactNumber = "09171234567";

$course = "Bachelor of Science in Information Technology";
$specialization = "Web and Mobile Application Development";
$schoolName = "College of Antipolo - 2017 - 2024";

$age = 19;
$email = "marcusdylan@email.com";
$yearLevel = "2nd Year";
$section = "TW22";
$civilStatus = "Single";
$nationality = "Filipino";
$religion = "Catholic";
$emergencyContact = "09171234567";

$fullName = ($lastName) . ", " .
ucfirst($firstName) . " " .
ucfirst($middleName);

$formattedContact = $contactNumber;
?>

<div class="container">

    <h1>Student Registration Form</h1>

    <table>

        <tr>
            <td class="title" colspan="2">Student Information</td>
        </tr>

        <tr>
            <td>Student Number</td>
            <td><?php echo $studentNumber; ?></td>
        </tr>

        <tr>
            <td>Full Name</td>
            <td><?php echo $fullName; ?></td>
        </tr>

        <tr>
            <td>Age</td>
            <td><?php echo $age; ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><?php echo strtoupper($gender); ?></td>
        </tr>

        <tr>
            <td>Birth Date</td>
            <td><?php echo $birthDate; ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>

        <tr>
            <td>Contact Number</td>
            <td><?php echo $formattedContact; ?></td>
        </tr>

        <tr>
            <td>Emergency Contact</td>
            <td><?php echo $emergencyContact; ?></td>
        </tr>

        <tr>
            <td>Civil Status</td>
            <td><?php echo $civilStatus; ?></td>
        </tr>

        <tr>
            <td>Nationality</td>
            <td><?php echo $nationality; ?></td>
        </tr>

        <tr>
            <td>Religion</td>
            <td><?php echo $religion; ?></td>
        </tr>

        <tr>
            <td>Year Level</td>
            <td><?php echo $yearLevel; ?></td>
        </tr>

        <tr>
            <td>Section</td>
            <td><?php echo $section; ?></td>
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>

        <tr>
            <td>Specialization</td>
            <td><?php echo $specialization; ?></td>
        </tr>

        <tr>
            <td>Previous School</td>
            <td><?php echo $schoolName; ?></td>
        </tr>

    </table>

</div>

</body>
</html>