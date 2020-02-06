
$(function () {
  $("#saveProgramBtn").click(function () {
    var ajax = new XMLHttpRequest();
    var vProgramName   = $("input[name = 'ProgramN']").val();
    var vProgramDesc   = $("input[name = 'ProgramD']").val();
    var vCategory      = $("select[name = 'Cat']").val();
    var p = "../../pages/savedata/saveProgram.php";
    var q = "?ProgramName=" + vProgramName + "& ProgramDesc=" + vProgramDesc + "& Category=" + vCategory;
    var arr = [vProgramName, vProgramDesc, vCategory];
    if (iValidate(arr) > 0) {
      alert("Fields cannot be empty.");
    } else {
      ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var resT = ajax.responseText;
          if (resT == 0 && resT == "0") {
            $('#ProgramSuccess').html("<div class='alert alert-success'>");
            $('#ProgramSuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
            $('#ProgramSuccess > .alert-success').append("<strong><center>Program Already Exist.</center></strong>");
            $('#ProgramSuccess > .alert-success').append('</div>');
            $('#addProgramForm').trigger("reset");
          } else {
            $('#ProgramSuccess').html("<div class='alert alert-success'>");
            $('#ProgramSuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
            $('#ProgramSuccess > .alert-success').append("<strong><center>Program added succesffully.</center></strong>");
            $('#ProgramSuccess > .alert-success').append('</div>');
            $('#addProgramForm').trigger("reset");
          }
        }
      }
      ajax.open('GET', p + q, true);
      ajax.send(null);
    }
  });
  //Validate input
  function iValidate(arr) {
    var len = arr.length;
    var r = 0;
    for (var i = 0; i < len; i++) {
      if(arr[i] == "" || arr[i] == null) {
        r++;
      }
    }
    return r;
  }
})
