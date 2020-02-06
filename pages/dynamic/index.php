
<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Home</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php include_once '../../pages/static/banner.php' ?>
  <div class="wrapper">
    <?php include_once '../../pages/static/header.php' ?>
    <?php include_once '../../pages/static/navigation.php' ?>
    <div class="content-wrapper">
      <section class="content-header">
        <h4 class="title">Dashboard</h4>
      </section>
      <br><br>
      <section class="content">
        <center>
          <?php
            error_reporting(0);
            if($_GET['alert'])
            {
              $Alert = $_GET['alert'];
              GetAlert($Alert);
            }
          ?>
        </center>
        <div class="callout callout-default"><h2>Welcome!</h2> <p>To Don Jose Ecleo Memorial Foundation College of Science and Technology Guidance Profiling System.</p></div>
        <!-- <div class="carousel hide">
          <img class="imgSlider" src="../../upload/portfolio/01-large.jpg" width="100%" height="300px">
          <img class="imgSlider" src="../../upload/portfolio/02-large.jpg" width="100%" height="300px">
          <img class="imgSlider" src="../../upload/portfolio/03-large.jpg" width="100%" height="300px">
          <img class="imgSlider" src="../../upload/portfolio/04-large.jpg" width="100%" height="300px">
          <img class="imgSlider" src="../../upload/portfolio/05-large.jpg" width="100%" height="300px">
          <img class="imgSlider" src="../../upload/portfolio/06-large.jpg" width="100%" height="300px">
          <img class="imgSlider" src="../../upload/portfolio/07-large.jpg" width="100%" height="300px">
          <img class="imgSlider" src="../../upload/portfolio/08-large.jpg" width="100%" height="300px">
        </div><br> -->
        <div class="row hide">
          <div class="col-sm-6">
            <div class="box box-default">
              <div class="box-body">
                <h2>Mission</h2>
                <b>DJEMFCST</b> is committed and dedicated to:
                <br>
                <ul  class="justify">
                <li><b> Foster</b> a safe, secured and supportive academic environment that promotes diverse education; </li>
                <li><b> Mold</b> students the value of self-discipline, integrity, compassion for others and loyalty to Alma Mater;</li>
                <li><b> Develop</b> students with active and creative minds through discovery, intellectual simulation and research; </li>
                <li><b> Practice</b> professional career to uphold the value of learning, leadership and service; and </li>
                <li><b> Build</b> strong, positive linkages with industries, communities and other stakeholders for them to be actively involved in our students learning.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="box box-default">
              <div class="box-body">
                <h2>Vision</h2>
                <b>DJEMFCST</b> envisions to be the leading frontier of learning and
                innovation in instruction, research and extension to transform students into an
                empowered, holistically developed and locally-globally competitive graduates.
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  <?php
    include_once '../../pages/dynamic/addProgram.php';
    include_once '../../pages/dynamic/addUser.php';
    include_once '../../pages/dynamic/backupData.php'; 
    include_once '../../pages/static/footer.php';
  ?>
  </div>
  <?php include_once '../../pages/static/script.php' ?>
  <!-- <script src="../../pages/interactive/imgSlider.js"></script> -->
  <script src="../../pages/interactive/saveProgram.js"></script>
  <script src="../../pages/interactive/addUser.js"></script>
  <script>
    $(document).ready(function () {
      document.getElementsByTagName("li")[4].classList.add("active");
    })
  </script>
</body>
</html>
