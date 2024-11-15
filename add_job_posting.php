<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_id = $_POST['company_id'];
    $job_title = $_POST['job_title'];
    $salary = $_POST['salary'];
    $date_posted = $_POST['date_posted'];

    $sql = "INSERT INTO Job_Postings (company_id, job_title, salary, date_posted) VALUES ('$company_id', '$job_title', '$salary', '$date_posted')";

    if ($conn->query($sql) === TRUE) {
        echo "New job posting added successfully";
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
    <title>Add Job Posting</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Add Job Posting</h1>
        <nav>
            <ul>
                <li><a href="job_postings.php">Back to Job Postings</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST" action="">
            <label for="company_id">Company ID:</label>
            <input type="text" id="company_id" name="company_id" required>
            <br>
            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" required>
            <br>
            <label for="salary">Salary:</label>
            <input type="text" id="salary" name="salary" required>
            <br>
            <label for="date_posted">Date Posted:</label>
            <input type="date" id="date_posted" name="date_posted" required>
            <br>
            <input type="submit" value="Add Job Posting">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>

