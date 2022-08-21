<?php
include('../conn/conn.php');
include('../Modulos/top.php');

if (isset($_POST['guardarC']) || isset($_POST['guardarB'])) {
    if ($_POST['accionador'] == 1) {

        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $tipo = $_POST['categoria'];

        $sqlInsertarC = "INSERT INTO tcomidas (nombre,precio,tipo,estado) VALUES ('$nombre','$precio','$tipo',1)";
        $queryUpdate = mysqli_query($conn, $sqlInsertarC);
    }
    if ($_POST['accionador'] == 2) {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $tipo = $_POST['categoria'];

        $sqlInsertarC = "INSERT INTO tbebidas (nombre,precio,tipo,estado) VALUES ('$nombre','$precio','$tipo',1)";
        $queryUpdate = mysqli_query($conn, $sqlInsertarC);
    }
}

if (isset($_GET['idC_delete'])) {
    $idEliminar = $_GET['idC_delete'];
    $sqlEliminar = "UPDATE tcomidas SET estado = 2 WHERE id='$idEliminar'";
    $queryEliminar = mysqli_query($conn, $sqlEliminar);
}
if (isset($_GET['idB_delete'])) {
    $idEliminar = $_GET['idB_delete'];
    $sqlEliminar = "UPDATE tbebidas SET estado = 2 WHERE id='$idEliminar'";
    $queryEliminar = mysqli_query($conn, $sqlEliminar);
}

?>

<div class="row">
    <div class="col-12">
        <div class="text-center mt-2">
            <h1 class="text-primary">Menú</h1>
        </div>

        <style>
            .links {
                display: none;
                margin: 3px;
            }

            .desplegable {
                width: 230px;
                margin: 5px;
                margin-left: 10px;

            }

            .desplegable:hover .links {
                display: block;
            }
        </style>

        <div class="desplegable">

            <button class="btn btn-lg btn-secondary btn-lg-square"><i class="fa fa-plus"></i></button>

            <div class="links">
                <!-- Boton agregar nueva comida -->
                <div>
                    <a href="#addNewC" class="btn btn-secondary" style="color: #EB1616;margin-bottom: 5px;" data-bs-toggle="modal">Agregar Nueva Comida <i class="fa fa-plus"></i></a>
                </div>

                <!-- Boton agregar nueva bebida -->
                <div>
                    <a href="#addNewB" class="btn btn-secondary" style="color: #EB1616; width: 215.85px;" data-bs-toggle="modal">Agregar Nueva Bebida <i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table">
    <thead>
        <th></th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Precio</th>
    </thead>
    <tbody>
        <!-- Comidas -->
        <?php
        $sqlComidas = "SELECT * FROM tcomidas WHERE estado = 1";
        $querySQL = mysqli_query($conn, $sqlComidas);
        while ($row = mysqli_fetch_array($querySQL)) {
        ?>
            <tr>
                <td weight="150">
                    <a class="btn btn-light btnEditarComida" idEditar="<?= $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#updateC"><i class="fa fa-pen"></i></a>
                    <a href="menu.php?idC_delete=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm ('¿Está seguro(a) que desea eliminar este platillo?')"><i class="fa fa-trash"></i></a>
                </td>
                <td><span id="nombre"><?= $row['nombre'] ?></span></td>
                <td><span id="tipo"><?php
                    if ($row['tipo'] == 1) {
                        echo "Postre";
                    } elseif ($row['tipo'] == 2) {
                        echo 'Desayuno';
                    } elseif ($row['tipo'] == 3) {
                        echo 'Almuerzo';
                    } elseif ($row['tipo'] == 4) {
                        echo 'Comida rápida';
                    }

                    ?></span></td>
                <td><span id="precio">₡ <?= $row['precio'] ?></span></td>
            </tr>
        <?php
        }
        ?>
        <!-- Bebidas -->
        <?php
        $sqlBebidas = "SELECT * FROM tbebidas WHERE estado = 1";
        $querySQL = mysqli_query($conn, $sqlBebidas);
        while ($row = mysqli_fetch_array($querySQL)) {
        ?>
            <tr>
                <td>
                    <button href="#updateB" class="btn btn-light" data-bs-toggle="modal"><i class="fa fa-pen"></i></button>
                    <a href="menu.php?idB_delete=<?= $row['id'] ?>" class="btn btn-danger" onclick=" return confirm('¿Está seguro(a) que desea eliminar esta bebida?')"><i class="fa fa-trash"></i></a>
                </td>
                <td><?= $row['nombre'] ?></td>
                <td><?php
                    if ($row['tipo'] == 1) {
                        echo "Caliente";
                    } elseif ($row['tipo'] == 2) {
                        echo 'Fria';
                    } elseif ($row['tipo'] == 3) {
                        echo 'Natural';
                    } elseif ($row['tipo'] == 4) {
                        echo 'Gaseosa';
                    }
                    ?></td>
                <td>₡ <?= $row['precio'] ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>


<?php
include('addModal.php');
include('../Modulos/buttom.php');
?>