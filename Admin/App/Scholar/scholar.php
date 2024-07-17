<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholar</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- LineIcons CSS -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .container {
            padding-top: 20px;
        }

        .table-actions {
            text-align: center;
        }

        .table-actions .btn {
            margin-bottom: 10px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vertical-align {
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php 
            include("../../Core/Includes/sidebar.php");
        ?>
        <div class="main p-3">
            <div class="row mb-3 align-items-center">
                <div class="col-md-6">
                    <h1>Scholar</h1>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Search Scholar">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-md-end align-items-start">
                        <select class="form-select me-3">
                            <option selected>Sort By</option>
                            <option value="1">Name</option>
                            <option value="2">School</option>
                            <option value="3">Admission Date</option>
                        </select>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">School</th>
                        <th scope="col">Contact No.</th>
                        <th scope="col">Admission Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Example School</td>
                        <td>123-456-7890</td>
                        <td>2024-07-17</td>
                        <td class="table-actions vertical-align">
                            <button class="btn btn-link"><i class="lni lni-more-vertical"></i></button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
