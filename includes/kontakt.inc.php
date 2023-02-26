<?php
session_start();

date_default_timezone_set('Europe/Oslo');

// Connect to the database
include_once 'dbh.inc.php';

// Get the form data
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$subject = trim(filter_var($_POST['subject'], FILTER_SANITIZE_STRING));
$message = trim(filter_var($_POST['message'], FILTER_SANITIZE_STRING));
$date = date("Y-m-d H:i:s");

// Validate the form data
if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($subject) || empty($message)) {
    $_SESSION['error'] = "Please fill out all fields correctly";
    header("Location: /kvgs/kontaktform.php");
    exit();
}

// Prepare the query
$query = "INSERT INTO contacts (name, email, subject, message, date) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);

// Bind the variables to the placeholders
mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $subject, $message, $date);

// Execute the query
mysqli_stmt_execute($stmt);

// Close the statement
mysqli_stmt_close($stmt);

// Close the database connection
mysqli_close($conn);

// Confirm that the data was inserted
$_SESSION['message'] = "Meldingen din ble sendt!";
header("Location: /kvgs/kontaktform.php");
exit();