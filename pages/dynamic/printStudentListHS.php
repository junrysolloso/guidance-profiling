<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Print Preview</title>
  <?php
    // include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php'; $cat = ""; $hide = "";
    include_once '../../pages/static/config.php';
    define("query", "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`, `ProgramName`, `LevelName`
    FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
    INNER JOIN `educjunc_info` ON educjunc_info.ProgramNo = program_info.ProgramNo
    INNER JOIN `educ_info` ON educ_info.EducNo = educjunc_info.EducNo
    INNER JOIN `level_info` ON level_info.LevelNo = studentjunc_info.LevelNo ");
  ?>
  <style>
    body {
      background: #fff !important;
      font-family: Verdana;
    }
    h3 {
      text-transform: uppercase;
      font-size: 18px;
    }
    h4 {
      font-size: 14px
    }
    h3, h4 {
      font-family: inherit;
    }
    table tr {
      font-size: 16px;
      background: #fff;
    }
    @media print {
      body {
        font-size: 12px;
      }
      table {
        font-size: inherit;
		background: #ff;
      }
      .container {
        margin-left: 0px !important;
        margin-right: 0px !important;
      }
      .container .form-group {
        display: none;
      }
      a#printThis, a#back {
        display: none;
      }
    }
  </style>
</head>
<body>
  <div class="container">

      <div class="form-group" style="margin-top: 30px; width: 350px">
        <div class="input-group">

          <div class="input-group-addon">
            Print by:
          </div>
    			<div class="input-group-addon">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
              <input type="hidden" name="q" value="<?php echo $_GET['q'] ?>">
      				<select name="p" onchange="this.form.submit()">
      					<?php include_once '../../pages/dynamic/course.php' ?>
      				</select>
            </form>
    			</div>
          <div class="input-group-addon">
            Or
          </div>
    			<div class="input-group-addon">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
              <input type="hidden" name="q" value="<?php echo $_GET['q'] ?>">
      				<select name="YearLevel" onchange="this.form.submit()">
      					<?php include_once '../../pages/dynamic/yearLevel.php' ?>
      				</select>
            </form>
    			</div>
            </div>
          </div>
          <a href="#" id="printThis">Print</a>
        </form>
      <center>
        <img src="../../upload/image/logo.png" width="100px" height="100px" alt="Image">
        <h3>Don Jose Ecleo Memorial Foundation College of Science and Technology<h3>
        <h4>Justinina, San Jose Province of Dinagat Islands</h4>
        <b>List of
          <?php
          if (isset($_GET['p'])) {
            echo $_GET['p'];
          }
          ?> Student</b>
      </center>
  	<br>
    <table width="100%" class="table table-bordered table-hover" id="studentList">
      <thead>
        <tr>
          <th style="width:5%">No</th>
          <th style="width:10%">Id number</th>
          <th style="width:35%">Fullname</th>
          <th style="width:15%">Track</th>
          <th style="width:15%">Grade</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $st = $conn->prepare(query." WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` = 0 AND `EducName` = ? ORDER BY `Lastname` ASC");
          if ($st->bind_param("s", $_GET['q'])) {
            if ($st->execute()) {
              $getarr = $st->get_result();
            }
          }

          if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['p'])) {
              $p = htmlspecialchars(trim($_GET['p']));
              $st = $conn->prepare(query." WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` = 0 AND `ProgramName` = ? AND `EducName` = 'HS' ORDER BY `Lastname` ASC");
              if ($st->bind_param("s", $p)) {
                if ($st->execute()) {
                  $getarr = $st->get_result();
                }
              }
            }
            if (isset($_GET['YearLevel'])) {
              $lvl = htmlspecialchars(trim($_GET['YearLevel']));
              $st = $conn->prepare(query." WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` = 0 AND `LevelName` = ? AND `EducName` = 'HS' ORDER BY `Lastname` ASC");
              if ($st->bind_param("s", $lvl)) {
                if ($st->execute()) {
                  $getarr = $st->get_result();
                }
              }
            }
          }
        ?>

        <?php $count = 1; while ($f = $getarr->fetch_array())  { ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $f["IdNumber"]; ?></td>
            <td><?php echo $f["Lastname"].', '.$f['Firstname'].' '.$f["Middlename"]; ?></td>
            <td><?php echo $f["ProgramName"]; ?></td>
            <td><?php echo $f["LevelName"]; ?></td>
          </tr>
        <?php $count++; } ?>
      </tbody>
    </table>
	<a href="index.php" Id="back">Back</a>
  </div>
  <?php include_once '../../pages/static/script.php'; ?>
  <script>
    $(function () {
      $("#printThis").click(function () {
        window.print();
      });
    })
  </script>
</body>
</html>
