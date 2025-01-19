<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Student Registration</title>
</head>
<body>
    <div class="container">
        <h2>Register Student</h2>
        <form action="" method="post">
            <label for="nic">NIC:</label>
            <input type="text" id="nic" name="nic" required>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <label for="tel_no">Tel No:</label>
            <input type="text" id="tel_no" name="tel_no" required>
            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>
            <button type="submit" name="register">Register</button>
        </form>

        <?php
        if (isset($_POST['register'])) {
            $nic = $_POST['nic'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $tel_no = $_POST['tel_no'];
            $course = $_POST['course'];

            $sql = "INSERT INTO students (nic, name, address, tel_no, course) VALUES ('$nic', '$name', '$address', '$tel_no', '$course')";
            if ($conn->query($sql) === TRUE) {
                echo "<p>Student registered successfully!</p>";
            } else {
                echo "<p>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
