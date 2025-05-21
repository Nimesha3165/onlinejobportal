<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | CareerHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background: #e0f0ff;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background: #fff;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 350px;
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 0.7rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    .login-btn {
      width: 100%;
      padding: 0.7rem;
      background-color: #0052d4;
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 10px;
      cursor: pointer;
    }

    .login-btn:hover {
      background-color: #4364f7;
    }

    .extra {
      text-align: center;
      margin-top: 1rem;
    }

    .extra a {
      color: #0052d4;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login to CareerHub</h2>
    <form method="POST" action="login.php">
      <input type="text" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit" class="login-btn" name="login">Login</button>
    </form>
    <div class="extra">
      <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
  </div>

<?php
if (isset($_POST['login'])) {
  $conn = new mysqli("localhost", "root", "", "careerhub");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $email = $conn->real_escape_string($_POST['email']);
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
    if (password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['role'] = $user['role'];
      $_SESSION['fullname'] = $user['fullname'];
      
      echo "<script>alert('Login Successful'); window.location.href = 'dashboard.php';</script>";
    } else {
      echo "<script>alert('Incorrect Password');</script>";
    }
  } else {
    echo "<script>alert('User not found');</script>";
  }

  $conn->close();
}
?>
</body>
</html>
