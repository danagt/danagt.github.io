
// ALERTA BORRAR USUARIO

    function borrarUsuario(){
        var respuesta = confirm("Seguro que quieres eliminar?");

        if (respuesta == true){
            return true;
        }else{
            return false; 
        }
    }
  