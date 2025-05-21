<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jobs | CareerHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f9f9f9;
      padding: 2rem;
    }

    h1 {
      text-align: center;
      margin-bottom: 2rem;
    }

    .job-list {
      max-width: 800px;
      margin: 0 auto;
    }

    .job {
      background: #fff;
      padding: 1rem 1.5rem;
      margin-bottom: 1rem;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.05);
    }

    .job h3 {
      margin-bottom: 0.3rem;
    }

    .job p {
      margin-bottom: 0.5rem;
    }

    .job a {
      color: #0052d4;
      text-decoration: none;
      font-weight: bold;
    }

    .job a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <h1>Available Jobs</h1>
  <div class="job-list">
    <?php
      $jobs = [
        ["title" => "Frontend Developer", "company" => "TechWave Inc.", "link" => "job-details.php"],
        ["title" => "UI/UX Designer", "company" => "DesignStudio", "link" => "job-details1.php"],
        ["title" => "Graphic Designer", "company" => "Pixel Studio.", "link" => "job-details2.php"],
        ["title" => "Digital marketing Executive", "company" => "market pro lanka", "link" => "job-details3.php"],
        ["title" => "Data Entry Operator", "company" => "Quick Data Services", "link" => "job-details4.php"],
      ];

      foreach ($jobs as $job) {
        echo "<div class='job'>
                <h3>{$job['title']}</h3>
                <p>Company: {$job['company']}</p>
                <a href='{$job['link']}'>View Details</a>
              </div>";
      }
    ?>
  </div>
</body>
</html>
