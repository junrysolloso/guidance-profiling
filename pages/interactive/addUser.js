
$(function () {
  $("#saveUserBtn").click(function (e) {
    e.preventDefault();
    var ajax = new XMLHttpRequest();
    var vUserFull = $("input[name = 'UserFull']").val();
    var vUserName = $("input[name = 'UserName']").val();
    var vUserPass = $("input[name = 'UserPass']").val();
    var AddUser = "AddUser";
    var p = "../../pages/savedata/user.php";
    var q = "?UserName=" + vUserName + "& UserPass=" + vUserPass + "& UserFull=" + vUserFull + "& AddUser=" + AddUser;
    var arr = [vUserFull, vUserName, vUserPass, AddUser];
    if (iValidate(arr) > 0) {
      alert("Fields cannot be empty.");
    } else {
      ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var resT = ajax.responseText;
          var r = parseInt(resT);
          if (r == 0) {
            $('#UserSuccess').html("<div class='alert alert-success'>");
            $('#UserSuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
            $('#UserSuccess > .alert-success').append("<strong><center>Username Already Exist.</center></strong>");
            $('#UserSuccess > .alert-success').append('</div>');
            $('#addUserForm').trigger("reset");
          } else {
            $('#UserSuccess').html("<div class='alert alert-success'>");
            $('#UserSuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
            $('#UserSuccess > .alert-success').append("<strong><center>User added succesffully.</center></strong>");
            $('#UserSuccess > .alert-success').append('</div>');
            $('#addUserForm').trigger("reset");
          }
        }
      }
      ajax.open('GET', p + q, true);
      ajax.send(null);
    }
  })
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
