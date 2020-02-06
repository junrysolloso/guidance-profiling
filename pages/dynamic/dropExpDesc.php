<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Dropout/Expelled Description section</title>
  <?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/dynamic/descQuery.php';
    include_once '../../pages/static/function.php';
    $rQ = mysqli_fetch_array($individualDesc);
    extract($rQ);
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php include_once '../../pages/static/banner.php' ?>
  <div class="wrapper">
    <?php
      include_once '../../pages/static/header.php';
      include_once '../../pages/static/navigation.php';
    ?>
    <div class="content-wrapper">
      <section class="content-header">
        <div class="row">
          <div class="col-sm-8">
            <h4>Preview</h4>
          </div>
          <div class="col-sm-4">
            <div class="pull-right ">
              <!-- Header content -->
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <br>
            <img src="../../upload/profile/<?php echo $Image ?>" width="150px" height="150px" class="img-bordered img-circle center-block" alt="Image">
            <h3 class="profile-username text-center"><?php echo $Lastname.', '.$Firstname.' '.$Middlename ?></h3>
            <p class="text-center"><?php echo $LevelName ?> - <?php echo $ProgramName ?></p>
            <hr>
            <h4><?php if($_GET['c'] == 'Drop'){echo 'Dropout Details';}else{echo 'Transfered Out Details';}?></h4>
            <hr>
            <?php
              if($_GET['c'] == 'Drop'){
                echo '<b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>';
                echo $DropOutDate;
                echo '<br>';
                echo '<b>Description : </b>';
                echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo $DropOutDesc;
              } else {
                echo '<b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>';
                echo $ExpelledDate;
                echo '<br>';
                echo '<b>Description : </b>';
                echo '<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo $ExpelledDesc;
              }
            ?>
            <hr><br><br><br>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </section>
    </div>
    <?php
      include_once '../../pages/static/footer.php';
    ?>
  </div>
  <?php include_once '../../pages/static/script.php' ?>
  <script src="../../pages/interactive/tableProperties.js"></script>
</body>
</html>
