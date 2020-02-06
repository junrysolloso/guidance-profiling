
<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Home</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/dynamic/programQuery.php';
    include_once '../../pages/static/config.php';
    define("query", "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`, `Image`, `EntranceNo`, `ExitNo`, `PsychologyNo`, `ActiveNo`
    FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
    INNER JOIN `educjunc_info` ON educjunc_info.ProgramNo = program_info.ProgramNo
    INNER JOIN `educ_info` ON educ_info.EducNo = educjunc_info.EducNo
    INNER JOIN `level_info` ON level_info.LevelNo = studentjunc_info.LevelNo ");
    if(isset($_GET['c'])) {
      $q = htmlspecialchars(trim($_GET['c']));
      $sQl = query."WHERE `DropNo` = 0 AND `ExpelledNo` = 0 AND `ProgramName` = '$q'";
      $byProgram = mysqli_query($conn, $sQl);
    }
    if(isset($_POST['YearLevel'])) {
      $yearLevel = htmlspecialchars(trim($_POST['YearLevel']));
      $q = htmlspecialchars(trim($_POST['q']));
      if($yearLevel == 'All') {
        $sQl = query."WHERE `DropNo` = 0 AND `ExpelledNo` = 0 AND `ProgramName` = '$q'";
        $byProgram = mysqli_query($conn, $sQl);
      } else {
        $sQl = query."WHERE `DropNo` = 0 AND `ExpelledNo` = 0 AND `LevelName` = '$yearLevel' AND `ProgramName` = '$q'";
        $byProgram = mysqli_query($conn, $sQl);
      }
    }
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
        <h4>Reports filter by program</h4>
      </section>
      <section class="content">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?q=<?php echo $_GET['q']; ?>&c=<?php echo $_GET['c']; ?>" method="post">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">
                <span>Filter by </span>
              </div>
              <input type="hidden" name="q" value="<?php echo htmlspecialchars(trim($_GET['c'])); ?>">
              <select class="form-control input-sm" name="YearLevel" onchange="this.form.submit()">
                <?php include_once '../../pages/dynamic/filterYear.php' ?>
              </select>
            </div>
          </div>
        </form>
        <table width="100%" class="table table-condensed" id="studentList">
					<thead>
            <tr>
              <th class="text-center" style="width:5%">No</th>
              <th style="width:12%">Id Number</th>
              <th style="width:33%">Fullname</th>
              <th class="text-center" style="width:20%" colspan="3">Psychological Exam</th>
              <th class="text-center" style="width:15%">Entrance Exam</th>
              <th class="text-center" style="width:15%">Exit Exam</th>
            </tr>
          </thead>
					<tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><center>OLSAT 1</center></td>
              <td><center>OLSAT 2</center></td>
              <td><center>OLSAT 3</center></td>
              <td></td>
              <td></td>
            </tr>
            <?php
              $count = 1;
              while($r = mysqli_fetch_array($byProgram)){?>
						<tr>
              <td class="text-center"><?php echo $count; ?></td>
							<td><?php echo $r['IdNumber']; ?></td>
              <td>
                <img src="../../upload/profile/<?php echo $r['Image']; ?>" width="55px" height="55x" class="img-bordered img-circle hide" alt="Image">
                <?php echo $r["Lastname"].', '.$r['Firstname'].' '.$r["Middlename"] ?><span class="pull-right"></span>
              </td>
              <td class="text-center">
                <?php
                $st = $conn->prepare("SELECT `OlsatOne`, `OlsatTwo`, `OlsatThree` FROM `psychology_info` INNER JOIN `studentjunc_info`
                  ON psychology_info.PsychologyNo = studentjunc_info.PsychologyNo WHERE studentjunc_info.StudentNo = ?");
                  if ($st->bind_param("i", $r["StudentNo"])) {
                    if ($st->execute()) {
                      $s = $st->get_result();
                      $f = $s->fetch_array();
                    }
                  }
                  if ($r["ActiveNo"] > 0) {
                    if ($f[0] == 0) {
                      echo '<i class="fa fa-times"></i>';
                    } else {
                      echo '<i class="fa fa-check-square-o"></i>';
                    }
                  } else {
                    echo '<i class="fa fa-times"></i>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["PsychologyNo"] > 0) {
                    if ($f[0] > 0) {
                      if ($f[1] == 0) {
                        echo '<i class="fa fa-times"></i>';
                      } else {
                        echo '<i class="fa fa-check-square-o"></i>';
                      }
                    } else {
                      echo '<i class="fa fa-times"></i>';
                    }
                  } else {
                    echo '<i class="fa fa-times"></i>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["PsychologyNo"] > 0) {
                    if ($f[1] > 0) {
                      if ($f[2] == 0) {
                        echo '<i class="fa fa-times"></i>';
                      } else {
                        echo '<i class="fa fa-check-square-o"></i>';
                      }
                    } else {
                      echo '<i class="fa fa-times"></i>';
                    }
                  } else {
                    echo '<i class="fa fa-times"></i>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["EntranceNo"] == 0) {
                    echo '<i class="fa fa-times"></i>';
                  } else {
                    echo '<i class="fa fa-check-square-o"></i>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["ExitNo"] == 0) {
                    if ($f[2] > 0) {
                      echo '<i class="fa fa-times"></i>';
                    } else {
                      echo '<i class="fa fa-times"></i>';
                    }
                  } else {
                    echo '<i class="fa fa-check-square-o"></i>';
                  }
                ?>
              </td>
						</tr>
            <?php $count++; } ?>
					</tbody>
				</table>
        <?php
          if(isset($_POST['yearLevel'])) {
            echo '<a href="printExamList.php?q='.$q.'&&y='.$yearLevel.'" class="btn btn-default"><i class="fa fa-print"></i> Print</a>';
          }
        ?>
      </section>
    </div>
    <?php include '../../pages/static/footer.php' ?>
  </div>
  <?php include '../../pages/static/script.php' ?>
  <script src="../../pages/interactive/tableProperties.js"></script>
  <script>
    $(document).ready(function () {
      document.getElementsByTagName("li")[5].classList.add("active");
    })
  </script>
</body>
</html>
