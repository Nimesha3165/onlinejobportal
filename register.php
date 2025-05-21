<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | CareerHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background: #f0fff7;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-box {
      background: #fff;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 400px;
    }

    .register-box h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
      width: 100%;
      padding: 0.7rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    .register-btn {
      width: 100%;
      padding: 0.7rem;
      background-color: #28a745;
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 10px;
      cursor: pointer;
    }

    .register-btn:hover {
      background-color: #218838;
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
  <div class="register-box">
    <h2>Create an Account</h2>
    <form action="register.php" method="POST">
      <input type="text" name="fullname" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="password" name="password" placeholder="Password" required />
      <select name="role" required>
        <option value="">I am a...</option>
        <option value="seeker">Job Seeker</option>
        <option value="employer">Employer</option>
      </select>
      <button type="submit" class="register-btn" name="register">Register</button>
    </form>
    <div class="extra">
      <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
  </div>

  <?php
  if (isset($_POST['register'])) {
    // DB connection
    $conn = new mysqli("localhost", "root", "", "careerhub");

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Collect form data
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $conn->real_escape_string($_POST['role']);

    // Insert into DB
    $sql = "INSERT INTO users (fullname, email, password, role) VALUES ('$fullname', '$email', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
  ?>
</body>
</html>
