<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Print Preview</title>
  <?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/dynamic/printExamListQuery.php';
    include_once '../../pages/static/function.php';
  ?>
</head>
<body style="background: #fff">
  <div class="container">
    <center>
      <img src="../../upload/image/logo.png" width="150px" height="150px" alt="Image">
      <h3>Don Jose Ecleo Memorial Foundation College of Science and Technology<h3>
      <h4>Justinina, San Jose Province of Dinagat Islands</h4>
      <h4><?php $d = " - "; eValue(returnProgram($q)); eValue($d); eValue(convertYear($y)); ?></h4>
    </center>
    <hr>
    <table width="100%" class="table table-hover table-bordered" id="studentList">
      <thead>
        <tr>
          <th style="width:5%"  rowspan="2">No</th>
          <th style="width:12%" rowspan="2">Id</th>
          <th style="width:33%" rowspan="2">Fullname</th>
          <th style="width:20%" colspan="4">Psychology Exam</th>
          <th style="width:15%" rowspan="2">Entrance Exam</th>
          <th style="width:15%" rowspan="2">Exit Exam</th>
        </tr>
        <tr>
          <th><center>1st</center></th>
          <th><center>2nd</center></th>
          <th><center>3rd</center></th>
          <th><center>4th</center></th>
        </tr>
      </thead>
      <tbody>
        <?php while($r = mysqli_fetch_array($printExamList)){?>
        <tr>
          <td><?php eValue($r['StudentNo']) ?></td>
          <td><?php eValue($r['IdNumber']) ?></td>
          <td><?php eValue($r['Fullname']) ?><span class="pull-right"></span></td>
          <td><center><?php getExam($r['FirstYear']) ?></center></td>
          <td><center><?php getExam($r['SecondYear']) ?></center></td>
          <td><center><?php getExam($r['ThirdYear']) ?></center></td>
          <td><center><?php getExam($r['FourthYear']) ?></center></td>
          <td><center><?php getExam($r['EntranceStatus']) ?></center></td>
          <td><center><?php getExam($r['ExitStatus']) ?></center></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <hr>
  </div>
  <?php include_once '../../pages/static/script.php' ?>
</body>
</html>
