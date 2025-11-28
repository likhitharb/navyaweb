<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$address = $_POST['address'];

$hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "None";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; padding: 20px; }
        .box { background: #fff; width: 60%; margin: auto; padding: 20px; border-radius: 8px; }
        h2 { color: #4CAF50; }
        p { font-size: 16px; }
    </style>
</head>

<body>
<div class="box">
    <h2>Submitted Information</h2>

    <p><b>Name:</b> <?php echo "$fname $lname"; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Date of Birth:</b> <?php echo $dob; ?></p>
    <p><b>Phone:</b> <?php echo $phone; ?></p>
    <p><b>Gender:</b> <?php echo $gender; ?></p>
    <p><b>Course:</b> <?php echo $course; ?></p>
    <p><b>Hobbies:</b> <?php echo $hobbies; ?></p>
    <p><b>Address:</b> <?php echo $address; ?></p>

</div>
</body>
</html>
