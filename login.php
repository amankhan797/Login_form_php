<?php
// Retrieve form data
$username = $_POST['fullname'];
$email= $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['pass'];

// Create a database connection (replace these with your actual values)
$conn = new mysqli("localhost", "root", "", "crms");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the insert query
$sql = "INSERT INTO login_form VALUES ('$username', '$email', '$contact' , '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>