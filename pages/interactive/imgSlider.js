$(document).ready(function () {
  //Image slider
  var slideIndex = 0;
  carousel();
  function carousel() {
    var i;
    var x = document.getElementsByClassName("imgSlider");
    var l = x.length;
    for (i = 0; i < l; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > l) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
  }
});
