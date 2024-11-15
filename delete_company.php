<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_id = $_POST['company_id'];

    $sql = "DELETE FROM Companies WHERE company_id = '$company_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Company deleted successfully";
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
    <title>Delete Company</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Delete Company</h1>
        <nav>
            <ul>
                <li><a href="companies.php">Back to Companies</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST" action="">
            <label for="company_id">Company ID:</label>
            <input type="text" id="company_id" name="company_id" required>
            <br>
            <input type="submit" value="Delete Company">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>
