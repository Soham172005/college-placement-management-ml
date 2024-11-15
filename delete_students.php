<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];

    $sql = "DELETE FROM Students WHERE student_id = '$student_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Delete Student</h1>
        <nav>
            <ul>
                <li><a href="students.php">Back to Students</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST" action="">
            <label for="student_id">Student ID:</label>
            <input type="text" id="student_id" name="student_id" required>
            <br>
            <input type="submit" value="Delete Student">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>
