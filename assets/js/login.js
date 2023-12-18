$("#formLogin").submit(function (e) {
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var clave = $.trim($("#clave").val());
  
    if (usuario == "" || clave == "") {
      Swal.fire({
        icon: "warning",
        title: "Ingrese un usuario y/o contraseña",
      });
      return false;
    } else {
      $.ajax({
        url: "validate.php",
        type: "post",
        datatype: "json",
        data: { usuario: usuario, clave: clave },
        success: function (data) {
        console.log(data); 
          if (data == 'null' ) {
            Swal.fire({
              icon: "error",
              title: "Usuario y/o clave incorrecta!",
            });
            return false;
          } else {
            Swal.fire({
            icon: "success",
              title: "¡Conexión exitosa!",
              confirmButtonColor: "#3085d6",
              confirmButtonText: "Ingresar",
            });  
            console.log(data);        
            if (data == "Administrador") {
                window.location.href = "/sistemagym/view/admin/mainAdmin.php";
            }
            if (data == "Entrenador") {
                window.location.href = "/sistemagym/view/entrenadores/mainEntrena.php";
            }
            if (data == "Miembro") {
                window.location.href = "/sistemagym/view/miembros/mainMiembro.php";
            }
            }
          }
      });
    }
});