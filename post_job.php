<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Post a Job | CareerHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f5faff;
      padding: 2rem;
    }

    .form-box {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.05);
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    input, textarea {
      width: 100%;
      margin-bottom: 1rem;
      padding: 0.75rem;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    button {
      width: 100%;
      padding: 0.8rem;
      background: #28a745;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    button:hover {
      background: #218838;
    }
  </style>
</head>
<body>
  <div class="form-box">
    <h2>Post a New Job</h2>
    <form method="POST" action="post_job.php">
      <input type="text" name="title" placeholder="Job Title" required />
      <input type="text" name="company" placeholder="Company Name" required />
      <input type="text" name="location" placeholder="Location" required />
      <input type="text" name="salary" placeholder="Salary (Optional)" />
      <textarea name="description" placeholder="Job Description" rows="5" required></textarea>
      <button type="submit" name="submit">Post Job</button>
    </form>
  </div>

<?php
if (isset($_POST['submit'])) {
  // DB Connection
  $conn = new mysqli("localhost", "root", "", "careerhub");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Form Data
  $title = $conn->real_escape_string($_POST['title']);
  $company = $conn->real_escape_string($_POST['company']);
  $location = $conn->real_escape_string($_POST['location']);
  $salary = $conn->real_escape_string($_POST['salary']);
  $description = $conn->real_escape_string($_POST['description']);

  // Insert Query
  $sql = "INSERT INTO job_posts (job_title, company_name, location, salary, description) 
          VALUES ('$title', '$company', '$location', '$salary', '$description')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Job posted successfully!'); window.location.href='dashboard.php';</script>";
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>
</body>
</html>
