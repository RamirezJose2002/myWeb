<style>
    .inputs {
        background: #E9ECEF;
        color: #6C7293;
    }
</style>
<div class="modal fade" id="addNewUser" tabindex="-1">
    <div class="modal-dialog">
        <!-- Contenido general -->
        <div class="modal-content">
            <!-- Contenido del encabezado -->
            <div class="modal-header" style="background-color:#000000;">
                <h5 class="modal-title">Agregar usuario</h5>
                <button type="button" class="btn-close" style="background-color: #EB1616;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Contenido del cuerpo -->
            <div class="modal-body">
                <form method="POST">

                    <br><label for="nombre">Nombre:</label>
                    <input class="form-control inputs" type="text" name="nombre" autocomplete="off">

                    <label for="usuario">Usuario:</label>
                    <input type="text" class="form-control inputs" name="usuario" autocomplete="off">

                    <label for="pass">Contraseña:</label>
                    <input class="form-control inputs" type="password" name="pass" id="pass">

                    <label for="rpass">Repetir contraseña:</label>
                    <input class="form-control inputs" type="password" name="rpass" id="rpass"><br>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="guardarU">Guardar</button>

                </form>
            </div>

        </div>
    </div>
</div>