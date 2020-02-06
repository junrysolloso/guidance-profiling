<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | List of students</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/config.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['promote'])) {
        $id = $_POST['id'];
        $yearLvl = $_POST['YearLevel'];
		$grade = $_POST['grade'];
		$shiftHS = $_POST['shiftHS'];

		if ($grade == "Grade 10" || $grade == "Grade 11" || $grade == "Grade 12") {
			$st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `program_info`
			SET studentjunc_info.ProgramNo = (SELECT `ProgramNo` FROM `program_info` WHERE `ProgramName` = ?), studentjunc_info.LevelNo = (SELECT `LevelNo` FROM `level_info` WHERE `LevelName` = ?) WHERE `StudentNo` = ?");
			if ($st->bind_param("ssi", $shiftHS, $yearLvl, $id)) {
				if ($st->execute()) {
					echo '<script>alert("Done.");window.location="../../pages/dynamic/studentList.php?q='.$_POST["cat"].'"</script>';
				}
			}
		} else {
			$st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `level_info`
			SET studentjunc_info.LevelNo = (SELECT `LevelNo` FROM `level_info` WHERE `LevelName` = ?) WHERE `StudentNo` = ?");
			if ($st->bind_param("si", $yearLvl, $id)) {
				if ($st->execute()) {
					echo '<script>alert("Done.");window.location="../../pages/dynamic/studentList.php?q='.$_POST["cat"].'"</script>';
				}
			}
		}

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
       <h4>Promote Student</h4>
      </section>
      <section class="content">
        <div class="box box-info">
          <div class="box-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <div class="input-group">
                <input type="hidden" name="id" value="<?php echo $_GET['q']; ?>">
                <input type="hidden" name="cat" value="<?php echo $_GET['c']; ?>">
				<input type="hidden" name="grade" value="<?php echo $_GET['y']; ?>">
                <?php if ($_GET['y'] == "Grade 10" || $_GET['y'] == "Grade 11" || $_GET['y'] == "Grade 12"): ?>
                  <select class="form-control" name="shiftHS">
                    <?php
                      $st = $conn->prepare("SELECT program_info.ProgramNo, `ProgramName` FROM `program_info` INNER JOIN `educjunc_info`
                      ON program_info.ProgramNo = educjunc_info.ProgramNo INNER JOIN `educ_info`
                      ON educ_info.EducNo = educjunc_info.EducNo WHERE `EducName` = 'HS' AND program_info.ProgramNo <> 18");
                      if ($st->execute()) {
                        $r = $st->get_result();
                        while($c = $r->fetch_array()) {
                        echo '<option value="'.$c['ProgramName'].'">'.$c['ProgramName'].'</option>';
                        }
                      }
                    ?>
                  </select>
                <?php endif; ?>
                <span class="input-group-addon">
                  Promote <b><?php echo $_GET['n'] ?></b> from <b><?php echo $_GET['y'] ?></b> to
                </span>
                <select class="form-control" name="YearLevel">
                <?php
                  $dis ="";
                  if($_GET['c'] == 'CL'){
                    if($_GET['y'] == "1st Year"){
                      echo '<option value="2nd Year">2nd Year</option>';
                    } elseif($_GET['y'] == "2nd Year"){
                      echo '<option value="3rd Year">3rd Year</option>';
                    } elseif($_GET['y'] == "3rd Year"){
                      echo '<option value="4th Year">4th Year</option>';
                    } else {
                      echo '<option value="0">No option available</option>';
                      $dis = "disabled";
                    }
                  } else {
                    if($_GET['y'] == "Grade 7"){
                      echo '<option value="Grade 8">Grade 8</option>';
                    } elseif($_GET['y'] == "Grade 8"){
                      echo '<option value="Grade 9">Grade 9</option>';
					          } elseif($_GET['y'] == "Grade 9"){
					            echo '<option value="Grade 10">Grade 10</option>';
                    } elseif($_GET['y'] == "Grade 10"){
                      echo '<option value="Grade 11">Grade 11</option>';
                    } elseif($_GET['y'] == "Grade 11"){
                      echo '<option value="Grade 12">Grade 12</option>';
                    } else {
                      echo '<option>No option available</option>';
                      $dis = "disabled";
                    }
                  }
                ?>
              </select>
              <div class="input-group-btn">
                <button type="submit" name="promote" value="send" class="btn btn-default btm-flat" <?php echo $dis; ?>><i class="fa fa-save"></i> Continue</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <?php
      include '../../pages/static/footer.php';
    ?>
  </div>
  <?php include '../../pages/static/script.php' ?>
  <script>
    $(function () {
      document.getElementsByTagName("li")[19].classList.add("active"); // CL List of students
      document.getElementsByTagName("li")[20].classList.add("active");
    })
  </script>
</body>
</html>
