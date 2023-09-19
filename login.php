<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the valid username and password
    $validUsername = "Root";
    $validPassword = "Nishu123";

    // Retrieve the submitted username and password
    $submittedUsername = isset($_POST['username']) ? $_POST['username'] : '';
    $submittedPassword = isset($_POST['password']) ? $_POST['password'] : '';

    // Check if the submitted username and password match the valid credentials
    if ($submittedUsername === $validUsername && $submittedPassword === $validPassword) {
        // Login successful, redirect to home.html
        header("Location: home.html");
        exit; // Ensure no more code is executed after redirection
    } else {
        // Login failed, show an error message using JavaScript
        echo '<script>alert("Login failed. Invalid username or password.");</script>';
        echo '<script>window.location.href = "index.php";</script>'; // Redirect to index.php
        exit; // Ensure no more code is executed after redirection
    }
}
?>
