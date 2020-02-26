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
    $(".wrap-cd").append(html);
  }
  var source = $("#autore").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < data.length; i++) {
    var context = data[i];
    var html = template(context);
    $("select").append(html);
  }
},
error: function (richiesta, stato, errori) {
alert("E' avvenuto un errore. ");
}
}
);
$("select").change(function functionName() {
  var autore = $("select").val();
  $(".wrap-cd").html(" ");
  $.ajax(
{
url: "http://localhost/php-ajax-dischi/database2.php",
method: "GET",
data : {
  artist : autore,
},
success: function (data, stato) {
  print(data);
},
error: function (richiesta, stato, errori) {
  alert("E' avvenuto un errore. ");
}
}
);
})
});
//  funzione stampa
function print(data) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < data.length; i++) {
    var context = data[i];
    var html = template(context);
    $(".wrap-cd").append(html);
  }
}
