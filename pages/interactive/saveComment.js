
$(document).ready(function() {
    "use strict";
    $("textarea, select").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var vComment   = $("textarea[name = 'inComments']").val();
            var vStudentNo = $("select[name = 'inStudentNo']").val();
            var vCol       = $("select[name = 'inCol']").val();
            $.ajax({
                url: "../../pages/savedata/saveComments.php",
                type: "POST",
                data: {
                  inComments  : vComment,
                  inStudentNo : vStudentNo,
                  inCol       : vCol
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                    $('#success > .alert-success').append("<strong><center>Comment succesffully save.</center></strong>");
                    $('#success > .alert-success').append('</div>');
                    //clear all fields
                    $('#CommentsForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                    $('#success > .alert-danger').append("<strong><center>Sorry! something went wrong :( </center></strong>");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#CommentsForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
});
