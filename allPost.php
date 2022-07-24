<?php
session_start();
include "./inc/env.php";
$select = "SELECT * FROM post_table";
$query = mysqli_query($conn, $select);
$fetch = mysqli_fetch_all($query, 1);
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
    <div class="Card col-10 mx-auto pt-5">
        <p class="card-header">
            All Post....
        </p>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>#</td>
                    <td>Tittle</td>
                    <td>Details</td>
                    <td>Date</td>
                </tr>
                <?php
                foreach ($fetch as $key => $data) {
                ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $data['tittle'] ?></td>
                        <td>
                            <?php
                            
                            if(strlen($data["details"]) > 50){
                                echo substr($data["details"],0,50) . "...";
                            }else{
                                echo $data["details"];
                            }
                            ?>
                        </td>
                        <td><?= $data['date'] ?></td>
                        <td>
                            <a href="./Post_View.php?id=<?=$data['id']?>" class="btn btn-primary btn-sm">Show</a>
                        </td>
                        <td>
                            <a href="./Edit_Post.php?id=<?=$data['id']?>" class="btn btn-info btn-sm">Edit</a>
                        </td>
                        <td>
                            <a href="./controller/delete.php?id=<?=$data['id']?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <!--  post section end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

<?php
session_unset();
?>