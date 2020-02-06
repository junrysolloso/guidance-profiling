  <!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | List of student status</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
    include_once '../../pages/static/config.php';
    $q = htmlspecialchars(trim($_GET['q']));
    $sQl = "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`, `Image`, `ActiveNo`, `GraduateNo`, `DropNo`, `ExpelledNo`, `EntranceNo`, `ExitNo`
    FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
    INNER JOIN `educjunc_info` ON educjunc_info.ProgramNo = program_info.ProgramNo
    INNER JOIN `educ_info` ON educ_info.EducNo = educjunc_info.EducNo
    WHERE `DropNo` = 0 AND `ExpelledNo` = 0 AND `GraduateNo` = 0 AND `EducName` = '$q' ORDER BY `Lastname` ASC";
    $statusList = mysqli_query($conn, $sQl);
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
            <h4 class="title">Student Status</h4>
          </div>
        </div>
      </section>
      <section class="content">
				<table width="100%" class="table table-condensed" id="studentList">
					<thead>
            <tr>
              <th class="text-center" style="width:5%">No</th>
              <th style="width:12%">Id</th>
              <th style="width:43%">Fullname</th>
              <th class="text-center" style="width:10%">Active</th>
              <th class="text-center" style="width:10%">Graduated</th>
              <th class="text-center" style="width:10%">Dropout</th>
              <th class="text-center" style="width:10%">Transfered Out</th>
            </tr>
          </thead>
					<tbody>
            <?php
              $count = 1;
              while($r = mysqli_fetch_array($statusList)){?>
						<tr>
              <td class="text-center"><?php echo $count; ?></td>
							<td><?php echo $r['IdNumber'] ?></td>
              <td>
                <?php echo $r["Lastname"].', '.$r['Firstname'].' '.$r["Middlename"] ?><span class="pull-right"></span>
              </td>
              <td class="text-center">
                <?php
                if ($r["EntranceNo"] == 0) {
                  echo '<input type="checkbox" disabled title="Entrance exam reciept is required.">';
                } else {
                  if ($r["ActiveNo"] == 0) {
                    echo '<input type="checkbox" class="active" value="'.$r["StudentNo"].'">';
                  } else {
                    echo '<i class="fa fa-check-square-o"></i>';
                  }
                }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["ExitNo"] > 0) {
                    echo '<input type="checkbox" class="graduate" value="'.$r["StudentNo"].'">';
                  } else {
                    echo '<input type="checkbox" disabled>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["DropNo"] == 0) {
                    echo '<input type="radio" class="Dropout" id="dropout" value="'.$r["StudentNo"].'">';
                  } else {
                    echo '<i class="fa fa-check-square-o"></i>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php
                  if ($r["ExpelledNo"] == 0) {
                    echo '<input type="radio" class="Expelled" id="expelled" value="'.$r["StudentNo"].'">';
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
  <a href="#DropOutModal" data-toggle="modal" id="DropOutTriggerBtn" class="hide"></a>
  <div class="modal fade" id="DropOutModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="box box-info">
          <div class="box-header with-border">
            <big>Dropout Comments</big>
            <span>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fa fa-close"></i></span></button>
            </span>
          </div>
          <div class="box-body">
            <div id="commentsResult"></div>
            <form id="commentsForm">
              <div class="form-group">
                <input type="date" class="form-control" name="DropOutDate">
              </div>
              <div class="form-group">
                <input type="text" class="form-control  hide" name="DropOutId">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="DropOutDesc" style="height: 100px" placeholder="Write comments"></textarea>
              </div>
              <div class="form-group">
                <button type="button" id="DropOutSaveBtn" class="btn btn-primary btn-flat pull-right">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="#ExpelledModal" data-toggle="modal" id="ExpelledTriggerBtn" class="hide"></a>
  <div class="modal fade" id="ExpelledModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="box box-info">
          <div class="box-header with-border">
            <big>Transfered Out Comments</big>
            <span>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fa fa-close"></i></span></button>
            </span>
          </div>
          <div class="box-body">
            <div id="commentsResult"></div>
            <form id="commentsForm">
              <div class="form-group">
                <input type="date" class="form-control" name="ExpelledDate">
              </div>
              <div class="form-group">
                <input type="text" class="form-control  hide" name="ExpelledId">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="ExpelledDesc" style="height: 100px" placeholder="Write comments"></textarea>
              </div>
              <div class="form-group">
                <button type="button" id="ExpelledSaveBtn" class="btn btn-primary btn-flat pull-right">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../../pages/static/script.php' ?>
  <script src="../../pages/interactive/tableProperties.js"></script>
  <!-- <script src="../../pages/interactive/statusClick.js"></script> -->
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      if (isset($_GET['active'])) {
        $id = $_GET['id'];
        $st = $conn->prepare("INSERT INTO `active_info` (`ActiveStatus`) VALUES (1)");
        if ($st->execute()) {
          $st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `active_info`
          SET studentjunc_info.ActiveNo = (SELECT MAX(ActiveNo) FROM `active_info`)
          WHERE studentjunc_info.StudentNo = ?");
          if ($st->bind_param("i", $id)) {
            $st->execute();
          }
        }
      } elseif (isset($_GET['graduate'])) {
        $id = $_GET['id'];
        $t = date('m:d:y');
        $ay = date('Y', strtotime($t));
        $ay = $ay.'-'.($ay + 1);
        $st = $conn->prepare("INSERT INTO `graduate_info` (`GraduateStatus`, `GraduateYear`) VALUES (1, '$ay')");
        if ($st->execute()) {
          $st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `graduate_info`
          SET studentjunc_info.GraduateNo = (SELECT MAX(GraduateNo) FROM `graduate_info`)
          WHERE studentjunc_info.StudentNo = ?");
          if ($st->bind_param("i", $id)) {
            $st->execute();
          }
        }
      } elseif (isset($_GET['dropout'])) {
        $id = $_GET['id'];
        $date = $_GET['date'];
        $desc = $_GET['desc'];
        $st = $conn->prepare("INSERT INTO `drop_info` (`DropOutDate`, `DropOutDesc`) VALUES (?, ?)");
        if ($st->bind_param("ss", $date, $desc)) {
          if ($st->execute()) {
            $st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `drop_info`
            SET studentjunc_info.DropNo = (SELECT MAX(DropNo) FROM `drop_info`)
            WHERE studentjunc_info.StudentNo = ?");
            if ($st->bind_param("i", $id)) {
              $st->execute();
            }
          }
        }
      } elseif (isset($_GET['expelled'])) {
        $id = $_GET['id'];
        $date = $_GET['date'];
        $desc = $_GET['desc'];
        $st = $conn->prepare("INSERT INTO `expelled_info` (`ExpelledDate`, `ExpelledDesc`) VALUES (?, ?)");
        if ($st->bind_param("ss", $date, $desc)) {
          if ($st->execute()) {
            $st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `expelled_info`
            SET studentjunc_info.ExpelledNo = (SELECT MAX(ExpelledNo) FROM `expelled_info`)
            WHERE studentjunc_info.StudentNo = ?");
            if ($st->bind_param("i", $id)) {
              $st->execute();
            }
          }
        }
      }
    }
  ?>
  <script>
    $(function () {
      $(".active").click(function () {
        var id = $(this).val();
        var q = "?id=" + id + "& active=active";
        ajaxRequest(q);
      });
      $(".graduate").click(function () {
        var id = $(this).val();
        var q = "?id=" + id + "& graduate=graduate";
        ajaxRequest(q);
      });
      $(".Dropout").click(function () {
        var id = $(this).val();
        $("[name='DropOutId']").val(id);
        $("#DropOutTriggerBtn").trigger('click');
      });
      $(".Expelled").click(function () {
        var id = $(this).val();
        $("[name='ExpelledId']").val(id);
        $("#ExpelledTriggerBtn").trigger('click');
      });
      $("#ExpelledSaveBtn").click(function () {
        var id = $("[name='ExpelledId']").val();
        var date = $("[name='ExpelledDate']").val();
        var desc = $("[name='ExpelledDesc']").val();
        var q = "?id=" + id + "& date=" + date + "& desc=" + desc + "& expelled=expelled";
        var arr = [id, date, desc];
        if (empty(arr)) {
          ajaxRequest(q);
        } else {
          alert("Fields canoot be empty.");
        }
      });
      $("#DropOutSaveBtn").click(function () {
        var id = $("[name='DropOutId']").val();
        var date = $("[name='DropOutDate']").val();
        var desc = $("[name='DropOutDesc']").val();
        var q = "?id=" + id + "& date=" + date + "& desc=" + desc + "& dropout=dropout";
        var arr = [id, date, desc];
        if (empty(arr)) {
          ajaxRequest(q);
        } else {
          alert("Fields canoot be empty.");
        }
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
      function empty(arr) {
        var arrLen = arr.length;
        var i; var c = 0;
        for (i = 0; i < arrLen; i++) {
          if (arr[i] == "") {
            c++;
          }
        }
        if (c > 0) {
          return false;
        } else {return true;}
      }
      document.getElementsByTagName("li")[8].classList.add("active");
      if ("<?php echo $_GET['q']; ?>" == "HS") {
        document.getElementsByTagName("li")[9].classList.add("active");
      } else {
        document.getElementsByTagName("li")[10].classList.add("active");
      }
    })
  </script>
</body>
</html>
