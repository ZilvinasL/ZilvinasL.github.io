$(document).ready(function() {

$(".animated-progress span").each(function () {
  $(this).animate(
    {
      width: $(this).attr("data-progress") + "%",
    },
    1000
  );
  $(this).text($(this).attr("data-progress") + "%");
});

})

function myFunction () {
  var x = document.getElementById("mMenu");
  if (x.style.display === "block") {
    x.style.display = "none";
  
  } else {
    x.style.display = "block";
  }
}