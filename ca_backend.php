<?php
$servername = "localhost";
$username = "root";   // default for XAMPP
$password = "";       // default empty
$dbname = "ca_advisior";  // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$pass = $_POST['password'];
$profession = $_POST['profession'];
$gender = $_POST['gender'];

// Insert into table
$sql = "INSERT INTO user (name, contact, email, password, profession, gender) 
        VALUES ('$name', '$contact', '$email', '$pass', '$profession', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Registration successful!";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
