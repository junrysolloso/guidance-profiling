<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Print Preview</title>
  <?php
    // include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/config.php';
    define("query", "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`,
    `Lastname`,`Image`, `EmailAdd`, `Address`, `PhoneNo`, `LevelName`, `ProgramName`, ExpelledDate
    FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
    INNER JOIN `educjunc_info` ON educjunc_info.ProgramNo = program_info.ProgramNo
    INNER JOIN `educ_info` ON educ_info.EducNo = educjunc_info.EducNo
    INNER JOIN `level_info` ON level_info.LevelNo = studentjunc_info.LevelNo
    INNER JOIN `expelled_info` ON expelled_info.ExpelledNo = studentjunc_info.ExpelledNo ");
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
		background: #fff;
      }
      .container {
        margin-left: 30px !important;
        margin-right: 30px !important;
      }
      .container .form-group {
        display: none;
      }
      a#printThis {
        display: none;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
      <div class="form-group" style="margin-top: 30px; width: 300px">
        <div class="input-group">
          <div class="input-group-addon">
            Filter by:
          </div>
          <select class="form-control" name="q" onchange="this.form.submit()">
            <option>---- Select ----</option>
            <option value="HS">Junior/Senior High</option>
            <option value="CL">College</option>
          </select>
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
        if (isset($_GET['q'])) {
          if ($_GET['q'] == "CL") {
            echo "college";
          } else {
            echo "Junior/Senior High";
          }
        }
        ?> transfered students</b>
    </center>
    <hr>
    <table width="100%" class="table table-bordered table-hover" id="studentList">
      <thead>
        <tr>
          <th style="width:10%">No</th>
          <th style="width:15%">Id number</th>
          <th style="width:30%">Fullname</th>
          <th style="width:15%">Program</th>
          <th style="width:15%">Year Level</th>
          <th style="width:15%">Date Expelled</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['q'])) {
              $c = htmlspecialchars(trim($_GET['q']));
              $st = $conn->prepare(query." WHERE `DropNo` = 0 AND expelled_info.ExpelledNo > 0 AND `GraduateNo` = 0 AND `EducName` = ? ORDER BY `Lastname` ASC");
              if ($st->bind_param("s", $c)) {
                if ($st->execute()) {
                  $r = $st->get_result();
                }
              }
            }
          } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['q'])) {
              $c = htmlspecialchars(trim($_POST['q']));
              $st = $conn->prepare(query." WHERE `DropNo` = 0 AND expelled_info.ExpelledNo > 0 AND `GraduateNo` = 0 AND `EducName` = ? ORDER BY `Lastname` ASC");
              if ($st->bind_param("s", $c)) {
                if ($st->execute()) {
                  $r = $st->get_result();
                }
              }
            }
          }
        ?>
        <?php $count = 1; while ($f = $r->fetch_array())  { ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $f["IdNumber"]; ?></td>
            <td><?php echo $f["Lastname"].', '.$f['Firstname'].' '.$f["Middlename"]; ?></td>
            <td><?php echo $f["ProgramName"]; ?></td>
            <td><?php echo $f["LevelName"]; ?></td>
            <td><?php echo $f["ExpelledDate"]; ?></td>
          </tr>
        <?php $count++; } ?>
      </tbody>
    </table>
    <hr>
	<a href="index.php">Back</a>
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
