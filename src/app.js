var $ = require("jquery");
$(document).ready(function () {
  alert("n")
  $.ajax(
{
url: "http://localhost/php-ajax-dischi/database2.php",
method: "GET",
success: function (data, stato) {
  console.log(data);
$("#risultati").html(data);
},
error: function (richiesta, stato, errori) {
alert("E' avvenuto un errore. ");
}
}
);
});
