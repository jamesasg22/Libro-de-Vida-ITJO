function show5() {
  if (!document.layers && !document.all && !document.getElementById)
    return

  var Digital = new Date()
  var hours = Digital.getHours()
  var minutes = Digital.getMinutes()
  var seconds = Digital.getSeconds()

  var dn = "PM"
  if (hours < 12)
    dn = "AM"
  if (hours > 12)
    hours = hours - 12
  if (hours == 0)
    hours = 12

  if (minutes <= 9)
    minutes = "0" + minutes
  if (seconds <= 9)
    seconds = "0" + seconds
  //change font size here to your desire
  myclock = "" + hours + ":" + minutes + ":" +
    seconds + " " + dn + "</b></font>"
  if (document.layers) {
    document.layers.liveclock.document.write(myclock)
    document.layers.liveclock.document.close()
  } else if (document.all)
    liveclock.innerHTML = myclock
  else if (document.getElementById)
    document.getElementById("liveclock").innerHTML = myclock
  setTimeout("show5()", 1000)
}

function solonumeros(e) {
  var key = window.Event ? e.which : e.keyCode
  return ((key >= 48 && key <= 57) || (key == 8))
}

window.onload = show5;
//-->
$(document).ready(function () {
      var consulta;
      //hacemos focus al campo de búsqueda
      $("#cedula").focus();

      //comprobamos si se pulsa una tecla
      $("#cedula").on("keyup", function () {

        //obtenemos el texto introducido en el campo de búsqueda

        var datos = $("#cedula").val();
        var consulta = new FormData();
        consulta.append("cedula", datos);

        //hace la búsqueda
        $.ajax({
          url: "http://localhost/LibroDeVida/ajax/buscarAlumnos.ajax.php",
          method: "POST",
          data: consulta,
          cache: false,
          contentType: false,
          processData: false,
          error: function () {
            alert("error petición ajax");
          },
          success: function (data) {
            $("#resultado").empty();
            $("#resultado").append(data);
          }
        });
      });


      });

      function limpiar() {
        document.getElementById("cedula").value = "";
    }
