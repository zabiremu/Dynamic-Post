<?php
include "../inc/env.php";
session_start();
if (empty($_POST["submit"])) {
    $tittle = $_POST["tittles"];
    $details = $_POST["posts"];
    $date = date("d/m/y");
    if (empty($tittle)) {
        $_SESSION["error_tittles"] = "Please enter the title";
        header("Location: ../index.php");
    };
    if (empty($details)) {
        $_SESSION["error_posts"] = "Please enter the Post";
        header("Location: ../index.php");
    }
    else{
        $_SESSION["success"] = "Your post has been successfully uploaded";
        header("Location: ../index.php");
        header("location: ../index.php");
        $select = "INSERT INTO post_table(tittle, details, date) VALUES ('$tittle','$details','$date')";
        $query = mysqli_query($conn, $select);
    }
}
