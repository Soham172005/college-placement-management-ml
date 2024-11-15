<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $graduation_year = $_POST['graduation_year'];
    $major = $_POST['major'];

    $sql = "INSERT INTO Students (first_name, last_name, email, phone_number, graduation_year, major) VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$graduation_year', '$major')";

    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully";
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
    <title>Add Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Add Student</h1>
        <nav>
            <ul>
                <li><a href="students.php">Back to Students</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST" action="">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
            <br>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required>
            <br>
            <label for="graduation_year">Graduation Year:</label>
            <input type="text" id="graduation_year" name="graduation_year" required>
            <br>
            <label for="major">Major:</label>
            <input type="text" id="major" name="major" required>
            <br>
            <input type="submit" value="Add Student">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>
