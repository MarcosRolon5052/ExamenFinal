<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once ('../../header.php')  ?>
    <title>Agregar Miembro</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Agregando Nuevo Miembro</h2>
            
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Ingresa el apellido">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                </div>
                <div class="mb-3">
                <label for="idSexo" class="form-label">Sexo</label>
                <select class="form-control" name="idSexo" id="idSexo" required>
                       <option value="M">Masculino</option> 
                       <option value="F">Femenino</option>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
                <div class="form-group">
                    <label for="telefono">Número de Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa número de teléfono" required pattern="[0-9]{10}" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '');" >
                    <small class="form-text text-muted">Formato: 1234567890</small>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Ingresa la direccion">
                </div>
                <div class="mb-3">
                    <label for="fechaNac" class="form-label">Fecha de  Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNac">
                </div>
                <div class="form-group">
                    <label for="peso">Peso Inicial (kg):</label>
                    <input type="number" class="form-control" id="peso" name="peso" step="0.01" placeholder="Ingresa el peso inicial " >
                    <small class="form-text text-muted">Formato: 1234567890</small>
                </div>
                <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <select class="form-control" name="rol" id="rol" required>
                       <option value="U">Usuario Comun</option>  
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>

                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
            
        </div>
    </div>
</div>

<script>

</script>
</body>
</html>

</body>
</html>