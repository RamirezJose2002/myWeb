<style>
    .inputs {
        background: #E9ECEF;
        color: #6C7293;
    }
</style>
<!-- Modal Agregar Comidas -->
<div class="modal fade" id="addNewC" tabindex="-1">
    <div class="modal-dialog">
        <!-- Contenido general -->
        <div class="modal-content">
            <!-- Contenido del encabezado -->
            <div class="modal-header" style="background-color:#000000;">
                <h5 class="modal-title">Agregar Comida</h5>
                <button type="button" class="btn-close" style="background-color: #EB1616;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Contenido del cuerpo -->
            <div class="modal-body">
                <form method="POST">

                    <br><label for="nombre">Nombre:</label>
                    <input class="form-control inputs" type="text" name="nombre" autocomplete="off">

                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control inputs" name="precio" autocomplete="off">

                    <label for="categoria">Categoria:</label>
                    <select class="form-control" name="categoria" id="categoria">

                        <option value="1">Postre</option>
                        <option value="2">Desayuno</option>
                        <option value="3">Almuerzo</option>
                        <option value="4">Comida rapida</option>

                    </select> <br>

                    <input type="hidden" value="1" name="accionador">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="guardarC">Guardar</button>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Comidas -->
<div class="modal fade" id="updateC" tabindex="-1">
    <div class="modal-dialog">
        <!-- Contenido general -->
        <div class="modal-content">
            <!-- Contenido del encabezado -->
            <div class="modal-header" style="background-color:#000000;">
                <h5 class="modal-title">Editar Comida</h5>
                <button type="button" class="btn-close" style="background-color: #EB1616;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Contenido del cuerpo -->
            <div class="modal-body">
                <form action="" method="POST">
                    <br><label for="nombre">Nombre:</label>
                    <input class="form-control inputs" type="text" id="nombre" name="nombre" autocomplete="off" value="<?= $rowC['nombre'] ?>">

                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control inputs" id="precio" name="precio" autocomplete="off" value="<?= $rowC['precio'] ?>">

                    <label for="categoria">Categoria:</label>
                    <select class="form-control" name="categoria" id="categoria">

                        <option value="1" <?php if ($rowC['tipo'] == 1) {
                                                echo 'selected';
                                            } ?>>Postre</option>
                        <option value="2" <?php if ($rowC['tipo'] == 2) {
                                                echo 'selected';
                                            } ?>>Desayuno</option>
                        <option value="3" <?php if ($rowC['tipo'] == 3) {
                                                echo 'selected';
                                            } ?>>Almuerzo</option>
                        <option value="4" <?php if ($rowC['tipo'] == 4) {
                                                echo 'selected';
                                            } ?>>Comida rapida</option>

                    </select> <br>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="guardarC">Guardar</button>
                </form>

            </div>
        </div>
    </div>
</div>


<!-- Modal Agregar Bebidas -->
<div class="modal fade" id="addNewB" tabindex="-1">
    <div class="modal-dialog">
        <!-- Contenido general -->
        <div class="modal-content">
            <!-- Contenido del encabezado -->
            <div class="modal-header" style="background-color:#000000;">
                <h5 class="modal-title">Agregar Bebida</h5>
                <button type="button" class="btn-close" style="background-color: #EB1616;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Contenido del cuerpo -->
            <div class="modal-body">
                <form method="POST">

                    <br><label for="nombre">Nombre:</label>
                    <input class="form-control inputs" type="text" name="nombre" autocomplete="off">

                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control inputs" name="precio" autocomplete="off">

                    <label for="categoria">Categoria:</label>
                    <select class="form-control" name="categoria" id="categoria">

                        <option value="1">Caliente</option>
                        <option value="2">Fria</option>
                        <option value="3">Natural</option>
                        <option value="4">Gaseosa</option>

                    </select><br>

                    <input type="hidden" value="2" name="accionador">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="guardarB">Guardar</button>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal Editar Bebidas -->
<div class="modal fade" id="updateB" tabindex="-1">
    <div class="modal-dialog">
        <!-- Contenido general -->
        <div class="modal-content">
            <!-- Contenido del encabezado -->
            <div class="modal-header" style="background-color:#000000;">
                <h5 class="modal-title">Editar Bebida</h5>
                <button type="button" class="btn-close" style="background-color: #EB1616;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Contenido del cuerpo -->
            <div class="modal-body">
                <form method="POST">

                    <br><label for="nombre">Nombre:</label>
                    <input class="form-control inputs" type="text" name="nombre" autocomplete="off">

                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control inputs" name="precio" autocomplete="off">

                    <label for="categoria">Categoria:</label>
                    <select class="form-control" name="categoria" id="categoria">

                        <option value="1">Postre</option>
                        <option value="2">Desayuno</option>
                        <option value="3">Almuerzo</option>
                        <option value="4">Comida rapida</option>

                    </select> <br>

                    <input type="hidden" value="1" name="accionador">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="guardarC">Guardar</button>

                </form>
            </div>
        </div>
    </div>
</div>