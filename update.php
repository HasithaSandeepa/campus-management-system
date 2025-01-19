<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Update Student</title>
</head>
<body>
    <div class="container">
        <h2>Update Student</h2>
        <form action="" method="post">
            <label for="update_nic">Enter NIC:</label>
            <input type="text" id="update_nic" name="update_nic" required>
            <label for="update_field">Field to Update:</label>
            <select id="update_field" name="update_field">
                <option value="name">Name</option>
                <option value="address">Address</option>
                <option value="tel_no">Tel No</option>
                <option value="course">Course</option>
            </select>
            <label for="new_value">New Value:</label>
            <input type="text" id="new_value" name="new_value" required>
            <button type="submit" name="update">Update</button>
        </form>

        <?php
        if (isset($_POST['update'])) {
            $nic = $_POST['update_nic'];
            $field = $_POST['update_field'];
            $newValue = $_POST['new_value'];

            $sql = "UPDATE students SET $field='$newValue' WHERE nic='$nic'";
            if ($conn->query($sql) === TRUE) {
                echo "<p>Student updated successfully!</p>";
            } else {
                echo "<p>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
