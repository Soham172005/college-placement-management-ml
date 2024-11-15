<?php
include 'db.php';

$sql = "SELECT jp.job_id, c.company_name, jp.job_title, jp.salary, jp.date_posted 
        FROM Job_Postings jp 
        JOIN Companies c ON jp.company_id = c.company_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Postings</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Job Postings</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="students.php">Students</a></li>
                <li><a href="companies.php">Companies</a></li>
                <li><a href="applications.php">Applications</a></li>
                <li><a href="add_job_posting.php">Add Job Posting</a></li>
                <li><a href="delete_job_posting.php">Delete Job Posting</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>List of Job Postings</h2>
        <table>
            <tr>
                <th>Job ID</th>
                <th>Company Name</th>
                <th>Job Title</th>
                <th>Salary</th>
                <th>Date Posted</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['job_id']}</td>
                            <td>{$row['company_name']}</td>
                            <td>{$row['job_title']}</td>
                            <td>{$row['salary']}</td>
                            <td>{$row['date_posted']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No job postings found</td></tr>";
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
