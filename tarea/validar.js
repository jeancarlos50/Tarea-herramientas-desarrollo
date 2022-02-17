function validar(){

    var nombre, apellido,cedula,movil,correo,contraseña,expresion;
    nombre=document.getElementById("nombre").value;
    apellido=document.getElementById("apellido").value;
    cedula=document.getElementById("cedula").value;
    movil=document.getElementById("movil").value;
    correo=document.getElementById("correo").value;
    contraseña=document.getElementById("contraseña").value;

    expresion =/\w+@\w+\.+[a-z]/;

   var mayus = nombre.toLocalUpperCase();

    if(nombre === ""|| apellido === ""|| cedula ==="" ||movil ==="" ||correo ===""||contraseña===""){

        alert("todos los campos son obligatorios");
        return false;
    }
    else if (nombre.length>40){
        alert("Los nombres son muy largos")
        return false;
    }

    else if (apellido.length>40){
        alert("Los apellidos son muy largos")
        return false;
    }
    else if (cedula.length>10){
        alert("la cedula solo debe tener 10 numeros")
        return false;
    }
    else if (movil.length>10){
        alert("el movil solo debe tener 10 numeros")
        return false;
    }
    else if (correo.length>150){
        alert("El correo es muy largo")
        return false;
    }
    else if (isNaN(movil)){
        alert("El telefono ingresado no es un numero")
        return false;
    }
    else if (isNaN(cedula)){
        alert("La cedula ingresada no es un numero")
        return false;
    }
    else if (!expresion.test(correo)){
        alert("El correo no es valido")
        return false;
    }


}