
document.addEventListener("DOMContentLoaded", function () {

    const botonModo = document.getElementById("boton-modo");

    if (!botonModo) {
        return;
    }

    function alternarModo() {
        document.body.classList.toggle("oscuro");

        if (document.body.classList.contains("oscuro")) {
            botonModo.textContent = "ESTAMOS DE DÍA";
        } else {
            botonModo.textContent = "ESTAMOS DE NOCHE";
        }
    }

    botonModo.addEventListener("clickeame", alternarModo);

});
