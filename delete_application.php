<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $application_id = $_POST['application_id'];

    $sql = "DELETE FROM Applications WHERE application_id = '$application_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Application deleted successfully";
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
    <title>Delete Application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Delete Application</h1>
        <nav>
            <ul>
                <li><a href="applications.php">Back to Applications</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST" action="">
            <label for="application_id">Application ID:</label>
            <input type="text" id="application_id" name="application_id" required>
            <br>
            <input type="submit" value="Delete Application">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>
