<?php
$title="Employee | SEDP HRMS";
$page="employee";
include('../../Core/Includes/header.php');
?>
  <!--HEADER ../../public/assets/images/logo.webp-->
  <nav class="navbar navbar-expand-lg bg-info navbar-dark">
  <div class="container">
      <img class="logo" src="../../public/assets/images/logo.webp" class="w-5" alt="LOGO" >
      <button class="navbar-toggler" type="button"
      data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav">
                <li class="nav-item me-2"> <!-- me-3 adds right margin -->
                    <a href="#" class="nav-link text-decoration-none text-dark fw-bold">Home</a> <!-- text-decoration-none removes underline -->
                </li>
                <li class="nav-item me-2"> <!-- me-3 adds right margin -->
                    <a href="#" class="nav-link text-decoration-none text-dark fw-bold">Dashboard</a> <!-- text-decoration-none removes underline -->
                </li>
            </ul>
        </div>
    </div>
  </nav>
  

  <!--/HEADER -->

  <!-- main -->
  <main class="bg-secondary text-dark p-5">
    <div class="container">
        <div class="d-sm-flex">
            <div class="justify-content-center-sm">
                <img class="img-fluid" src="../../public/assets/images/employee.jpg" alt="">
            </div>
            <div class="mx-3 pt-2">
                <h1 class="fw-bold">Arnold D. Ayapana!</h1>
                <p>Admin</p>
            </div>
        </div>
        <div class="p-2">
            <ul class="nav nav-tabs p-2" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Personal Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Account Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Change Password</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="d-grid justify-content-md-end pt-2">
                        <button class="btn btn-primary" type="button">Edit</button>
                    </div>
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col1 d-flex flex-column align-items-center">
                            <img class="profileinfo img-fluid mb-2 d-none d-md-block" src="../../public/assets/images/employee.jpg" alt="Profile Picture">
                            <div class="col-12 col-md-4mb-2 text-center">
                                <label for="formFileSm" class="form-label d-block">Profile Picture</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                        <div class="container my-3">
                            <form class="row g-3">
                                <div class="col-12 col-md-3">
                                    <label for="validationDefault01" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="validationDefault01" value="" placeholder="Juan T Delacruz" required>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="validationDefault02" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="validationDefault02" value="" placeholder="Email address" required>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="validationDefault03" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="validationDefault03" placeholder="Address" required>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label for="validationDefault04" class="form-label">Contact Number</label>
                                    <input type="number" class="form-control" id="validationDefault04" value="" placeholder="+0966xxxxxxx" required>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label for="validationDefault05" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" id="validationDefault05" placeholder="01/03/2002" required>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label for="validationDefault06" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" id="validationDefault06" value="" placeholder="ex. Filipino" required>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label for="validationDefault07" class="form-label">Marital Status</label>
                                    <select class="form-select" id="validationDefault07" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Single</option>
                                        <option>Taken</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-2">
                                    <label for="validationDefault08" class="form-label">Gender</label>
                                    <select class="form-select" id="validationDefault08" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>   
                </div>
                <!-- Acount Information here-->
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="col m-5 mt-3">
                        <div class="row">
                            <div class="content">
                                <h4 class="fw-bold">Employee &gt; Account information</h4>
                                <form class="row g-3 m-4" id="account-form">
                                    <div class="col-12 col-md-4">
                                        <label for="employee-id" class="form-label">Employee ID</label>
                                        <input type="text" class="form-control w-200" id="employee-id" value="" placeholder="1231sssss" disabled>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="position-title" class="form-label">Position/Job Title</label>
                                        <input type="text" class="form-control w-100" id="position-title" value="" placeholder="HR assistant" disabled>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="date-of-hire" class="form-label">Date of Hire</label>
                                        <input type="text" class="form-control w-100" id="date-of-hire" value="" placeholder="4/22/2019" disabled>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="department" class="form-label">Department</label>
                                        <input type="text" class="form-control w-100" id="department" value="" placeholder="Staff" disabled>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="employment-status" class="form-label">Employment Status</label>
                                        <input type="text" class="form-control w-100" id="employment-status" value="" placeholder="Full time" disabled>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="work-location" class="form-label">Work Location</label>
                                        <input type="text" class="form-control w-100" id="work-location" value="" placeholder="Bulan branch" disabled>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Chancge Password here-->
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                    <div class="col-md-5 m-2">
                            <div class="row m-2" id="PasswordContainer">
                                <h4>&gt;Change Password</h4>
                                <form class="mx-3">
                                <div class="col-auto">
                                    <label for="exampleInputPassword1" class="form-label">Current Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="col-auto">
                                    <label for="exampleInputPassword1" class="form-label">New Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary" type="button">Save</button>
                                    <button class="btn btn-danger" type="button">Cancel</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</main>


  <!-- Information -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>