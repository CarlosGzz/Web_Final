$(document).ready(function() {
   $('#envia').click(function(e){
      var userx = $('#correo').val();
      var passx = $('#contrasena').val();
      if(userx != '' && passx != ''){
         $.ajax({
            url: '../Controlador/login.php',
            method: 'POST',
            data: {user: userx, pass: passx},
            success: function(msg){
               if(msg=='1'){
                  $('#mensaje').show(),
                  $('#mensaje').html('<div class="chip">Error: Usuario o Contraseña Incorrectas<i class="material-icons">close</i></div>');
               }
               if(msg=='2'){
                  window.location = "../index.php"; 
               }
            }
         });
      } else{
         $('#mensaje').show();
         $('#mensaje').html('<div class="chip">Error: Ingrese los datos<i class="material-icons">close</i></div>');
      }    
   });
});