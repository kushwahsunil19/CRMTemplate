<?php 
// Include database connection file
include_once("includes/db.php");

// Retrieve form data
$username = $_POST['email']; // Assuming the username is stored in 'email' field
$password = $_POST['password'];

try {
    // Prepare SQL statement to retrieve the password for the given username
    $stmt = $conn->prepare("SELECT id, username, password FROM tbl_admin WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Check if the username exists
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // Get the stored password from the database
        $storedPassword = $row['password'];
        
        // Compare plain text passwords
        if ($password === $storedPassword) {
            session_start();
            // Password matches, set session variables
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            // Redirect to dashboard.php
            echo json_encode(array("status" => "success", "message" => "Login successful.", "redirect" => "dashboard.php"));
        } else {
            // Incorrect password
            echo json_encode(array("status" => "error", "message" => "Incorrect password."));
        }
    } else {
        // Incorrect username
        echo json_encode(array("status" => "error", "message" => "Incorrect username."));
    }
} catch(PDOException $e) {
    // Display error message
    echo json_encode(array("status" => "error", "message" => "Database error: " . $e->getMessage()));
}

// Close database connection
$conn = null;
?>
