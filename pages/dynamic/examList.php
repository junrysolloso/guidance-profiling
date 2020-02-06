<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | List of students examination</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
    include_once '../../pages/static/config.php';
    $q = htmlspecialchars(trim($_GET['q']));
    $sQl = "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`, `Image`, `EntranceNo`, `ExitNo`, `PsychologyNo`, `ActiveNo`
    FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
    INNER JOIN `educjunc_info` ON educjunc_info.ProgramNo = program_info.ProgramNo
    INNER JOIN `educ_info` ON educ_info.EducNo = educjunc_info.EducNo
    WHERE `DropNo` = 0 AND `ExpelledNo` = 0 AND `GraduateNo` = 0 AND `EducName` = '$q' ORDER BY `Lastname` ASC";
    $examList = mysqli_query($conn, $sQl);
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
            <h4 class="title">Student Examination</h4>
          </div>
        </div>
      </section>
      <section class="content">
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
              while($r = mysqli_fetch_array($examList)){?>
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
                      echo '<input type="checkbox" value="'.$r["StudentNo"].'" class="OlsatOne">';
                    } else {
                      echo '<i class="fa fa-check-square-o"></i>';
                    }
                  } else {
                    echo '<input type="checkbox" disabled>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["PsychologyNo"] > 0) {
                    if ($f[0] > 0) {
                      if ($f[1] == 0) {
                        echo '<input type="checkbox" value="'.$r["StudentNo"].'" class="OlsatTwo">';
                      } else {
                        echo '<i class="fa fa-check-square-o"></i>';
                      }
                    } else {
                      echo '<input type="checkbox" disabled>';
                    }
                  } else {
                    echo '<input type="checkbox" disabled>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["PsychologyNo"] > 0) {
                    if ($f[1] > 0) {
                      if ($f[2] == 0) {
                        echo '<input type="checkbox" value="'.$r["StudentNo"].'" class="OlsatThree">';
                      } else {
                        echo '<i class="fa fa-check-square-o"></i>';
                      }
                    } else {
                      echo '<input type="checkbox" disabled>';
                    }
                  } else {
                    echo '<input type="checkbox" disabled>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["EntranceNo"] == 0) {
                    echo '<input type="checkbox" class="EntranceExam" value="'.$r["StudentNo"].'" id="entrance">';
                  } else {
                    echo '<i class="fa fa-check-square-o"></i>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["ExitNo"] == 0) {
                    if ($f[2] > 0) {
                      echo '<input type="checkbox" value="'.$r["StudentNo"].'" class="ExitNo">';
                    } else {
                      echo '<input type="checkbox" disabled>';
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
      </section>
    </div>
    <?php include '../../pages/static/footer.php' ?>
  </div>
  <?php include '../../pages/static/script.php' ?>
  <script src="../../pages/interactive/tableProperties.js"></script>
  <!-- <script src="../../pages/interactive/examClick.js"></script> -->
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      if (isset($_GET['entrance'])) {
        $id = $_GET['id'];
        $code = $_GET['code'];
        $st = $conn->prepare("INSERT INTO `reciept_info` (`RecieptCode`) VALUES (?)");
        if ($st->bind_param("s", $code)) {
          if ($st->execute()) {
            $st = $conn->prepare("INSERT INTO `entrance_info` (`EntranceStatus`) VALUES (1)");
            if ($st->execute()) {
              $st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `reciept_info` INNER JOIN `entrance_info`
              SET studentjunc_info.RecieptNo = (SELECT MAX(RecieptNo) FROM `reciept_info`),
              studentjunc_info.EntranceNo = (SELECT MAX(EntranceNo) FROM `entrance_info`)
              WHERE studentjunc_info.StudentNo = ?");
              if ($st->bind_param("i", $id)) {
                $st->execute();
              }
            }
          }
        }
      } elseif (isset($_GET['OlsatOne'])) {
        $id = $_GET['id'];
        $st = $conn->prepare("INSERT INTO `psychology_info` (`OlsatOne`) VALUES(1)");
        if ($st->execute()) {
          $st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `psychology_info`
          SET studentjunc_info.PsychologyNo = (SELECT MAX(PsychologyNo) FROM `psychology_info`) WHERE `StudentNo` = ?");
          if ($st->bind_param("i", $id)) {
            $st->execute();
          }
        }
      } elseif (isset($_GET['OlsatTwo'])) {
        $id = $_GET['id'];
        $st = $conn->prepare("UPDATE `psychology_info` INNER JOIN studentjunc_info
        ON psychology_info.PsychologyNo = studentjunc_info.PsychologyNo
        SET `OlsatTwo` = 1 WHERE studentjunc_info.StudentNo = ?");
        if ($st->bind_param("i", $id)) {
          $st->execute();
        }
      } elseif (isset($_GET['OlsatThree'])) {
        $id = $_GET['id'];
        $st = $conn->prepare("UPDATE `psychology_info` INNER JOIN studentjunc_info
        ON psychology_info.PsychologyNo = studentjunc_info.PsychologyNo
        SET `OlsatThree` = 1 WHERE studentjunc_info.StudentNo = ?");
        if ($st->bind_param("i", $id)) {
          $st->execute();
        }
      } elseif (isset($_GET['ExitNo'])) {
        $id = $_GET['id'];
        $st = $conn->prepare("INSERT INTO `exit_info` (`ExitStatus`) VALUES(1)");
        if ($st->execute()) {
          $st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `exit_info`
          SET studentjunc_info.ExitNo = (SELECT MAX(ExitNo) FROM `exit_info`) WHERE `StudentNo` = ?");
          if ($st->bind_param("i", $id)) {
            $st->execute();
          }
        }
      }
    }
  ?>
  <script>
    $(function () {
      $(".EntranceExam").click(function () {
        var id = $(this).val();
        var p = prompt("Enter Reciept Number.");
        if (p !== null  && p !== "") {
          var q = "?id=" + id + "& code=" + p + "& entrance=entrance";
          ajaxRequest(q);
        } else {
          alert("Fields cannot be empty.");
        }
      })
      $(".ExitNo").click(function () {
        var id = $(this).val();
        var q = "?id=" + id + "& ExitNo=ExitNo";
        ajaxRequest(q);
      });
      $(".OlsatOne").click(function () {
        var id = $(this).val();
        var q = "?id=" + id + "& OlsatOne=OlsatOne";
        ajaxRequest(q);
      });
      $(".OlsatTwo").click(function () {
        var id = $(this).val();
        var q = "?id=" + id + "& OlsatTwo=OlsatTwo";
        ajaxRequest(q);
      });
      $(".OlsatThree").click(function () {
        var id = $(this).val();
        var q = "?id=" + id + "& OlsatThree=OlsatThree";
        ajaxRequest(q);
      });
      function ajaxRequest(q) {
        var p = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>";
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function () {
          if (ajax.readyState == 4 && ajax.status == 200) {
            alert("Done.");
            window.location = p + "?q=<?php echo $q; ?>";
          }
        }
        ajax.open('GET', p + q, true);
        ajax.send(null);
      }
      document.getElementsByTagName("li")[11].classList.add("active");
      if ("<?php echo $_GET['q']; ?>" == "HS") {
        document.getElementsByTagName("li")[12].classList.add("active");
      } else {
        document.getElementsByTagName("li")[13].classList.add("active");
      }
    })
  </script>
</body>
</html>
