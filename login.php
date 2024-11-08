<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'user_database');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);  // Hash the password
$email = $_POST['email'];

// Check if username already exists
$result = $conn->query("SELECT * FROM users WHERE username='$username'");
if ($result->num_rows > 0) {
  echo "Username already taken.";
} else {
  // Insert the new user
  $conn->query("INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')");
  echo "Registration successful!";
}

$conn->close();
?>
