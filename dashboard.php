<?php
// Start session
session_start();

// Optional: Redirect to login page if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard | CareerHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #eaf4ff;
      padding: 2rem;
    }

    .dashboard {
      max-width: 900px;
      margin: auto;
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 2rem;
    }

    .menu a {
      display: block;
      margin: 1rem 0;
      background: #0052d4;
      color: white;
      padding: 1rem;
      border-radius: 10px;
      text-align: center;
      text-decoration: none;
      font-weight: bold;
    }

    .menu a:hover {
      background: #4364f7;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <h2>Welcome to Your Dashboard</h2>
    <div class="menu">
      <a href="post_job.php">Post a Job</a>
      <a href="jobs.php">View Jobs</a>
      <a href="edit_profile.php">Edit Profile</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
</body>
</html>
