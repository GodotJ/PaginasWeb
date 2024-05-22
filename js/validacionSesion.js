function validacion(){
    let usuario = document.getElementById('usuario').value;
    let password = document.getElementById('password').value;

    if(usuario.length == 0){
        alert('Introduzca un usuario, por favor.');
        document.getElementById('usuario').focus();
        return false;
      }

      if(password.length == 0){
        alert('Introduzca una contraseña, por favor.');
        document.getElementById('password').focus();
        return false;
      }
}