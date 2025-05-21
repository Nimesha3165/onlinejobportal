<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us | CareerHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #74ebd5, #9face6);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .contact-container {
      background: #ffffff;
      max-width: 700px;
      width: 90%;
      padding: 2.5rem;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 2rem;
      color: #333;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 1rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 12px;
      font-size: 1rem;
    }

    .contact-form button {
      width: 100%;
      background: #0052d4;
      color: white;
      border: none;
      padding: 1rem;
      font-size: 1rem;
      border-radius: 12px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact-form button:hover {
      background: #4364f7;
    }

    .info {
      text-align: center;
      margin-top: 1.5rem;
      font-size: 0.95rem;
      color: #555;
    }

    .info a {
      color: #0052d4;
      text-decoration: none;
      font-weight: 500;
    }

    .info a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="contact-container">
    <h2>Get in Touch with CareerHub</h2>
    <form class="contact-form" method="POST" action="contact.php">
      <input type="text" name="name" placeholder="Your Full Name" required />
      <input type="email" name="email" placeholder="Your Email Address" required />
      <input type="text" name="subject" placeholder="Subject" />
      <textarea name="message" rows="5" placeholder="Write your message..." required></textarea>
      <button type="submit" name="submit">Send Message</button>
    </form>

    <div class="info">
      <p>Or email us directly at <a href="mailto:support@careerhub.com">support@careerhub.com</a></p>
      <p><a href="index.php">← Back to Home</a></p>
    </div>
  </div>

<?php
if (isset($_POST['submit'])) {
  // Database connection
  $conn = new mysqli("localhost", "root", "", "careerhub");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);
  $subject = $conn->real_escape_string($_POST['subject']);
  $message = $conn->real_escape_string($_POST['message']);

  $sql = "INSERT INTO contact_messages (name, email, subject, message) 
          VALUES ('$name', '$email', '$subject', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Message sent successfully!'); window.location.href='index.php';</script>";
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>
</body>
</html>
