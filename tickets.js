
const nombre = document.getElementById("nombre");
const mensajeNombre = document.getElementById("mensajeNombre");

const apellido = document.getElementById("apellido");
const mensajeApellido = document.getElementById("mensajeApellido");

const email = document.getElementById("email");
const expRegular = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
const mensajeEmail = document.getElementById("mensajeEmail");

const cantidad = document.getElementById("cantidad");
const mensajeCantidad = document.getElementById("mensajeCantidad");

const categoria = document.getElementById("categoria");
const mensajeCategoria = document.getElementById("mensajeCategoria");

const botonEnviar = document.getElementById("botonCalcular")

function validarNombre(){
    if (nombre.value.length < 3) {
        mensajeNombre.innerHTML = "* Ingrese un nombre válido";
        mensajeNombre.style.color = "red";
    } else {
        mensajeNombre.innerHTML = "* Nombre correcto";
        mensajeNombre.style.color = "black";
    }
}

function validarApellido(){
    if (apellido.value.length < 3) {
        mensajeApellido.innerHTML = "* Ingrese un apellido";
        mensajeApellido.style.color = "red";
    } else {
        mensajeApellido.innerHTML = "* Apellido correcto";
        mensajeApellido.style.color = "black";
    }
}

function validarEmail(){
    if (!expRegular.test(email.value)) {
        mensajeEmail.innerHTML = "* Ingrese email valido";
        mensajeEmail.style.color = "red";
    } else {
        mensajeEmail.innerHTML = "* Email correcto";
        mensajeEmail.style.color = "black";
    }
}

function validarCantidad(){
    if (cantidad.value == "") {
        mensajeCantidad.innerHTML = "* Ingrese cantidad de tickets";
        mensajeCantidad.style.color = "red";
    }else {
        mensajeCantidad.innerHTML = "* Cantidad correcto";
        mensajeCantidad.style.color = "black";
    }
}

function validarCategoria(){
     if (categoria.value == "") {
        // alert("Elige una opcion de Categoria");
        mensajeCategoria.innerHTML = "* Elige categoría";
        mensajeCategoria.style.color = "red";
    } else {
        mensajeCategoria.innerHTML = "* Categoría seleccionada";
        mensajeCategoria.style.color = "black";
    }
}
botonEnviar.addEventListener("click", validarNombre);
botonEnviar.addEventListener("click", validarApellido);
botonEnviar.addEventListener("click", validarEmail);
botonEnviar.addEventListener("click", validarCantidad);
botonEnviar.addEventListener("click", validarCategoria);

const valorTicket = 200;
var estudiante = 0.80;
var trainee = 0.50;
var junior = 0.15;


const totalCompra = document.getElementById("totalCompra");


function totalAPagar(){
    // e.preventDefault();

    let totalTickets= (cantidad.value) * valorTicket;

    if (categoria.value == "") { //para q no aparezca $200
        totalTickets = "";
    }
    if (categoria.value == "sinCategoria") {
        totalTickets = (cantidad.value) * valorTicket;
    }
    if (categoria.value == "estudiante") {
        totalTickets = totalTickets * estudiante;
    }
    if (categoria.value == "trainee") {
        totalTickets = totalTickets * trainee; 
    }
    if (categoria.value == "junior") {
        totalTickets = totalTickets * junior;
    }
    totalCompra.innerHTML = ("Total a pagar $ ") + totalTickets;

}
botonEnviar.addEventListener("click", totalAPagar);