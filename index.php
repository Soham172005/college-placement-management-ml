<?php
session_start(); // Start the session
include 'db.php'; // Include your database connection file

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to a dashboard or main page if already logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Placement Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>College Placement Management System</h1>
        
    </header>
    <main>
        <h2>Welcome to the College Placement Management System</h2>
        <p>Manage students, companies, job postings, and applications efficiently.</p>
        <p>
            <a href="login.php" class="login-button">Login</a> <!-- Login button -->
        </p>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>
