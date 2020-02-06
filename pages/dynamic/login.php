
<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | User login</title>
 	<?php
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
    include_once '../../pages/static/start.php';
  ?>
</head>
<body style="background: #222D32">
  <div class="wrapper" >
    <section>
      <div class="container" style="padding-top: 90px;">
        <div class="row">
          <div class="col-sm-4"></div>
            <div class="col-sm-4">
              <ul class="list-group">
                <li class="list-group-item">
                  <h3 class="profile-username text-center">User Login</h3>
                  <center>
              			<?php
                      if($_GET['alert'])
                      {
                				$Alert = $_GET['alert'];
                				GetAlert($Alert);
                			}
              			?>
              		</center>
                </li>
                <li class="list-group-item">
                  <center>
                    <img src="../../upload/avatar/user.png" width="100px" height="100px" class="img-bordered img-circle">
                  </center>
                  <br>
                  <form action="../../pages/savedata/user.php" method="post">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user input-group-small"></i></div>
                        <input type="text" class="form-control" name="UserName" id="UserName" placeholder="Username" required>
                        <div class="input-group-addon hide" id="UserName"><span id="UserName"></span></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-key input-group-small"></i></div>
                        <input type="password" class="form-control" name="UserPass" id="UserPass" placeholder="Password" required>
                        <div class="input-group-addon hide" id="UserPass"><span id="UserPass"></span></div>
                      </div>
                    </div>
                    <div class="form-group hide">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-key input-group-small"></i></div>
                        <input type="text" class="form-control" name="UserCheck" value="UserCheck" id="UserPass" placeholder="Password" required>
                        <div class="input-group-addon hide" id="UserPass"><span id="UserPass"></span></div>
                      </div>
                    </div>
                    <br>
                    <button type="submit" name="submit" value="send" class="btn btn-primary btn-flat btn-block">Login</button>
                  </form>
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
</body>
</html>
