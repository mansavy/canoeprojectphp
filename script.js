$(document).ready(function () {
  $("#hamburger").click(function () {
    if ($(".show").first().is(":hidden")) {
      $("#toggle").slideDown("slow");
    } else {
      $(".show").slideUp("slow");
    }
  });
});

$(document).mouseup(function (e) {
  if ($(e.target).closest(".show").length === 0) {
    $(".show").slideUp("slow");
  }
});
