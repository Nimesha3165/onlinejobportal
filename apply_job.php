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
    <form method="POST" action="apply_job.php">
      <input type="text" name="fullname" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <textarea name="message" placeholder="Cover Letter / Message" rows="4" required></textarea>
      <button type="submit" name="apply">Submit Application</button>
    </form>
  </div>

<?php
if (isset($_POST['apply'])) {
  // Database Connection
  $conn = new mysqli("localhost", "root", "", "careerhub");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $fullname = $conn->real_escape_string($_POST['fullname']);
  $email = $conn->real_escape_string($_POST['email']);
  $message = $conn->real_escape_string($_POST['message']);

  $sql = "INSERT INTO job_applications (fullname, email, message) VALUES ('$fullname', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Application submitted successfully'); window.location.href='dashboard.php';</script>";
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>
</body>
</html>
