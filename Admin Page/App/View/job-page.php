<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../public/assets/css/employee/emInfo.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <style>
    body{
      background-color: #f0f0f0;
      font-family: 'poppins', sans-serif;
    }
  </style>
    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary bg-gradient bg-opacity-75">
      <div class="container d-flex mb-1">
          <a class="navbar-brand text-white align-text-center fw-bolder fs-2" href="Sample-Landing-page.html" >
              <img src="../../public/assets/images/logo.webp" alt="Logo" width="50" height="50" class="d-inline-block ">
              SEDP
            </a>
          <button class="navbar-toggler" type="button"
          data-bs-toggle="collapse" data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
          </button>
              <div class="collapse navbar-collapse" id="navmenu">
                  <ul class="navbar-nav ms-auto ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fw-bold" 
                        href="#" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                        Apply
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Scholarship's</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="job-page.html">Jobs</a></li>
                        </ul>
                      </li>
                      <li class="nav-item me-2"> <!-- me-3 adds right margin -->
                          <a href="#" class="nav-link text-decoration-none text-white fw-bold">About</a> <!-- text-decoration-none removes underline -->
                      </li>
                  </ul>
            </div>
        </div>
    </nav>

    <!---->
    <div class="container bg-light my-5">
        <div class="row">
          <nav aria-label="breadcrumb" class="my-2">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Sample-Landing-page.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Job-Offers</li>
              </ol>
          </nav>
          <div class="text-center pt-2 fs-lg-bold">
            <h1 class="fw-bold fs-2 fs-sm-5">Join Our Team and Shape the Future with Us!</h1>
            <img src="../../public/assets/images/hiring.webp" alt="img" class="img-fluid rounded shadow my-4 "  style="height: auto; width: 700px;">
            <p class="lead text-muted p-2 m-2 my-5 mx-5">At <span class="fs-4 fw-bold">SEDP Simbag Sa Pag-Asesnso Inc</span>, we foster talent, embrace innovation, 
              and drive success. As a leader in HR, we offer a dynamic environment where
              you can grow professionally and personally. Join us today and be part of a
              company that values and invests in your future.</p>
          </div>
          
      </div>
    </div>
    <section>
      <div class="container my-5 bg-light">
        <div class="row">
          <h1 class="text-center fw-bold fs-3 my-5">Our Company are Currently looking for the following:</h1>
        </div>
        <div class="row align-item-center justify-content-center">
              <?php
                    //connection
                    include("../../core/database/database.php");
                    //read all row from database table
                    $sql= "SELECT * FROM job";
                    $result = $connection->query($sql);
        
                    if (!$result) {
                        die("Invalid Query". $connection->error);
                    }
                    //read data of each row
                    while ($row = $result->fetch_assoc()) {
                      echo"
                  <div class='col-lg-9'>
                    <div class='card mb-3 shadow'>
                      <div class='card-body'>
                      <h5 class='card-title'><i class='bi bi-briefcase-fill'></i> $row[tittle]</h5>
                      <p class='card-text mx-2'> <i class='bi bi-card-checklist'></i>  Responsibilities: $row[responsibilities] </p>
                      <p class='card-text mx-2'> <i class='bi bi-clipboard-check'></i> Requirements: $row[requirements]</p>
                      <a href='#' class='btn btn-primary'>Apply</a>
                      </div>
                    </div>
                  </div>
                  ";
                    }
                    ?>  
                    
                  <div class="col-lg-9">
                    <div class="card mb-3 shadow">
                      <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-briefcase-fill"></i> Compensation and Benefits Analyst</h5>
                        <p class="card-text mx-2"> <i class="bi bi-card-checklist"></i> Responsibilities: Analyzing compensation data, developing benefits programs, and ensuring competitive salary structures.</p>
                        <p class="card-text mx-2"> <i class="bi bi-clipboard-check"></i> Requirements: Bachelor’s degree in Finance or HR, 3+ years of experience, strong analytical skills.</p>
                        <a href="#" class="btn btn-primary">Apply</a>
                      </div>
                    </div>
                  </div>
        </div>
      </div>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
</body>
</html>