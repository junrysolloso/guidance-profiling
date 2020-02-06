
<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | View student examination</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/dynamic/examQuery.php';
    include_once '../../pages/static/function.php';
    $rQ = mysqli_fetch_array($individualExam);
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
                <li class="list-group-item"><h3 class="profile-username text-center">Exam Status</h3></li>
                <li class="list-group-item">
                  <center>
                    <img src="../../upload/profile/<?php eValue($Image) ?>" width="150px" height="150px" class="img-bordered img-circle" alt="Image">
                  </center>
                  <a href="viewProfile.php?q=<?php eValue($q) ?>"><h3 class="profile-username text-center"><?php eValue($Fullname) ?></h3></a>
                  <p class="text-muted text-center"><?php eValue($pName) ?> - <?php eValue(convertYear($YearLevel)) ?></p>
                </li>
                <li class="list-group-item"><center><big>Psychology Exam</big></center></i>
                <li class="list-group-item">
                  <b>First Year</b>
                  <?php
                    $Fcl = $FirstYear;
                    $Tcl = 'FirstYear';
                    $sn  = $StudentNo;
                    $tb  = 'psychology_exam';
                    checkExam($Fcl, $sn, $Tcl, $tb);
                  ?>
                </li>
                <li class="list-group-item">
                  <b>Second Year</b>
                  <?php
                    $Fcl = $SecondYear;
                    $Tcl = 'SecondYear';
                    $sn  = $StudentNo;
                    $tb  = 'psychology_exam';
                    checkExam($Fcl, $sn, $Tcl, $tb);
                  ?>
                </li>
                <li class="list-group-item">
                  <b>Third Year</b>
                  <?php
                    $Fcl = $ThirdYear;
                    $Tcl = 'ThirdYear';
                    $sn  = $StudentNo;
                    $tb  = 'psychology_exam';
                    checkExam($Fcl, $sn, $Tcl, $tb);
                  ?>
                </li>
                <li class="list-group-item">
                  <b>Fourth Year</b>
                  <?php
                    $Fcl = $FourthYear;
                    $Tcl = 'FourthYear';
                    $sn  = $StudentNo;
                    $tb  = 'psychology_exam';
                    checkExam($Fcl, $sn, $Tcl, $tb);
                  ?>
                </li>
                <li class="list-group-item"><center><big>Entrance & Exit Exam</big></center></i>
                <li class="list-group-item">
                  <b>Entrance Exam</b>
                  <?php
                    $Fcl = $EntranceStatus;
                    $Tcl = 'EntranceStatus';
                    $sn  = $StudentNo;
                    $tb  = 'entrance_exam';
                    checkExam($Fcl, $sn, $Tcl, $tb);
                  ?>
                </li>
                <li class="list-group-item">
                  <b>Exit Exam</b>
                  <?php
                  $Fcl = $ExitStatus;
                  $Tcl = 'ExitStatus';
                  $sn  = $StudentNo;
                  $tb  = 'exit_exam';
                  checkExam($Fcl, $sn, $Tcl, $tb);
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
  <script src="../../pages/interactive/examClick.js"></script>
</body>
</html>
