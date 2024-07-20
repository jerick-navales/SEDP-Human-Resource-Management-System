<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:../../index.php");
}


?>

<?php 
$title = 'Home';
$page = 'home';
include('../../Core/Includes/header.php'); 
?>

<div class="container-fluid wrapper">
    <div class="row top-content">
        <div class="col-6 left-con">
            <div class="welcome">
                <h1 class="fw-bold">Good Day Cia!</h1>
                <p class="text-secondary">welcome back</p>
            </div>
            <div class="line-graph">
                <h1 style="text-align: center;"> Employee Page</h1>
            </div>
        </div>

        <div class="col-6 right-con">
            <div class="admin-container">
                <img src="../../Public/Assets/Images/profile.png" alt="Profile Image" class="img-fluid rounded-circle mb-3">
                <div class="admin-name">
                    <h1 class="fw-bold">System Administrator</h1>
                    <div class="d-flex align-items-center date-post">
                        <img src="../../Public/Assets/Images/profile.png" alt="Profile Image" class="img-fluid rounded-circle" width="30" height="30">
                        <p class="text-secondary mx-2 mb-0">1 month ago</p>
                        <button class="btn btn-link p-0"><a href="#" class="post-link">To Everyone</a></button>
                    </div>
                </div>
            </div>
            <div class="announcement">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptatibus consequatur architecto debitis quibusdam ex eveniet, iure sequi nobis, veniam veritatis? Aut nesciunt quo soluta magnam inventore! Magni, laboriosam inventore!</p>
            </div>
        </div>
    </div>

    <div class="bot-content">
        diko aram kung nanu nakabutang dd
    </div>
</div>

<?php include('../../Core/Includes/footer.php'); ?>


