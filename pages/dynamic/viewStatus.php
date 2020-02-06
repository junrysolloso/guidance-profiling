
<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | View student status</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/dynamic/statusQuery.php';
    include_once '../../pages/static/function.php';
    $rQ = mysqli_fetch_array($individualStatus);
    extract($rQ);
    $pName = returnProgram($ProgramNo); 
  ?>
</head>
<body style="background: #222D32">
  <div class="wrapper" >
    <section>
      <div class="container" style="padding-top: 60px; padding-bottom:40px">
        <div class="row">
          <div class="col-sm-4"></div>
            <div class="col-sm-4">
              <ul class="list-group">
                <li class="list-group-item"><h3 class="profile-username text-center">Status</h3></li>
                <li class="list-group-item">
                  <center>
                    <img src="../../upload/profile/<?php echo $Image ?>" width="150px" height="150px" class="img-bordered img-circle" alt="Image">
                  </center>
                  <a href="viewProfile.php?q=<?php echo $q ?>"><h3 class="profile-username text-center"><?php echo $Fullname ?></h3></a>
                  <p class="text-muted text-center"><?php echo $pName ?> - <?php echo convertYear($YearLevel);?></p>
                </li>
                <li class="list-group-item">
                  <b>Active</b>
                  <?php
                    if($Active == 1) {
                      echo '<i class="fa fa-check-square-o pull-right"></i>';
                    } else {
                      echo '<input type="checkbox" name="Active" class="pull-right" id="'.$StudentNo.'">';
                    }
                  ?>
                </li>
                <li class="list-group-item">
                  <b>Graduated</b>
                  <?php
                    if($Graduated == 1) {
                      echo '<i class="fa fa-check-square-o pull-right"></i>';
                    } else {
                      echo '<input type="checkbox" name="Graduated" class="pull-right" id="'.$StudentNo.'">';
                    }
                  ?>
                </li>
                <li class="list-group-item">
                  <b>Dropout</b>
                  <a href="#" role="button" class="pull-right" id="DropOutLink">
                    <i id="aRRDrop" class="fa fa-chevron-right"></i>
                    <i id="aRLDrop" class="fa fa-chevron-left hide"></i>
                  </a>
                <li class="list-group-item">
                  <b>Expelled</b>
                  <a href="#" role="button" class="pull-right" id="ExpelledLink">
                    <i id="aRRExp" class="fa fa-chevron-right"></i>
                    <i id="aRLExp" class="fa fa-chevron-left hide"></i>
                  </a>
                </li>
                <li class="list-group-item hide" id="DropOut">
                  <center><big>Dropout Reason</big></center><br>
                  <?php
                    if($DropStat == 0){
                      echo '<center>This Student is did not drop.</center>';
                    } else {
                      echo '<div class="panel panel-default"><div class="panel-body">';
                      echo '<b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>';
                      echo $DropOutDate;
                      echo '<br>';
                      echo '<b>Description : </b>';
                      echo '<br>';
                      echo $DropOutDesc;
                      echo '<hr>';
                      echo '<a href="dropExpDesc.php?q='.$StudentNo.'&&c=DropOutDesc" class="btn btn-block btn-flat btn-default"><i class="fa fa-print"></i> Print</a>';
                      echo '</div></div>';
                    }
                  ?>
                </li>
                <li class="list-group-item hide" id="Expelled">
                  <center><big>Expelled Reason</big></center><br>
                  <?php
                    if($ExpelledStat == 0){
                      echo '<center>This Student is not expelled.</center>';
                    } else {
                      echo '<div class="panel panel-default"><div class="panel-body">';
                      echo '<b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>';
                      echo $ExpelledDate;
                      echo '<br>';
                      echo '<b>Description : </b>';
                      echo '<br>';
                      echo $ExpelledDesc;
                      echo '<hr>';
                      echo '<a href="dropExpDesc.php?q='.$StudentNo.'&&c=ExpelledDesc" class="btn btn-block btn-flat btn-default"><i class="fa fa-print"></i> Print</a>';
                      echo '</div></div>';
                    }
                  ?>
                </li>
                <li class="list-group-item"></li>
              </ul>
            </div>
          <div class="col-sm-4"></div>
        </div>
      </div>
    </section>
  </div>
  <?php include '../../pages/static/script.php' ?>
  <script src="../../pages/interactive/statusClick.js"></script>
</body>
</html>
