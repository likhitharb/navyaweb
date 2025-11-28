<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];
    $address = $_POST["address"];

    // Hobbies fix
    $hobbies = isset($_POST["hobbies"]) ? implode(", ", $_POST["hobbies"]) : "None";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submitted Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Submitted Information</h2>

<div class="form-container">
    <table>
        <tr><th colspan="2">Your Details</th></tr>

        <tr><td>First Name:</td><td><?= $fname ?></td></tr>
        <tr><td>Last Name:</td><td><?= $lname ?></td></tr>
        <tr><td>Email:</td><td><?= $email ?></td></tr>
        <tr><td>Password:</td><td><?= $password ?></td></tr>
        <tr><td>Date of Birth:</td><td><?= $dob ?></td></tr>
        <tr><td>Phone:</td><td><?= $phone ?></td></tr>
        <tr><td>Gender:</td><td><?= $gender ?></td></tr>
        <tr><td>Course:</td><td><?= $course ?></td></tr>
        <tr><td>Hobbies:</td><td><?= $hobbies ?></td></tr>
        <tr><td>Address:</td><td><?= nl2br($address) ?></td></tr>

    </table>

    <br>
    <a href="index.html"><button class="btn">Go Back</button></a>
</div>

</body>
</html>
