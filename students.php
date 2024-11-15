<?php
include 'db.php';

$sql = "SELECT * FROM Students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Students</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="add_students.php">Add Student</a></li>
                <li><a href="delete_students.php">Delete Student</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>List of Students</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Graduation Year</th>
                <th>Major</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['student_id']}</td>
                            <td>{$row['first_name']}</td>
                            <td>{$row['last_name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone_number']}</td>
                            <td>{$row['graduation_year']}</td>
                            <td>{$row['major']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No students found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>
