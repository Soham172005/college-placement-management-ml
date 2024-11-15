<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST['job_id'];

    $sql = "DELETE FROM Job_Postings WHERE job_id = '$job_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Job posting deleted successfully";
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
    <title>Delete Job Posting</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Delete Job Posting</h1>
        <nav>
            <ul>
                <li><a href="job_postings.php">Back to Job Postings</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST" action="">
            <label for="job_id">Job ID:</label>
            <input type="text" id="job_id" name="job_id" required>
            <br>
            <input type="submit" value="Delete Job Posting">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>
