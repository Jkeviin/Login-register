//Declaración de variables
let contenedor_login_register = document.querySelector(".contenedor__login-register");  //Contenedor del login y register
let formulario_Login = document.querySelector(".formulario__login");  //Formulario del login
let formulario_register = document.querySelector(".formulario__register");  //Formulario del register
let caja_trasera_login = document.querySelector(".caja__trasera-login");  //Caja trasera del login
let caja_trasera_register = document.querySelector(".caja__trasera-register");  //Caja trasera del register

window.addEventListener("resize", anchoPagina =  () => {   //Evento que se ejecuta cuando se redimensiona la pantalla
    if(window.innerWidth >850){  //Si el ancho de la pantalla es mayor a 850px
        caja_trasera_login.style.display = "block";  //Se muestra la caja trasera del login
        caja_trasera_register.style.display = "block"; //Se muestra la caja trasera del register
    }else{
        caja_trasera_register.style.display = "block"; //Se muestra la caja trasera del register
        caja_trasera_register.style.opacity = "1"; //Se muestra la caja trasera del register
        caja_trasera_login.style.display = "none"; //Se oculta la caja trasera del login
        formulario_Login.style.display = "block"; //Se muestra el formulario del login
        formulario_register.style.display = "none"; //Se oculta el formulario del register
        contenedor_login_register.style.left = "0px"; //Se mueve el contenedor del login a la izquierda
    }
});

anchoPagina(); //Se ejecuta la función anchoPagina

document.getElementById("btn__iniciar-sesion").addEventListener("click", login = () => {  //Evento que se ejecuta cuando se hace click en el botón de iniciar sesión

    if(window.innerWidth > 850){ //Si el ancho de la pantalla es mayor a 850px
        formulario_register.style.display = "none"; //Se oculta el formulario del register
        contenedor_login_register.style.left = "10px"; //Se mueve el contenedor del login a la izquierda
        formulario_Login.style.display = "block"; //Se muestra el formulario del login
        caja_trasera_register.style.opacity = "1"; //Se muestra la caja trasera del register
        caja_trasera_login.style.opacity = "0"; //Se oculta la caja trasera del login
    }else{ //Si el ancho de la pantalla es menor a 850px
        formulario_register.style.display = "none"; //Se oculta el formulario del register
        contenedor_login_register.style.left = "0px"; //Se mueve el contenedor del login a la izquierda
        formulario_Login.style.display = "block"; //Se muestra el formulario del login
        caja_trasera_register.style.display = "block"; //Se muestra la caja trasera del register
        caja_trasera_login.style.display = "none"; //Se oculta la caja trasera del login
    }
    
});

document.getElementById("btn__registrarse").addEventListener("click", register = () => { //Evento que se ejecuta cuando se hace click en el botón de registrarse

    if(window.innerWidth > 850){ //Si el ancho de la pantalla es mayor a 850px
        formulario_register.style.display = "block"; //Se muestra el formulario del register
        contenedor_login_register.style.left = "410px"; //Se mueve el contenedor del login a la derecha 
        formulario_Login.style.display = "none"; //Se oculta el formulario del login
        caja_trasera_register.style.opacity = "0";  //Se oculta la caja trasera del register
        caja_trasera_login.style.opacity = "1"; //Se muestra la caja trasera del login
    }else{ //Si el ancho de la pantalla es menor a 850px
        formulario_register.style.display = "block"; //Se muestra el formulario del register
        contenedor_login_register.style.left = "0px"; //Se mueve el contenedor del login a la derecha
        formulario_Login.style.display = "none"; //Se oculta el formulario del login
        caja_trasera_register.style.display = "none"; //Se oculta la caja trasera del register
        caja_trasera_login.style.display = "block"; //Se muestra la caja trasera del login
        caja_trasera_login.style.opacity = "1"; //Se muestra la caja trasera del login
    }
});