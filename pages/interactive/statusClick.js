$(document).ready(function () {
  //Checkbox click
  $("input[type = 'checkbox']").click(function () {
    var vcolN = $(this).attr("name");
    var vsNo = $(this).attr("id");
    $.ajax({
      url    : "../../pages/savedata/updateStatus.php",
      method : "POST",
      data   : { 
        colN : vcolN,
        sNo  : vsNo
      },
      cache: false
    });
  });
});
