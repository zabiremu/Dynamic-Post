<?php
session_start();
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
    <!--  notification section start-->

    <?php
    if (isset($_SESSION["success"])) {

    ?>
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Bootstrap</strong>
                <small>Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $_SESSION["success"] ?>
            </div>
        </div>
    <?php
    }
    ?>



    <!--  notification section end  -->
    <!--  post section start-->
    <section class="card col-lg-6 my-5 mx-auto">
        <div class="card-body">
            <h4 class="card-title">
                Post
            </h4>
            <form action="./controller/pos_type.php" method="POST">
                <input type="text" name="tittles" placeholder="enter your tittle" class="form-control my-3 d-block">
                <span class="text-danger">
                    <?php
                    if (isset($_SESSION['error_tittles'])) {
                        echo $_SESSION['error_tittles'];
                    }
                    ?>
                </span>
                <textarea type="text" name="posts" placeholder="Enter Your Post" class="my-3 form-control d-block"></textarea>
                <span class="text-danger d-block">
                    <?php
                    if (isset($_SESSION['error_posts'])) {
                        echo $_SESSION['error_posts'];
                    }
                    ?>
                </span>
                <button class="btn btn-danger mt-3" name="submit">Post</button>
            </form>
        </div>
    </section>
    <!--  post section end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

<?php
session_unset();
?>