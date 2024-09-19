<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship-criteria page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/689f460c4e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        body {
            font-family: 'poppins', sans-serif;
        }

        .navbar ul li {
            font-family: 500px;
        }

        .criteria-container {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.09);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(3.2px);
            -webkit-backdrop-filter: blur(3.2px);
            border: 1px solid rgba(255, 255, 255, 0.37);
        }
    </style>
    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary bg-gradient bg-opacity-75 ">
        <div class="container d-flex mb-1">
            <a class="navbar-brand text-white align-text-center fw-bolder fs-4" href="../../index.php">
                Simbag sa Pag-asenso Inc.
            </a>
            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
    <!--Nav ends-->
    <section id="criteria " class="my-2 m-3">
        <div class="container ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Scholarship Criteria</li>
                </ol>
            </nav>
        </div>

        <div class="container-md my-2 rounded-3 criteria-container shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="text-center mx-4">
                <br>
                <h4>Scholarship Grant's</h4>
                <p class="text-secondary">Listed below are the criteria needed to apply for the scholarship program for the company:</p>
            </div>

            <div class="row my-2 justify-content-center align-item-center">
                <!--accordians-->
                <div class="accordion p-3 mx-3 " id="criteria">
                    <div class="accordion-item mb-1 shadow p2 rounded">
                        <h2 class="accordion-header" id="heading-1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#criteria-1" aria-expanded="true"
                                aria-controls="criteria-1">
                                1. Employment Status:
                            </button>
                        </h2>
                        <div id="criteria-1" class="accordion-collapse collapse show"
                            aria-labelledby="heading-1" data-bs-parent="#criteria">
                            <div class="accordion-body">
                                <p class="mx-3">The parent or guardian must be a current full-time employee of the company with a minimum of one year of service.</p>
                            </div>
                        </div>
                    </div>
                    <!--criteria_2-->
                    <div class="accordion-item  mb-1 shadow p2 rounded">
                        <h2 class="accordion-header" id="heading-2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#criteria-2" aria-expanded="false"
                                aria-controls="criteria-2">
                                2. Academic Performance:
                            </button>
                        </h2>
                        <div id="criteria-2" class="accordion-collapse collapse"
                            aria-labelledby="heading-2" data-bs-parent="#criteria">
                            <div class="accordion-body">
                                <p class="mx-3">The child must have a minimum GPA of 3.0 or equivalent on their most recent report card or transcript.</p>
                            </div>
                        </div>
                    </div>
                    <!--criteria_3-->
                    <div class="accordion-item  mb-1 shadow p2 rounded">
                        <h2 class="accordion-header" id="heading-3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#criteria-3" aria-expanded="false"
                                aria-controls="criteria-3">
                                3. Attendance Record:
                            </button>
                        </h2>
                        <div id="criteria-3" class="accordion-collapse collapse"
                            aria-labelledby="heading-3" data-bs-parent="#criteria">
                            <div class="accordion-body">
                                <p class="mx-3">The child must have an attendance record of at least 90% in the current or previous academic year.</p>
                            </div>
                        </div>
                    </div>
                    <!--criteria_4-->
                    <div class="accordion-item  mb-1 shadow p2 rounded">
                        <h2 class="accordion-header" id="heading-4">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#criteria-4" aria-expanded="false"
                                aria-controls="criteria-4">
                                4. Age Limit:
                            </button>
                        </h2>
                        <div id="criteria-4" class="accordion-collapse collapse"
                            aria-labelledby="heading-4" data-bs-parent="#criteria">
                            <div class="accordion-body">
                                <p class="mx-3">The child must be between the ages of 5 and 18 years old at the time of application.</p>
                            </div>
                        </div>
                    </div>
                    <!--criteria_5-->
                    <div class="accordion-item  mb-1 shadow p2 rounded">
                        <h2 class="accordion-header" id="heading-5">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#criteria-5" aria-expanded="false"
                                aria-controls="criteria-5">
                                5. Extracurricular Involvement:
                            </button>
                        </h2>
                        <div id="criteria-5" class="accordion-collapse collapse"
                            aria-labelledby="heading-5" data-bs-parent="#criteria">
                            <div class="accordion-body">
                                <p class="mx-3">The child should participate in at least one extracurricular activity, such as sports, music, arts, or community service.</p>
                            </div>
                        </div>
                    </div>
                    <!--criteria_6-->
                    <div class="accordion-item  mb-1 shadow p2 rounded">
                        <h2 class="accordion-header" id="heading-6">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#criteria-6" aria-expanded="false"
                                aria-controls="criteria-6">
                                6. Financial Need:
                            </button>
                        </h2>
                        <div id="criteria-6" class="accordion-collapse collapse"
                            aria-labelledby="heading-6" data-bs-parent="#criteria">
                            <div class="accordion-body">
                                <p class="mx-3"> A demonstrated financial need, supported by documents such as tax returns or a financial aid statement, may be required.</p>
                            </div>
                        </div>
                    </div>
                    <!--criteria_7-->
                    <div class="accordion-item  mb-1 shadow p2 rounded">
                        <h2 class="accordion-header" id="heading-7">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#criteria-7" aria-expanded="false"
                                aria-controls="criteria-7">
                                7. Recommendation Letter:
                            </button>
                        </h2>
                        <div id="criteria-7" class="accordion-collapse collapse"
                            aria-labelledby="heading-7" data-bs-parent="#criteria">
                            <div class="accordion-body">
                                <p class="mx-3">The application must include at least one letter of recommendation from a teacher, counselor, or community leader.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--criteria_8-->
                    <div class="accordion-item  mb-1 shadow p2 rounded">
                        <h2 class="accordion-header" id="heading-8">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#criteria-8" aria-expanded="false"
                                aria-controls="criteria-8">
                                8. Disciplinary Record:
                            </button>
                        </h2>
                        <div id="criteria-8" class="accordion-collapse collapse"
                            aria-labelledby="heading-8" data-bs-parent="#criteria">
                            <div class="accordion-body">
                                <p class="mx-3">The child must have a clean disciplinary record with no major infractions or suspensions in the current or previous academic year.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container p-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center ">
                        <li class="page-item disabled">
                            <a class="page-link shadow">previous</i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link shadow " href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>