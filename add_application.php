<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $job_id = $_POST['job_id'];
    $application_date = $_POST['application_date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO Applications (student_id, job_id, application_date, status) VALUES ('$student_id', '$job_id', '$application_date', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "New application added successfully";
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
    <title>Add Application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Add Application</h1>
        <nav>
            <ul>
                <li><a href="applications.php">Back to Applications</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST" action="">
            <label for="student_id">Student ID:</label>
            <input type="text" id="student_id" name="student_id" required>
            <br>
            <label for="job_id">Job ID:</label>
            <input type="text" id="job_id" name="job_id" required>
            <br>
            <label for="application_date">Application Date:</label>
            <input type="date" id="application_date" name="application_date" required>
            <br>
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="Pending">Pending</option>
                <option value="Accepted">Accepted</option>
                <option value="Rejected">Rejected</option>
            </select>
            <br>
            <input type="submit" value="Add Application">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>
