<?php
include "../inc/env.php";
session_start();
if(isset($_POST['update'])){
    $tittle = $_POST['tittle'];
    $details = $_POST['detail'];
    $id = $_POST['id'];
    $update = "UPDATE post_table SET tittle='$tittle',details='$details' WHERE id = $id";  
    $query = mysqli_query($conn,$update); 
    header("Location: ../allPost.php");
    

}