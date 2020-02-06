<script src="../../components/jquery/dist/jquery.min.js"></script>
<script src="../../components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../../components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../../components/fastclick/lib/fastclick.js"></script>
<script src="../../assets/js/demo.js"></script>
<script src="../../assets/js/adminlte.min.js"></script>
<script src="../../assets/js/jqBootstrapValidation.js"></script>
<script src="../../pages/interactive/imgPreview.js"></script>
<script src="../../pages/interactive/custome.js"></script>
<script>
  $(function () {
    var print = document.getElementById("printDrop");
    var exp = document.getElementById("printExpelled");
    var grad = document.getElementById("printGraduate");
    print.addEventListener('click', function () {
      window.open("printDrop.php?q=CL");
    });
    exp.addEventListener('click', function () {
      window.open("printExpelled.php?q=CL");
    });
    grad.addEventListener('click', function () {
      window.open("printGraduate.php?q=CL&p=BSIT");
    });
    $("#printStudentListHS").click(function () {
      window.open("printStudentlistHS.php?q=HS");
    })
    $("#printStudentListCL").click(function () {
      window.open("printStudentlistCL.php?q=CL");
    })
  })
</script>
