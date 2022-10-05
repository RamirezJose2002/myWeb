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
                <form method="GET">

                    <input type="hidden" name="idEditarModal" id="idEditarModal">

                    <br><label for="nombre">Nombre:</label>
                    <input class="form-control inputs" type="text" name="nombreModal" id="nombreModal" autocomplete="off">

                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control inputs" name="precioModal" id="precioModal" autocomplete="off">

                    <label for="tipoModal">Categoria:</label>
                    <select class="form-control" name="tipoModal" id="tipoModal" required>

                        <option value="">Seleccione el tipo...</option>
                        <option value="1">Postre</option>
                        <option value="2">Desayuno</option>
                        <option value="3">Almuerzo</option>
                        <option value="4">Comida rapida</option>

                    </select> <br>

                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
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
                <form method="GET">

                    <input type="hidden" name="idEditarModalB" id="idEditarModalB">

                    <br><label for="nombre">Nombre:</label>
                    <input class="form-control inputs" type="text" name="nombreModalB" id="nombreModalB" autocomplete="off">

                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control inputs" name="precioModalB" id="precioModalB" autocomplete="off">

                    <label for="tipoModalB">Categoria:</label>
                    <select class="form-control" name="tipoModalB" id="tipoModalB" required>

                        <option value="">Seleccione el tipo...</option>
                        <option value="1">Caliente</option>
                        <option value="2">Fria</option>
                        <option value="3">Natural</option>
                        <option value="4">Gaseosa</option>

                    </select> <br>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="guardarB">Guardar</button>

                </form>
            </div>
        </div>
    </div>
</div>