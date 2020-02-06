
$(document).ready(function() {
    "use strict";
    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            //Student
            var vStudentNo   = $("input[name = 'StudentNo']").val();
            var vIdNumber    = $("input[name = 'IdNumber']").val();
            var vFname       = $("input[name = 'Fname']").val();
            var vLname       = $("input[name = 'Lname']").val();
            var vMname       = $("input[name = 'Mname']").val();
            var vCivilStatus = $("select[name = 'CivilStatus']").val();
            var vGender      = $("select[name = 'Gender']").val();
            var vAge         = $("input[name = 'Age']").val();
            var vDateBirth   = $("input[name = 'DateBirth']").val();
            var vCitizenship = $("input[name = 'Citizenship']").val();
            var vReligion    = $("input[name = 'Religion']").val();
            var vEmailAdd    = $("input[name = 'EmailAdd']").val();
            var vPhoneNo     = $("input[name = 'PhoneNo']").val();
            var vAddress     = $("textarea[name = 'Address']").val();
            var vProgramNo   = $("select[name = 'ProgramNo']").val();
            var vEducStatus  = $("select[name = 'EducStatus']").val();
            var vYearLevel  = $("select[name = 'YearLevel']").val();
            //Mother
            var vMotherNo    = $("input[name = 'MotherNo']").val();
            var vMotherName  = $("input[name = 'MotherName']").val();
            var vMotherAge   = $("input[name = 'MotherAge']").val();
            var vMotherOccu  = $("input[name = 'MotherOccu']").val();
            var vMotherAdd   = $("textarea[name = 'MotherAdd']").val();
            var vMotherPhone = $("input[name = 'MotherPhone']").val();
            //Father
            var vFatherNo    = $("input[name = 'FatherNo']").val();
            var vFatherName  = $("input[name = 'FatherName']").val();
            var vFatherAge   = $("input[name = 'FatherAge']").val();
            var vFatherOccu  = $("input[name = 'FatherOccu']").val();
            var vFatherAdd   = $("textarea[name = 'FatherAdd']").val();
            var vFatherPhone = $("input[name = 'FatherPhone']").val();
            $.ajax({
                url: "../../pages/savedata/saveStudent.php",
                type: "POST",
                data: {
                  //student
                  StudentNo   : vStudentNo,
                  IdNumber    : vIdNumber,
                  Fname       : vFname,
                  Lname       : vLname,
                  Mname       : vMname,
                  CivilStatus : vCivilStatus,
                  Gender      : vGender,
                  Age         : vAge,
                  DateBirth   : vDateBirth,
                  Citizenship : vCitizenship,
                  Religion    : vReligion,
                  EmailAdd    : vEmailAdd,
                  PhoneNo     : vPhoneNo,
                  Address     : vAddress,
                  ProgramNo   : vProgramNo,
                  EducStatus  : vEducStatus,
                  YearLevel   : vYearLevel,
                  //Mother
                  MotherNo    : vMotherNo,
                  MotherName  : vMotherName,
                  MotherAge   : vMotherAge,
                  MotherOccu  : vMotherOccu,
                  MotherAdd   : vMotherAdd,
                  MotherPhone : vMotherPhone,
                  //Father
                  FatherNo    :vFatherNo,
                  FatherName  :vFatherName,
                  FatherAge   :vFatherAge,
                  FatherOccu  :vFatherOccu,
                  FatherAdd   :vFatherAdd,
                  FatherPhone :vFatherPhone
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#AddStudentSuccess').html("<div class='alert alert-success'>");
                    $('#AddStudentSuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                    $('#AddStudentSuccess > .alert-success').append("<strong><center>Student added succesffully.</center></strong>");
                    $('#AddStudentSuccess > .alert-success').append('</div>');
                    //clear all fields
                    $('#addStudentForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#AddStudentSuccess').html("<div class='alert alert-danger'>");
                    $('#AddStudentSuccess > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                    $('#AddStudentSuccess > .alert-danger').append("<strong><center>Sorry! something went wrong :( </center></strong>");
                    $('#AddStudentSuccess > .alert-danger').append('</div>');
                    //clear all fields
                    $('#addStudentForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
});
