<?php require_once 'views/partials/header.php'; ?>
    <div id="create_estudiantes">
        <h1>Registro de estudiantes</h1>
        <form action="<?php echo constant('URL'); ?>Estudiantes/crear" method="POST">
            <label for="nombre_apellidos">Apellidos y nombres:</label>
            <input type="text" name="nombre_apellidos" id="nombre_apellidos" required>
            <input type="submit" value="Registrar">
        </form>
        <a href="<?php echo constant('URL'); ?>estudiantes/index">Volver</a>
    </div>
<?php require_once 'views/partials/footer.php'; ?>
