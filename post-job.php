<?php
// Start session
session_start();

// Optional: Check if user is logged in before allowing job posting
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $description = $_POST['description'];

    // Connect to database (replace with your DB config)
    $conn = new mysqli("localhost", "root", "", "careerhub");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert job into database
    $stmt = $conn->prepare("INSERT INTO jobs (job_title, company_name, location, salary, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $job_title, $company_name, $location, $salary, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect after posting
    header("Location: dashboard.php?posted=success");
    exit();
}
?>

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
    <form method="POST" action="">
      <input type="text" name="job_title" placeholder="Job Title" required />
      <input type="text" name="company_name" placeholder="Company Name" required />
      <input type="text" name="location" placeholder="Location" required />
      <input type="text" name="salary" placeholder="Salary (Optional)" />
      <textarea name="description" placeholder="Job Description" rows="5" required></textarea>
      <button type="submit">Post Job</button>
    </form>
  </div>
</body>
</html>
<?php
// Start session
session_start();

// Optional: Check if user is logged in before allowing job posting
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $description = $_POST['description'];

    // Connect to database (replace with your DB config)
    $conn = new mysqli("localhost", "root", "", "careerhub");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert job into database
    $stmt = $conn->prepare("INSERT INTO jobs (job_title, company_name, location, salary, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $job_title, $company_name, $location, $salary, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect after posting
    header("Location: dashboard.php?posted=success");
    exit();
}
?>

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
    <form method="POST" action="">
      <input type="text" name="job_title" placeholder="Job Title" required />
      <input type="text" name="company_name" placeholder="Company Name" required />
      <input type="text" name="location" placeholder="Location" required />
      <input type="text" name="salary" placeholder="Salary (Optional)" />
      <textarea name="description" placeholder="Job Description" rows="5" required></textarea>
      <button type="submit">Post Job</button>
    </form>
  </div>
</body>
</html>
<?php
// Start session
session_start();

// Optional: Check if user is logged in before allowing job posting
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $description = $_POST['description'];

    // Connect to database (replace with your DB config)
    $conn = new mysqli("localhost", "root", "", "careerhub");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert job into database
    $stmt = $conn->prepare("INSERT INTO jobs (job_title, company_name, location, salary, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $job_title, $company_name, $location, $salary, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect after posting
    header("Location: dashboard.php?posted=success");
    exit();
}
?>

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
    <form method="POST" action="">
      <input type="text" name="job_title" placeholder="Job Title" required />
      <input type="text" name="company_name" placeholder="Company Name" required />
      <input type="text" name="location" placeholder="Location" required />
      <input type="text" name="salary" placeholder="Salary (Optional)" />
      <textarea name="description" placeholder="Job Description" rows="5" required></textarea>
      <button type="submit">Post Job</button>
    </form>
  </div>
</body>
</html>
<?php
// Start session
session_start();

// Optional: Check if user is logged in before allowing job posting
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $description = $_POST['description'];

    // Connect to database (replace with your DB config)
    $conn = new mysqli("localhost", "root", "", "careerhub");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert job into database
    $stmt = $conn->prepare("INSERT INTO jobs (job_title, company_name, location, salary, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $job_title, $company_name, $location, $salary, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect after posting
    header("Location: dashboard.php?posted=success");
    exit();
}
?>

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
    <form method="POST" action="">
      <input type="text" name="job_title" placeholder="Job Title" required />
      <input type="text" name="company_name" placeholder="Company Name" required />
      <input type="text" name="location" placeholder="Location" required />
      <input type="text" name="salary" placeholder="Salary (Optional)" />
      <textarea name="description" placeholder="Job Description" rows="5" required></textarea>
      <button type="submit">Post Job</button>
    </form>
  </div>
</body>
</html>
<?php
// Start session
session_start();

// Optional: Check if user is logged in before allowing job posting
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $description = $_POST['description'];

    // Connect to database (replace with your DB config)
    $conn = new mysqli("localhost", "root", "", "careerhub");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert job into database
    $stmt = $conn->prepare("INSERT INTO jobs (job_title, company_name, location, salary, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $job_title, $company_name, $location, $salary, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect after posting
    header("Location: dashboard.php?posted=success");
    exit();
}
?>

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
    <form method="POST" action="">
      <input type="text" name="job_title" placeholder="Job Title" required />
      <input type="text" name="company_name" placeholder="Company Name" required />
      <input type="text" name="location" placeholder="Location" required />
      <input type="text" name="salary" placeholder="Salary (Optional)" />
      <textarea name="description" placeholder="Job Description" rows="5" required></textarea>
      <button type="submit">Post Job</button>
    </form>
  </div>
</body>
</html>
<?php
// Start session
session_start();

// Optional: Check if user is logged in before allowing job posting
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $description = $_POST['description'];

    // Connect to database (replace with your DB config)
    $conn = new mysqli("localhost", "root", "", "careerhub");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert job into database
    $stmt = $conn->prepare("INSERT INTO jobs (job_title, company_name, location, salary, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $job_title, $company_name, $location, $salary, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect after posting
    header("Location: dashboard.php?posted=success");
    exit();
}
?>

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
    <form method="POST" action="">
      <input type="text" name="job_title" placeholder="Job Title" required />
      <input type="text" name="company_name" placeholder="Company Name" required />
      <input type="text" name="location" placeholder="Location" required />
      <input type="text" name="salary" placeholder="Salary (Optional)" />
      <textarea name="description" placeholder="Job Description" rows="5" required></textarea>
      <button type="submit">Post Job</button>
    </form>
  </div>
</body>
</html>
