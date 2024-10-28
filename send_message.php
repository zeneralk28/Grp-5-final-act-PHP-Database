<?php
session_start(); // Start the session

$host = 'localhost'; 
$dbname = 'dbpersonal'; 
$username = 'root';
$password = ''; 

//Connect to the Database

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $recipient = test_input($_POST['recipient']);
    $message = test_input($_POST['message']);

    // Validate that no fields are empty
    if (empty($name) || empty($email) || empty($recipient) || empty($message)) {
        echo "All fields are required.";
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO messages (name, email, recipient, message) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("ssss", $name, $email, $recipient, $message);

    if ($stmt->execute()) {
        // Store a success message in session
        $_SESSION['success'] = "Message sent successfully!";
        header("Location: message_receipt.php?name=$name&email=$email&recipient=$recipient&message=$message");
        exit();
    } else {
        echo "Failed to send the message.";
    }
}

$stmt->close();
$conn->close();
?>
