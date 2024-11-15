<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST['company_name'];
    $contact_person = $_POST['contact_person'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $website = $_POST['website'];

    $sql = "INSERT INTO Companies (company_name, contact_person, email, phone_number, website) VALUES ('$company_name', '$contact_person', '$email', '$phone_number', '$website')";

    if ($conn->query($sql) === TRUE) {
        echo "New company added successfully";
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
    <title>Add Company</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Add Company</h1>
        <nav>
            <ul>
                <li><a href="companies.php">Back to Companies</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST" action="">
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" required>
            <br>
            <label for="contact_person">Contact Person:</label>
            <input type="text" id="contact_person" name="contact_person" required>
            <br>
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required>
            <br>
            <label for="website">Website:</label>
            <input type="text" id="website" name="website" required>
            <br>
            <input type="submit" value="Add Company">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 College Placement Management System</p>
    </footer>
</body>
</html>

