<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Search Student</title>
</head>
<body>
    <div class="container">
        <h2>Search Student</h2>
        <form action="" method="post">
            <label for="search_nic">Enter NIC:</label>
            <input type="text" id="search_nic" name="search_nic" required>
            <button type="submit" name="search">Search</button>
        </form>

        <?php
        if (isset($_POST['search'])) {
            $nic = $_POST['search_nic'];
            $sql = "SELECT * FROM students WHERE nic='$nic'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<p>Name: " . $row['name'] . "</p>";
                echo "<p>Address: " . $row['address'] . "</p>";
                echo "<p>Tel No: " . $row['tel_no'] . "</p>";
                echo "<p>Course: " . $row['course'] . "</p>";
            } else {
                echo "<p>No student found with NIC: $nic</p>";
            }
        }
        ?>
    </div>
</body>
</html>
