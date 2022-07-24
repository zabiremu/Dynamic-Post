<?php

include "../inc/env.php";
$id = $_GET['id'];
$delete = "DELETE FROM post_table WHERE id = $id";
$query = mysqli_query($conn,$delete);
header("location: ../allPost.php")

?>