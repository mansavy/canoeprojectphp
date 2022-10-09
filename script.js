$(document).ready(function () {
  $("#hamburger").click(function () {
    if ($(".show").first().is(":hidden")) {
      $("#toggle").slideDown("slow");
    } else {
      $(".show").hide();
    }
  });
});
