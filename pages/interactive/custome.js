$(document).ready(function(){
"use strict";
    //Dropdown list
    var placeholderTitle = "";
    $('.dropdown').hover(
    function(){
      $(this).children('.dropdown-menu').slideDown('fast');
    },
    function () {
      $(this).children('.dropdown-menu').slideUp('fast');
    });
    
    // //Input hint
    // $("input").mouseenter(
    // function(){
    //    var x = $(this).attr("id");
    //     tooltipShow(x);
    // });
    // $("input").mouseleave(function(){
    //     var x = $(this).attr("id");
    //    tooltipHide(x);
    // });
    //
    // //Tooltip show
    // function tooltipShow(id){
    //     placeholderTitle = $("#" + id).attr("placeholder");
    //     $("span#" + id).text("Enter " + placeholderTitle);
    //     $("div#" + id).removeClass("hide").fadeIn('slow');
    //     $("#" + id).removeAttr("placeholder");
    // }
    //
    // //Tooltip hide
    // function tooltipHide(id){
    //     var t = $("#" + id).attr("placeholder");
    //     $("div#" + id).removeClass("hide").fadeOut('slow');
    //     $("#" + id).attr("placeholder", placeholderTitle);
    // }

    //Toggle header
    $("#toggle-header").click(function () {
      $(".toggle-header").toggleClass("hide");
      $("#arrowUp").toggleClass('hide');
      $("#arrowDown").toggleClass('hide');
    });
    //Back to top
    $("#backtotop").click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 600);
    });
    $(window).scroll(function () {
      if ($(window).scrollTop() > 150) {
        $("#backtotop").addClass("visible");
      } else {
        $("#backtotop").removeClass("visible");
      }
    });
    //Hide reasons
    $("#DropOutLink").click(function () {
      $("#DropOut").toggleClass("hide");
      $("#aRRDrop").toggleClass("hide");
      $("#aRLDrop").toggleClass("hide");
    });
    $("#ExpelledLink").click(function () {
      $("#Expelled").toggleClass("hide");
      $("#aRRExp").toggleClass("hide");
      $("#aRLExp").toggleClass("hide");
    });
});
