
$(document).ready(function() {
    "use strict";
    $("input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            //Student
            var vStudentNo   = $("input[name = 'StudentNo']").val();
            var vFirstname   = $("input[name = 'Firstname']").val();
            var vMiddlename  = $("input[name = 'Middlename']").val();
            var vLastname    = $("input[name = 'Lastname']").val();
            var vCivilStatus = $("input[name = 'CivilStatus']").val();
            var vGender      = $("input[name = 'Gender']").val();
            var vAge         = $("input[name = 'Age']").val();
            var vDateBirth   = $("input[name = 'DateBirth']").val();
            var vCitizenship = $("input[name = 'Citizenship']").val();
            var vReligion    = $("input[name = 'Religion']").val();
            var vEmailAdd    = $("input[name = 'EmailAdd']").val();
            var vPhoneNo     = $("input[name = 'PhoneNo']").val();
            var vAddress     = $("input[name = 'Address']").val();
            //Mother
            var vMotherName  = $("input[name = 'MotherName']").val();
            var vMotherAge   = $("input[name = 'MotherAge']").val();
            var vMotherOccu  = $("input[name = 'MotherOccu']").val();
            var vMotherAdd   = $("input[name = 'MotherAdd']").val();
            var vMotherPhone = $("input[name = 'MotherPhone']").val();
            //Father
            var vFatherName  = $("input[name = 'FatherName']").val();
            var vFatherAge   = $("input[name = 'FatherAge']").val();
            var vFatherOccu  = $("input[name = 'FatherOccu']").val();
            var vFatherAdd   = $("input[name = 'FatherAdd']").val();
            var vFatherPhone = $("input[name = 'FatherPhone']").val();
            $.ajax({
                url: "../../pages/savedata/updateStudent.php",
                type: "POST",
                data: {
                  //student
                  StudentNo   : vStudentNo,
                  Firstname   : vFirstname,
                  Middlename  : vMiddlename,
                  Lastname    : vLastname,
                  CivilStatus : vCivilStatus,
                  Gender      : vGender,
                  Age         : vAge,
                  DateBirth   : vDateBirth,
                  Citizenship : vCitizenship,
                  Religion    : vReligion,
                  EmailAdd    : vEmailAdd,
                  PhoneNo     : vPhoneNo,
                  Address     : vAddress,
                  //Mother
                  MotherName  : vMotherName,
                  MotherAge   : vMotherAge,
                  MotherOccu  : vMotherOccu,
                  MotherAdd   : vMotherAdd,
                  MotherPhone : vMotherPhone,
                  //Father
                  FatherName  :vFatherName,
                  FatherAge   :vFatherAge,
                  FatherOccu  :vFatherOccu,
                  FatherAdd   :vFatherAdd,
                  FatherPhone :vFatherPhone
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#EditProfileSuccess').html("<div class='alert alert-success'>");
                    $('#EditProfileSuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                    $('#EditProfileSuccess > .alert-success').append("<strong><center>Profile updated succesffully.</center></strong>");
                    $('#EditProfileSuccess > .alert-success').append('</div>');
                    //clear all fields
                    $('#editStudentProfileForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#EditProfileSuccess').html("<div class='alert alert-danger'>");
                    $('#EditProfileSuccess > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                    $('#EditProfileSuccess > .alert-danger').append("<strong><center>Sorry! something went wrong :( </center></strong>");
                    $('#EditProfileSuccess > .alert-danger').append('</div>');
                    //clear all fields
                    $('#editStudentProfileForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
});
