<?php
// Start session
session_start();

// Destroy session to log out the user
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logout | CareerHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: url('background.jpg') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .logout-box {
      background: rgba(255, 255, 255, 0.9);
      padding: 2rem;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    h2 {
      margin-bottom: 1rem;
      color: #333;
    }

    p {
      color: #555;
    }

    a {
      display: inline-block;
      padding: 0.7rem 1.5rem;
      background: #0052d4;
      color: white;
      border-radius: 8px;
      text-decoration: none;
      margin-top: 1rem;
    }

    a:hover {
      background: #4364f7;
    }
  </style>
</head>
<body>
  <div class="logout-box">
    <h2>You have been logged out.</h2>
    <p>Thank you for using CareerHub!</p>
    <a href="index.php">Back to Home</a>
  </div>
</body>
</html>
