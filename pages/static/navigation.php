<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="user-panel">
        <center>
          <img src="../../upload/image/logo.png" height="65px" width="65px" class="img-circle" alt="User Image">
          <div class="info" style="color:#fff">
            <?php include_once '../../pages/static/userInfo.php' ?>
          </div>
        </center>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"> <strong>MAIN NAVIGATION</strong></li>
      <li>
        <a href="index.php"><i class="fa fa-home"></i> <span>Home</span>
          <span class="pull-right-container"></span>
        </a>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-user-plus"></i> <span>New Student</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="newStudent.php?q=HS"><i class="fa fa-circle-o"></i> <span>Junior/Senior High</span></a></li>
          <li><a href="newStudent.php?q=CL"><i class="fa fa-circle-o"></i> <span>College</span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-line-chart"></i> <span>Status</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="statusList.php?q=HS"><i class="fa fa-circle-o"></i> <span>Junior/Senior High</span></a></li>
          <li><a href="statusList.php?q=CL"><i class="fa fa-circle-o"></i> <span>College</span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-pencil-square-o"></i> <span>Examination</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="examList.php?q=HS"><i class="fa fa-circle-o"></i> <span>Junior/Senior High</span></a></li>
          <li><a href="examList.php?q=CL"><i class="fa fa-circle-o"></i> <span>College</span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-users"></i> <span>Junior/Senior High</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="studentList.php?q=HS"><i class="fa fa-circle-o"></i> <span>List of students</span></a></li>
          <li><a href="dropExpList.php?q=Drop&c=HS"><i class="fa fa-circle-o"></i> <span>Dropout</span></a></li>
          <li><a href="dropExpList.php?q=Expelled&c=HS"><i class="fa fa-circle-o"></i> <span>Transfered Out</span></a></li>
          <li><a href="graduateList.php?q=HS"><i class="fa fa-circle-o"></i> <span>Graduated</span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-group"></i> <span>College</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="studentList.php?q=CL"><i class="fa fa-circle-o"></i> <span>List of students</span></a></li>
          <li><a href="dropExpList.php?q=Drop&c=CL"><i class="fa fa-circle-o"></i> <span>Dropout</span></a></li>
          <li><a href="dropExpList.php?q=Expelled&c=CL"><i class="fa fa-circle-o"></i> <span>Transfered Out</span></a></li>
          <li><a href="shiftList.php"><i class="fa fa-circle-o"></i> <span>Shift</span></a></li>
          <li><a href="graduateList.php?q=CL"><i class="fa fa-circle-o"></i> <span>Graduated</span></a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-print"></i> <span>Reports</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#" id="printDrop"><i class="fa fa-circle-o"></i> <span>Dropout</span></a></li>
          <li><a href="#" id="printExpelled"><i class="fa fa-circle-o"></i> <span>Trasfered Out</span></a></li>
          <li><a href="#" id="printGraduate"><i class="fa fa-circle-o"></i> <span>Graduates</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> <span>Student List</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#" id="printStudentListCL"><i class="fa fa-circle-o"></i> <span>College</span></a></li>
              <li><a href="#" id="printStudentListHS"><i class="fa fa-circle-o"></i> <span>Junior/Senior</span></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <?php if ($_SESSION['sStat'] == 1): ?>
        <li><a href="setting.php"><i class="fa fa-gear"></i> <span>Utility</span></a></li>
      <?php endif; ?>
    </ul>
  </section>
</aside>
