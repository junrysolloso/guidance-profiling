<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Print Preview</title>
  <?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/dynamic/descQuery.php';
    include_once '../../pages/static/function.php';
    $rQ = mysqli_fetch_array($individualDesc);
    extract($rQ);
    $pName = returnProgram($ProgramNo);
  ?>
</head>
<body style="background: #fff" onload="window.print()">
  <div class="container-fluid">
    <hr>
    <center>
    <h3>Dropout Information<h3>
    <hr>
      <img src="../../upload/profile/<?php echo $Image ?>" width="150px" height="150px" class="img-bordered img-circle" alt="Image">
    </center>
    <h3 class="profile-username text-center"><?php echo $Fullname ?></h3>
    <p class="text-muted text-center"><?php echo $pName ?> - <?php echo convertYear($YearLevel);?></p>
    <hr>
    <h3><?php if($c == 'DropOutDesc'){echo 'Dropout Details';}else{echo 'Expelled Details';}?></h3>
    <hr>
    <?php
      if($c == 'DropOutDesc'){
        echo '<b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>';
        echo $DropOutDate;
        echo '<br>';
        echo '<b>Description : </b>';
        echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo $DropOutDesc;
      } else {
        echo '<b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>';
        echo $ExpelledDate;
        echo '<br>';
        echo '<b>Description : </b>';
        echo '<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo $ExpelledDesc;
      }
    ?>
    <hr>
  </div>
  <?php include_once '../../pages/static/script.php' ?>
</body>
</html>
