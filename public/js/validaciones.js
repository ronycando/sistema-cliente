document.addEventListener("DOMContentLoaded", function () {

    const formulario = document.getElementById("formularioCliente");

    const nombre = document.getElementById("nombre");
    const cedula = document.getElementById("cedula");
    const correo = document.getElementById("correo");
    const telefono = document.getElementById("telefono");
    const edad = document.getElementById("edad");

    const mensajeError = document.getElementById("mensajeError");

    formulario.addEventListener("submit", function (event) {

        mensajeError.innerHTML = "";
        mensajeError.style.display = "none";

        let errores = [];

        const nombreValor = nombre.value.trim();
        const cedulaValor = cedula.value.trim();
        const correoValor = correo.value.trim();
        const telefonoValor = telefono.value.trim();
        const edadValor = edad.value.trim();

        // Validar campos vacíos
        if (nombreValor === "") {
            errores.push("El nombre es obligatorio.");
        }

        if (cedulaValor === "") {
            errores.push("La cédula es obligatoria.");
        }

        if (correoValor === "") {
            errores.push("El correo electrónico es obligatorio.");
        }

        if (telefonoValor === "") {
            errores.push("El teléfono es obligatorio.");
        }

        if (edadValor === "") {
            errores.push("La edad es obligatoria.");
        }

        // Validar longitud del nombre
        if (nombreValor !== "" && nombreValor.length < 3) {
            errores.push("El nombre debe tener al menos 3 caracteres.");
        }

        // Validar cédula numérica
        if (cedulaValor !== "" && !/^\d+$/.test(cedulaValor)) {
            errores.push("La cédula debe contener únicamente números.");
        }

        // Validar longitud de cédula
        if (cedulaValor !== "" && cedulaValor.length !== 10) {
            errores.push("La cédula debe tener exactamente 10 dígitos.");
        }

        // Validar correo
        const expresionCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (
            correoValor !== "" &&
            !expresionCorreo.test(correoValor)
        ) {
            errores.push("Ingrese un correo electrónico válido.");
        }

        // Validar teléfono numérico
        if (
            telefonoValor !== "" &&
            !/^\d+$/.test(telefonoValor)
        ) {
            errores.push("El teléfono debe contener únicamente números.");
        }

        // Validar longitud del teléfono
        if (
            telefonoValor !== "" &&
            telefonoValor.length !== 10
        ) {
            errores.push("El teléfono debe tener exactamente 10 dígitos.");
        }

        // Validar edad numérica
        if (
            edadValor !== "" &&
            !/^\d+$/.test(edadValor)
        ) {
            errores.push("La edad debe ser un valor numérico.");
        }

        // Validar rango de edad
        if (edadValor !== "") {

            const edadNumero = parseInt(edadValor);

            if (edadNumero < 18 || edadNumero > 100) {
                errores.push(
                    "La edad debe estar entre 18 y 100 años."
                );
            }

        }

        // Si existen errores, no enviar formulario
        if (errores.length > 0) {

            event.preventDefault();

            let contenido = "<ul>";

            errores.forEach(function (error) {
                contenido += "<li>" + error + "</li>";
            });

            contenido += "</ul>";

            mensajeError.innerHTML = contenido;
            mensajeError.style.display = "block";

            window.scrollTo({
                top: mensajeError.offsetTop - 100,
                behavior: "smooth"
            });

        }

    });

});