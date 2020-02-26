var $ = require("jquery");
$(document).ready(function () {
  $.ajax(
{
url: "http://localhost/php-ajax-dischi/database2.php",
method: "GET",
success: function (data, stato) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < data.length; i++) {
    var context = data[i];
    var html = template(context);
    console.log(data[i]);
    $(".wrap-cd").append(html);
  }
},
error: function (richiesta, stato, errori) {
alert("E' avvenuto un errore. ");
}
}
);
});
