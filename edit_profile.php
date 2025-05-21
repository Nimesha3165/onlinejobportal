<?php
// Start session to get current user ID
session_start();
$user_id = $_SESSION['user_id'] ?? null;

if (!$user_id) {
  die("User not logged in.");
}

// Connect to database
$conn = new mysqli("localhost", "root", "", "careerhub");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch existing user data to show in form
$query = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($query);
$user = $result->fetch_assoc();

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $full_name = $conn->real_escape_string($_POST['full_name']);
  $email = $conn->real_escape_string($_POST['email']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $role = $conn->real_escape_string($_POST['role']);

  $update = "UPDATE users SET full_name='$full_name', email='$email', phone='$phone', current_role='$role' WHERE id = $user_id";

  if ($conn->query($update) === TRUE) {
    echo "<script>alert('Profile updated successfully'); window.location.href='dashboard.php';</script>";
  } else {
    echo "Error: " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Profile | CareerHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f0f0f0;
      padding: 2rem;
    }

    .profile-box {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    input {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      width: 100%;
      padding: 0.8rem;
      background: #007bff;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="profile-box">
    <h2>Edit Your Profile</h2>
    <form method="POST" action="edit_profile.php">
      <input type="text" name="full_name" value="<?= htmlspecialchars($user['full_name'] ?? '') ?>" placeholder="Full Name" required />
      <input type="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>" placeholder="Email Address" required />
      <input type="text" name="phone" value="<?= htmlspecialchars($user['phone'] ?? '') ?>" placeholder="Phone Number" />
      <input type="text" name="role" value="<?= htmlspecialchars($user['current_role'] ?? '') ?>" placeholder="Current Role" />
      <button type="submit">Update Profile</button>
    </form>
  </div>
</body>
</html>
