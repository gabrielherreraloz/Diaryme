<!-- contacta.php -->
<!-- # Gabriel Herrera Lozano -->

<?php require_once "header.php"; 
$nombre_previo = $_GET["nombre"];
$apellido_previo = $_GET["apellido"];
$email_previo = $_GET["email"];
$comentario_previo = $_GET["comentario"];
$error = $_GET["error"];
?>
<h2 class="mb-5">
    Contactar:
</h2>
<form class="row align-items-end" action="register.php" method="POST">
    <div class="col-12 col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" class="form-control" id="input-nombre" name="nombre" placeholder=" " value="<?php echo htmlspecialchars($nombre_previo); ?>" required>
            <label for="input-nombre">
                Nombre
            </label>
        </div>
    </div>
    <br>
    <div class="col-12 col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" class="form-control" id="input-apellidos" name="apellidos" placeholder=" " value="<?php echo htmlspecialchars($apellido_previo); ?>"required>
            <label for="input-apellidos">
                Apellidos
            </label>
        </div>
    </div>
    <br>
    <div class="col-12 col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" class="form-control" id="input-email" name="email" placeholder=" " pattern="[a-z0-9.\-]+@[a-z0-9.\-]+" value="<?php echo htmlspecialchars($email_previo); ?>" required>
            <label for="input-email">
                Correo Electrónico
            </label>
        </div>
    </div>
    <br>
    <div class="col-12 col-md-6 mb-4">
        <div class="form-floating">
            <select id="select-pokemon" class="form-select required" placeholder=" ">
                <option value="1">
                    Bulbasur
                </option>
                <option value="2">
                    Charmander
                </option>
                <option value="3">
                    Squirtle
                </option>
            </select>
            <label for="select-pokemon">
                Pokemon favorito
            </label>
        </div>
    </div>
    <br>
    <div class="col-12">
        <div class="form-floating mb-4">
            <textarea id="input-comentario" class="form-control" name="comentario" placeholder=" " 
                ><?php 
                    echo htmlspecialchars($comentario_previo); 
                ?>
            </textarea>
            <label for="input-comentario">
                Comentarios
            </label>
        </div>
    </div>
    <br>
    <div class="d-flex-mb justify-content-center">
        <input type="checkbox" id="alta" name="newsletter">
        <label for="alta" class="mb-4">
            Darse de alta en nuestra newsletter para recibir noticias y actualizaciones.
        </label>
    </div>
    <br>
    <div>
        <?php if ($error === 'error'): ?>
            <div class="alert alert-danger">
                Error: Debe aceptar darse de alta en nuestro newsletter para continuar.
            </div>
        <?php endif; ?>
    </div>
    <br>
    <div class="d-flex-mb justify-content-center">
        <input type="submit" class="btn btn-primary col-12 col-md-3 me-2 mb-2">
        <input type="reset" class="btn btn-dark col-12 col-md-3 mb-2">
    </div>
    
</form>

</main>
<?php require_once 'footer.php'; ?>