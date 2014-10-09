$(document).ready(function() {
  $("#menu li h1").click(function(e) {
    $(this).parents().siblings("li").addClass("item5");
    $(this).parents("li").removeClass("item5");

    e.preventDefault();
  });
});