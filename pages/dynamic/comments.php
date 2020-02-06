
<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Comment section</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    $varNo = $_GET['q'];
    $varCol = $_GET['c'];
  ?>
</head>
<body style="background: #222D32">
  <div class="wrapper" >
    <section>
      <div class="container" style="padding-top: 100px">
        <div class="row">
          <div class="col-sm-3"></div>
            <div class="col-sm-6">
              <div id="success"></div>
              <ul class="list-group">
                <li class="list-group-item"><h3 class="profile-username text-center">Write a comment</h3></li>
                <li class="list-group-item">
                  <form id="CommentsForm">
                    <div class="form-group">
                      <textarea class="form-control" maxlength="255" rows="10" name="inComments"></textarea>
                    </div>
                    <div class="form-group hide">
                      <select class="form-control" name="inStudentNo">
                        <option value="<?php echo $varNo ?>"><?php echo $varNo ?></option>
                      </select>
                    </div>
                    <div class="form-group hide">
                      <select class="form-control" name="inCol">
                        <option value="<?php echo $varCol ?>"><?php echo $varCol ?></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-flat btn-block" type="submit" name="submit" value="send">Done</button>
                    </div>
                  </form>
                </li>
                <li class="list-group-item"></li>
              </ul>
            </div>
          <div class="col-sm-3"></div>
        </div>
      </div>
    </section>
  </div>
  <?php include '../../pages/static/script.php' ?>
  <script src="../../pages/interactive/saveComment.js"></script>
</body>
</html>
