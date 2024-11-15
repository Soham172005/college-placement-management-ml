<?php
include 'db.php';

$sql = "SELECT * FROM Companies";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Companies</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="students.php">Students</a></li>
                <li><a href="job_postings.php">Job Postings</a></li>
                <li><a href="applications.php">Applications</a></li>
                <li><a href="add_company.php">Add Company</a></li>
                <li><a href="delete_company.php">Delete Company</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>List of Companies</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>Contact Person</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Website</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['company_id']}</td>
                            <td>{$row['company_name']}</td>
                            <td>{$row['contact_person']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone_number']}</td>
                            <td>{$row['website']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No companies found</td></tr>";
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
