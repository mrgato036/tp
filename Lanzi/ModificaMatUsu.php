<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Estilos/Estilo.css">
    <title>MODIFICA MATERIA CON USUARIO</title>
</head>
<body>
    <div class="container">
        <div class="section-title">Datos del Usuario y materia</div>
        <form onsubmit="return validateForm()">
            <div class="section-title">Datos de la materia</div>
            <div class="form-group">
                <label for="numMateria">Número de Materia</label>
                <input type="text" id="numMateria" maxlength="3">
            </div>
            <div class="form-group">
                <label for="nombreMateria">Nombre de Materia</label>
                <input type="text" id="nombreMateria" maxlength="50">
            </div>
            <div class="section-title">Datos del usuario</div>
            <div class="form-group">
                <label for="tipoDocumento">Tipo de documento</label>
                <select id="tipoDocumento">
                    <option value="DNI">DNI</option>
                    <option value="LC">LC</option>
                    <option value="LE">LE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numDocumento">Número de documento</label>
                <input type="text" id="numDocumento" maxlength="10">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido">
            </div>
            <div class="form-group">
                <label for="anioDivision">Año - División</label>
                <input type="text" id="anioDivision">
            </div>
            <div class="form-actions">
                <button type="submit">Modificar</button>
                <button type="reset">Borrar datos</button>
            </div>
        </form>
    </div>
    <img src="./img/Perro.jpeg"alt="" >  
</body>
</html>

<style>
body{
    background-image: url("./img/fondo.jpg");
}


</style>