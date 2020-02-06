<?php
    $conn = mysqli_connect("localhost", "root", "");
    if (!$conn){
      die (mysqli_error());
    } else {
      mysqli_select_db($conn, "guidanceprofiling");
    }
?>
