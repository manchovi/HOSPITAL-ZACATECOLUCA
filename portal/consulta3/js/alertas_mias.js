    $(document).ready(function(e){
    $("#alerta").click(function(e){
       sweetAlert("Listo","Esto es una alerta","success");
    });
 });
 
 
 function alertConfirmacion(){
    /*
     swal({
         title: '¿Esta seguro de cerrar su sesion?',
         text: "Puedes Iniciar Sesion Nuevamente Cuando lo Desee.",
         type: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Aceptar',
         cancelButtonText: 'Cancelar'
       }).then((result) => {
         if (result.value) {
           //swal('Congrats!','You are the winner!','success')
           window.location = 'cerrar_sesion.do';
         }else{
           swal('EXCELENTE','Buena elección, continuas dentro del sistema.','success');
         }
       })
     */
     
     
    /*
     swal({
        title: '¿Esta seguro de cerrar su sesion?',
        text: 'Puedes Iniciar Sesion Nuevamente Cuando lo Desee.',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm)
    {
        if(isConfirm)
        {
            //window.location.href = 'delete_files.php';
            //window.location = 'cerrar_sesion.do';
        }else{
            swal('EXCELENTE','Buena elección, continuas dentro del sistema.','success');
        }
    });*/
}        
    
function pasarVariable(dato){
    valor=5;
    var valor1 = dato;
    window.location="pagina.php?valor1="+valor1;
    //return 0;
}
 
