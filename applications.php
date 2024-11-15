<?php
include 'db.php';

$sql = "SELECT a.application_id, s.first_name, s.last_name, jp.job_title, a.application_date, a.status 
        FROM Applications a 
        JOIN Students s ON a.student_id = s.student_id 
        JOIN Job_Postings jp ON a.job_id = jp.job_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Applications</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="add_application.php">Add Application</a></li>
                <li><a href="delete_application.php">Delete Application</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>List of Applications</h2>
        <table>
            <tr>
                <th>Application ID</th>
                <th>Student Name</th>
                <th>Job Title</th>
                <th>Application Date</th>
                <th>Status</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['application_id']}</td>
                            <td>{$row['first_name']} {$row['last_name']}</td>
                            <td>{$row['job_title']}</td>
                            <td>{$row['application_date']}</td>
                            <td>{$row['status']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No applications found</td></tr>";
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
