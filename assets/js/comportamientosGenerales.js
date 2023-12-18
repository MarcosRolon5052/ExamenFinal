//Comportamiento de los Botones Asesoramiento Nutricional en membresiaPagos.php
function alternarBoton() {
    var btnNutricional = document.getElementById("btnNutricional1");

    if (btnNutricional.classList.contains("btn-danger")) {
        // Cambiar a verde y activado
        btnNutricional.classList.remove("btn-danger");
        btnNutricional.classList.add("btn-success");
        btnNutricional.disabled = true;
    } else {
        // Cambiar a rojo y desactivado
        btnNutricional.classList.remove("btn-success");
        btnNutricional.classList.add("btn-danger");
        btnNutricional.disabled = false;
    }
}

function alternarBoton() {
    var btnNutricional = document.getElementById("btnNutricional2");

    if (btnNutricional.classList.contains("btn-danger")) {
        // Cambiar a verde y activado
        btnNutricional.classList.remove("btn-danger");
        btnNutricional.classList.add("btn-success");
        btnNutricional.disabled = true;
    } else {
        // Cambiar a rojo y desactivado
        btnNutricional.classList.remove("btn-success");
        btnNutricional.classList.add("btn-danger");
        btnNutricional.disabled = false;
    }
}

function alternarBoton() {
    var btnNutricional = document.getElementById("btnNutricional3");

    if (btnNutricional.classList.contains("btn-danger")) {
        // Cambiar a verde y activado
        btnNutricional.classList.remove("btn-danger");
        btnNutricional.classList.add("btn-success");
        btnNutricional.disabled = true;
    } else {
        // Cambiar a rojo y desactivado
        btnNutricional.classList.remove("btn-success");
        btnNutricional.classList.add("btn-danger");
        btnNutricional.disabled = false;
    }
}