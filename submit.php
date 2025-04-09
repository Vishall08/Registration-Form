<?php
// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sanitize input function
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Get and sanitize form data
$fullname = sanitize_input($_POST["fullname"]);
$email = sanitize_input($_POST["email"]);
$password = sanitize_input($_POST["password"]); // Ideally hashed
$phone = sanitize_input($_POST["phone"]);
$dob = sanitize_input($_POST["dob"]);
$gender = sanitize_input($_POST["gender"]);
$address = sanitize_input($_POST["address"]);
$country = sanitize_input($_POST["country"]);

// OPTIONAL: Hash password before storing
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Database configuration
$servername = "localhost";
$username = "root";
$password_db = "Pass@123";
$dbname = "facebook";

// Create DB connection
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use prepared statement to prevent SQL injection
$sql = "INSERT INTO users (fullname, email, password, phone, dob, gender, address, country) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $fullname, $email, $hashed_password, $phone, $dob, $gender, $address, $country);

// Execute and check
if ($stmt->execute()) {
    echo "🎉 Registration successful!";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
