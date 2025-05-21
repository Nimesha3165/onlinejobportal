<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $conn = new mysqli("localhost", "root", "", "careerhub");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO applications (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header("Location: dashboard.php?applied=success");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Apply Job | CareerHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f2f2f2;
      padding: 2rem;
    }

    .apply-box {
      max-width: 600px;
      background: #fff;
      padding: 2rem;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    input, textarea {
      width: 100%;
      margin-bottom: 1rem;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      width: 100%;
      padding: 0.8rem;
      background: #0052d4;
      color: white;
      border: none;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
    }

    button:hover {
      background: #4364f7;
    }
  </style>
</head>
<body>
  <div class="apply-box">
    <h2>Apply for This Job</h2>
    <form method="POST" action="">
      <input type="text" name="name" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <textarea name="message" placeholder="Cover Letter / Message" rows="4" required></textarea>
      <button type="submit">Submit Application</button>
    </form>
  </div>
</body>
</html>