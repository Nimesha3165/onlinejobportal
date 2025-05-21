<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CareerHub - Your Dream Job Awaits</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f4f7fa;
      color: #333;
    }

    header {
      background: linear-gradient(to right, #0052d4, #4364f7, #6fb1fc);
      color: white;
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 1.8rem;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-left: 1.5rem;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffdd57;
    }

    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 90vh;
      text-align: center;
      background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1600&q=80');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 2rem;
    }

    .hero h2 {
      font-size: 3rem;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      max-width: 600px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
    }

    .hero .btn-group a {
      padding: 0.75rem 1.5rem;
      margin: 0 0.5rem;
      border-radius: 25px;
      background-color: #ffffff;
      color: #0052d4;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .hero .btn-group a:hover {
      background-color: #ffdd57;
      color: #222;
    }

    footer {
      text-align: center;
      padding: 1rem;
      background: #eee;
      color: #666;
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .hero h2 {
        font-size: 2rem;
      }

      .hero p {
        font-size: 1rem;
      }

      nav {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
      }

      nav a {
        margin: 0.5rem 0 0 0;
      }

      .hero .btn-group a {
        margin-top: 0.5rem;
        display: inline-block;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>CareerHub</h1>
    <nav>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a href="jobs.php">Jobs</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Your Dream Job Is Just a Click Away</h2>
    <p>Join thousands of professionals and employers who trust CareerHub to grow and hire smarter.</p>
    <div class="btn-group">
      <a href="register.php">Get Started</a>
      <a href="jobs.php">Browse Jobs</a>
    </div>
  </section>

  <footer>
    &copy; <?php echo date("Y"); ?> CareerHub.
  </footer>

</body>
</html>
