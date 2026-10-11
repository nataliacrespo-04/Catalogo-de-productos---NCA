
function alternarModo() {
    document.body.classList.toggle("oscuro");
}

const botonModo = document.getElementById("boton-modo");

botonModo.addEventListener("click", alternarModo);
