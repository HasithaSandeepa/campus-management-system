<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Delete Student</title>
</head>
<body>
    <div class="container">
        <h2>Delete Student</h2>
        <form action="" method="post">
            <label for="delete_nic">Enter NIC:</label>
            <input type="text" id="delete_nic" name="delete_nic" required>
            <button type="submit" name="delete">Delete</button>
        </form>

        <?php
        if (isset($_POST['delete'])) {
            $nic = $_POST['delete_nic'];
            $sql = "DELETE FROM students WHERE nic='$nic'";
            if ($conn->query($sql) === TRUE) {
                echo "<p>Student deleted successfully!</p>";
            } else {
                echo "<p>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
