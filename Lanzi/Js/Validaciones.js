function validateForm() {
    const numMateria = document.getElementById("numMateria").value;
    const nombreMateria = document.getElementById("nombreMateria").value;
    const numDocumento = document.getElementById("numDocumento").value;

    if (isNaN(numMateria) || numMateria.length > 3) {
        alert("Número de Materia debe ser un número de hasta 3 dígitos.");
        return false;
    }

    if (!/^[A-Za-z\s]+$/.test(nombreMateria) || nombreMateria.length > 50) {
        alert("Nombre de Materia debe contener solo letras y tener una longitud máxima de 50 caracteres.");
        return false;
    }

    if (isNaN(numDocumento) || numDocumento.length > 10) {
        alert("Número de Documento debe ser un número de hasta 10 dígitos.");
        return false;
    }

    return true;
}

function restrictInput(event) {
    const input = event.target;
    const value = input.value;
    input.value = value.replace(/[^A-Za-z\s]/g, '');
}

document.addEventListener("DOMContentLoaded", function() {
    const nombreMateriaInput = document.getElementById("nombreMateria");
    nombreMateriaInput.addEventListener("input", restrictInput);
});


