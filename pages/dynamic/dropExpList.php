<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | List of dropout/expelled student</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
    include_once '../../pages/dynamic/dropExpQuery.php';
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
            <?php if ($_GET['q'] == "Drop"): ?>
              <h4>List of Dropout</h4>
            <?php endif; ?>
            <?php if ($_GET['q'] == "Expelled"): ?>
              <h4>List of Transfered Out</h4>
            <?php endif; ?>
          </div>
          <div class="col-sm-4">
            <div class="pull-right ">
              <!-- Header content -->
            </div>
          </div>
        </div>
      </section>
      <section class="content">
				<table width="100%" class="table table-condensed" id="studentList">
					<thead>
            <tr>
              <th widt=":5%">No</th>
              <th width="15%">Id</th>
              <th width="35%">Fullname</th>
              <th class="text-center" width="15%" colspan="2">Status</th>
              <th width="15%">Description</th>
              <th width="15%">Profile</th>
            </tr>
          </thead>
					<tbody>
            <?php
              $count = 1;
              while($r = mysqli_fetch_array($dropoutList)){?>
						<tr>
              <td><?php echo $count ?></td>
							<td><?php echo $r['IdNumber'] ?></td>
              <td>
                <?php echo $r["Lastname"].', '.$r['Firstname'].' '.$r["Middlename"] ?>
              </td>
              <td class="text-right"><?php echo $r["LevelName"]; ?></td>
              <td class="text-left"><?php echo $r["ProgramName"]; ?></td>
              <td><a href="dropExpDesc.php?q=<?php echo $r['StudentNo'] ?>&c=<?php echo $q ?>" class="btn btn-block btn-success btn-flat"><i class="fa fa-share-square-o"></i> View</a></td>
              <td><a href="viewProfile.php?q=<?php echo $r['StudentNo'] ?>" class="btn btn-block btn-success btn-flat"><i class="fa fa-share-square-o"></i> View</a></td>
						</tr>
            <?php $count++; } ?>
					</tbody>
				</table>
      </section>
    </div>
    <?php
      include_once '../../pages/static/footer.php';
    ?>
  </div>
  <?php include_once '../../pages/static/script.php' ?>
  <script src="../../pages/interactive/tableProperties.js"></script>
  <script>
    $(function () {
      if ("<?php echo $_GET['c']; ?>" == "HS") {
        document.getElementsByTagName("li")[14].classList.add("active"); // HS List of students
        if ("<?php echo $_GET['q']; ?>" == "Drop") {
          document.getElementsByTagName("li")[16].classList.add("active");
        } else {
          document.getElementsByTagName("li")[17].classList.add("active");
        }
      } else {
        document.getElementsByTagName("li")[19].classList.add("active"); // CL List of students
        if ("<?php echo $_GET['q']; ?>" == "Drop") {
          document.getElementsByTagName("li")[21].classList.add("active");
        } else {
          document.getElementsByTagName("li")[22].classList.add("active");
        }
      }
    })
  </script>
</body>
</html>
