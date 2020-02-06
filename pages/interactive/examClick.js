$(document).ready(function () {
  //Checkbox click
  $("input[type = 'checkbox']").click(function () {
    var vcolN = $(this).attr("name");
    var vsNo = $(this).attr("id");
    var vTbl = $(this).attr("title");
    $.ajax({
      url    : "../../pages/savedata/updateExam.php",
      method : "POST",
      data   : {
        colN : vcolN,
        sNo  : vsNo,
        Tbl  : vTbl
      },
      cache: false
    })
  });
});
