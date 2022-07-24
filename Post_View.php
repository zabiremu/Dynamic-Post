<?php
session_start();
include "./inc/env.php";
$id = $_GET['id'];
$select = "SELECT tittle, details, date FROM post_table WHERE id =$id";
$query = mysqli_query($conn,$select);
$fetch = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <!--  menu section start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Facebook</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Post Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./allPost.php">View Page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--  menu section end  -->
    <!--  post view section start-->
    <div class="card col-8 mx-auto mt-5">
        <p class="card-header">
            Post View 
        </p>
        <div class="card-body">
            <h4><?=$fetch['tittle']?></h4>
            <p><?=$fetch['details']?></p>
            <p><?=$fetch['date']?></p>
        </div>
    </div>
    <!--  post view section end  -->
    <!--  post section end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

<?php
session_unset();
?>