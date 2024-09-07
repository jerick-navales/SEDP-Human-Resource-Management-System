<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/689f460c4e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <style>
    body{
      font-family: 'poppins',sans-serif;
    }
    .c-item {
      height: 840px;
    }
    
    .c-image {
      height: 100%;
      object-fit: cover;
      filter: brightness(0.5);
    }
  </style>
    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary bg-gradient bg-opacity-75">
      <div class="container d-flex mb-1">
          <a class="navbar-brand text-white align-text-center fw-bolder fs-3" href="#" >
              <img src="../../public/assets/images/logo.png" alt="logo" width="50" height="50" class="d-inline-block ">
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
                          <li><a class="dropdown-item" href="../models/scholar/scholar-criteria-page.html">Scholarship's</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="job-page.php">Jobs</a></li>
                        </ul>
                    </li>
                      <li class="nav-item me-2"> <!-- me-3 adds right margin -->
                          <a href="#" class="nav-link text-decoration-none text-white fw-bold">About</a> <!-- text-decoration-none removes underline -->
                      </li>
                  </ul>
            </div>
          
        </div>
    </nav>
  <!--Nav ends-->
  <section>
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="../../public/assets/images/service.webp" class="d-block w-100 c-image" alt="...">
          <div class="carousel-caption top-0 mt-5">
            <h1 class="mt-5 display-3 fw-bolder text-uppercase"><Span class="text-success display-1 fw-bolder">S</Span>erving</h1>
            <p class="my-4 fs-1">Thousand of members all over Bicol Region and some parts of Northern Samar</p>
            <button type="button" class="btn btn-success btn-lg my-4">Our Services</button>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="../../public/assets/images/empowering.webp" class="d-block w-100 c-image" alt="...">
          <div class="carousel-caption top-0 mt-5">
            <h1 class="mt-5 display-3 fw-bolder text-uppercase">
              <Span class="text-success display-1 fw-bolder">E</Span>mpowering</h1>
            <p class="my-4 fs-1">Needy family, providing financial and non-financial sevicess</p>
            <button type="button" class="btn btn-success btn-lg my-4">Read tesmimonies</button>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="../../public/assets/images/developing.webp" class="d-block w-100 c-image" alt="...">
          <div class="carousel-caption top-0 mt-5">
            <h1 class="mt-5 display-3 fw-bolder text-uppercase">
              <Span class="text-success display-1 fw-bolder">D</Span>eveloping</h1>
            <p class="my-4 fs-1">their socio-economic condition to become strong and self-sustaining center in their community</p>
            <button type="button" class="btn btn-success btn-lg my-4">Our Product</button>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="../../public/assets/images/people.webp" class="d-block w-100 c-image" alt="...">
          <div class="carousel-caption top-0 mt-5">
            <h1 class="mt-5 display-3 fw-bolder text-uppercase"><Span class="text-success display-1 fw-bolder">P</Span>eople</h1>
            <p class="my-4 fs-1">SEDP-Simbag sa pag-asenso-serving, empowering and developing the people in sustainable way</p>
            <button type="button" class="btn btn-success btn-lg my-4">About Us</button>
          </div>
        </div>
      </div>
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!--cards-->
  <section>
    <div class="container my-5">
      <h1 class="text-center text-uppercase fw-bolder display-6 my-5 p-5">SEDP Mutually supporting institutions</h1>
      <div class="row row-cols-1 row-cols-md-3 g-5">
        <div class="col ">
          <div class="card shadow">
            <img src="../../public/assets/images/micr.webp" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <p class="card-text fs-4 fw-seme-bold">SEDP provides micro-insurance to qualified members through the SEDP-MUTUAL Benefit Association (SEDP-MBA)</p>
              <a href="#"><button type="button" class="btn btn-success btn-lg my-3">Visit Websites</button></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow">
            <img src="../../public/assets/images/logo.webp" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <p class="card-text fs-4 fw-seme-bold mx-2">The SEDP – Simbag sa Pag-Asenso Inc. is a development-oriented institution run by the Diocese of Legazpi.</p>
              <a href="#"><button type="button" class="btn btn-success btn-lg my-3">Read More</button></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow">
            <img src="../../public/assets/images/mpc.webp" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <p class="card-text fs-4 fw-seme-bold">SEDP–Multi-Purpose Cooperative (SEDP-MPC) is the business development arm of the SEDP micro-finance.</p>
              <a href="#"><button type="button" class="btn btn-success btn-lg my-3">Visit Cooperative</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!--testimonies-->
  <section>
    <div class="container-fluid">
      <div class="row mt-5">
        <div class="col text-center mt-5 my-4">
          <h1>Some of the successfull members of SEDP</h1>
          <button class="btn btn-success btn-lg rounded">Read Testimonies</button>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer mt-auto py-3">
    <div class="container text-center my-5">
        <div class="row mb-3">
            <div class="col-12">
                <hr class="line"/>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-medium-m"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
                <hr class="line"/>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <p>Copyright © 2024 SEDP, Inc.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="footer-link">Legal Stuff</a> |
                <a href="#" class="footer-link">Privacy Policy</a> |
                <a href="#" class="footer-link">Security</a> |
                <a href="#" class="footer-link">Website Accessibility</a>
            </div>
        </div>
    </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
</body>
</html>