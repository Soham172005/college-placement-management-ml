<?php
session_start(); // Start the session
include 'db.php'; // Include your database connection file

// Assuming you have the user's name stored in the session
$userName = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'User';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - College Placement Management System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
</head>
<body>
    <header>
        <h1>College Placement Management System</h1>
        <nav>
            <ul>
                <li><a href="students.php">Students</a></li>
                <li><a href="companies.php">Companies</a></li>
                <li><a href="job_postings.php">Job Postings</a></li>
                <li><a href="applications.php">Applications</a></li>
                <li><a href="logout.php">Logout</a></li> <!-- Logout link -->
            </ul>
        </nav>
    </header>
    <main>
        <h2>Welcome, <?php echo htmlspecialchars($userName); ?>!</h2> <!-- Display the logged-in user's name -->
        <p>You are now logged in to the College Placement Management System.</p>
        <p>Use the navigation menu to manage students, companies, job postings, and applications.</p>

        <div class="card-container">
            <div class="card">
                <h3><i class="fas fa-user-graduate"></i> Students</h3>
                <p>Manage student profiles and information.</p>
                <a href="students.php" class="button">View Students</a>
            </div>
            <div class="card">
                <h3><i class="fas fa-building"></i> Companies</h3>
                <p>View and manage company profiles.</p>
                <a href="companies.php" class="button">View Companies</a>
            </div>
            <div class="card">
                <h3><i class="fas fa-briefcase"></i> Job Postings</h3>
                <p>Manage job postings for students.</p>
                <a href="job_postings.php" class="button">View Job Postings</a>
            </div>
            <div class="card">
                <h3><i class="fas fa-paper-plane"></i> Applications</h3>
                <p>Track student applications to jobs.</p>
                <a href="applications.php" class="button">View Applications</a>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>
