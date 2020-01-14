
$("#editar_ingre").submit(function (event){
   var parametros = $(this).serialize();
   var parent;
   $.ajax({
      type: "POST",
      url: "../php/editar_ingre.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#estado2").html("Mensaje: Cargando...");
        },
      success: function(datos){
        $("#estado2").html(datos);

      }

  });
  event.preventDefault();

     if((parent = window.opener))
    {
        document.getElementById('editar_ingre').onsubmit = function() {
            parent.event();
            parent.cargar();
            return true;
        }
    }
})

function eliminar_se(){
  var action = "todo";
  var id = $("#pro").val();

  $.ajax({
      type:'GET',
      url:'../php/editar_ingre.php',
      data:{id:id,action:action},
      success:function(datos){
        $('#estado2').html(datos);
      }
  });

}