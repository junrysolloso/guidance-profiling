
<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Add new student</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/config.php';
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<?php include_once '../../pages/static/banner.php' ?>
	<div class="wrapper">
	  <?php include_once '../../pages/static/header.php' ?>
	  <?php include_once '../../pages/static/navigation.php' ?>
	  <div class="content-wrapper">
	    <section class="content-header">
        <h4>Setting</h4>
      </section>
      <section class="content">
				<form action="../../pages/savedata/saveStudent.php" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <ul class="list-group">
                <li class="list-group-item">
                  <h4>Program</h4>
                </li>
                <li class="list-group-item">
                  <a href="#addProgram" data-dismiss="modal" data-toggle="modal"><span>Add Program</span></a>
                </li>
                <li class="list-group-item">
                  <table class="table table-bordered table-condensed">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th width="5%">Remove</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $count = 1;
                        $st = $conn->prepare("SELECT * FROM `program_info`");
                          if ($st->execute()) {
                            $r = $st->get_result();
                            while($c = $r->fetch_array()) { ?>
                              <tr class="program" id="<?php echo $c["ProgramNo"]; ?>">
                                <td><?php echo $count; ?></td>
                                <td>
                                  <p><?php echo $c["ProgramName"]; ?></p>
                                  <input type="text" id="ProgramName<?php echo $c["ProgramNo"]; ?>" value="<?php echo $c["ProgramName"]; ?>" class="form-control hide">
                                </td>
                                <td>
                                  <p><?php echo $c["ProgramDesc"]; ?></p>
                                  <input type="text" id="ProgramDesc<?php echo $c["ProgramNo"]; ?>" value="<?php echo $c["ProgramDesc"]; ?>" class="form-control hide">
                                </td>
                                <td class="program" id="<?php echo $c["ProgramNo"]; ?>"><a href="#" class="btn btn-danger btn-block btn-flat program"><i class="fa fa-minus"></i></td>
                              </tr>
            <?php $count++; }
                          }
                      ?>
                    </tbody>
                  </table>
                </li>
              </ul>
              <ul class="list-group">
                <li class="list-group-item">
                  <h4>User</h4>
                </li>
                <li class="list-group-item">
                  <a href="#addUser" data-dismiss="modal" data-toggle="modal"><span>Add User</span></a>
                </li>
                <li class="list-group-item">
                  <table class="table table-bordered table-condensed">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th width="5%">Remove</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $count = 1; $hide = "";
                        $st = $conn->prepare("SELECT * FROM `user_info`");
                          if ($st->execute()) {
                            $r = $st->get_result();
                            while($c = $r->fetch_array()) {
                              if ($count == 1) {
                                $hide = "hide";
                              } else {
                                $hide = "";
                              }
                              ?>
                              <tr class="user" id="<?php echo $c["UserId"]; ?>">
                                <td><?php echo $count; ?></td>
                                <td>
                                  <p><?php echo $c["UserName"]; ?></p>
                                  <input type="text" id="UserName<?php echo $c["UserId"]; ?>" value="<?php echo $c["UserName"]; ?>" class="form-control hide">
                                </td>
                                <td>
                                  <p><?php echo $c["UserPass"]; ?></p>
                                  <input type="password" id="UserPass<?php echo $c["UserId"]; ?>" value="<?php echo $c["UserPass"]; ?>" class="form-control hide">
                                </td>
                                <td class="user" id="<?php echo $c["UserId"]; ?>"><a href="#" class="btn btn-danger btn-block btn-flat <?php echo $hide; ?>"><i class="fa fa-minus user"></i></td>
                              </tr>
            <?php $count++; }
                          }
                      ?>
                    </tbody>
                  </table>
                </li>
              </ul>
              <ul class="list-group">
                <li class="list-group-item">
                  <h4>Database</h4>
                </li>
                <li class="list-group-item">
                  <a href="#backupDB" data-dismiss="modal" data-toggle="modal"><span>Backup Database</span></a>
                </li>
              </ul>
	           </div>
            <div class="col-sm-2"></div>
	        </div>
	      </form>
	    </section>
	  </div>
	  <?php
      include_once '../../pages/dynamic/addProgram.php';
      include_once '../../pages/dynamic/addUser.php';
      include_once '../../pages/dynamic/backupData.php';
      include_once '../../pages/static/footer.php';
    ?>
	 </div>
	 <?php include '../../pages/static/script.php'; ?>
   <script src="../../pages/interactive/saveProgram.js"></script>
   <script src="../../pages/interactive/addUser.js"></script>
   <script>
     $(document).ready(function () {
       var tmp = 0;
    document.getElementsByTagName("li")[29].classList.add("active");
     $("td").mouseenter(function () {
       $(this).children("p").hide();
       $(this).children("input").removeClass("hide");
       tmp = 0;
     });
     $("td").mouseleave(function () {
       var v = $(this).children("input").val();
       $(this).children("input").addClass("hide");
       $(this).children("p").text(v);
       $(this).children("p").show();
       var cl = $(this).parent("tr").attr("class");
       var id = $(this).parent("tr").attr("id");
       if (cl == "user") {
         if (tmp > 0) {
           var name = $("#UserName" + id).val();
           var pass = $("#UserPass" + id).val();
           var p = "update.php";
           var q = "?UserName=" + name + "& UserPass=" + pass + "& id=" + id;
           ajaxRequest(p, q);
         }
       } else {
         if (tmp > 0) {
           var name = $("#ProgramName" + id).val();
           var desc = $("#ProgramDesc" + id).val();
           var p = "update.php";
           var q = "?ProgramName=" + name + "& ProgramDesc=" + desc + "& id=" + id;
           ajaxRequest(p, q);
         }
       }
     });
     $("td > input").keyup(function () {
       tmp++;
     });
     $("td > a").click(function (e) {
       e.preventDefault();
       var cl = $(this).parent("td").attr("class");
       var id = $(this).parent("td").attr("id");
       if (cl == "user") {
         var con = confirm("Are you sure?");
         var p = "update.php";
         var q = "?dUserId=" + id;
         if (con == true) {
           ajaxRequest(p, q);
         }
       } else {
         var con = confirm("Are you sure?");
         var p = "update.php";
         var q = "?dProgramNo=" + id;
         if (con == true) {
           ajaxRequest(p, q);
         }
       }
     });
      function ajaxRequest(p, q) {
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function () {
          if (ajax.readyState == 4 && ajax.status == 200) {
            var r = ajax.responseText;
            window.location = "setting.php";
          }
        }
        ajax.open('GET', p + q , true);
        ajax.send(null);
      }
     })
   </script>
</body>
</html>
