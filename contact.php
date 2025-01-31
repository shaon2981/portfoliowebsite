<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (empty($full_name) || empty($email) || empty($mobile) || empty($subject) || empty($message)) {
        die("All fields are required!");
    }

    $sql = "INSERT INTO contacts (full_name, email, mobile, subject, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $full_name, $email, $mobile, $subject, $message);

    if ($stmt->execute()) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
