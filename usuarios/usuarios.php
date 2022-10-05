<?php
include('../conn/conn.php');
include('../Modulos/top.php');

if (isset($_POST['guardarU'])) {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];

    if ($pass == $rpass) {
        $pass = sha1($pass);
        $sqlInsert = "INSERT INTO tusuario (nombre,usuario,pass,estado) VALUES ('$nombre','$usuario','$pass',1)";
        $queryInsert = mysqli_query($conn, $sqlInsert);
    } else {
?>

        <script>
            alert("Las contraseñas no coinciden...");
        </script>

<?php
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-primary">Usuarios</h1>
        </div>
        <div class="desplegable">
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

            <button class="btn btn-lg btn-secondary btn-lg-square"><i class="fa fa-plus"></i></button>

            <div class="links">
                <!-- Boton agregar usuario -->
                <div>
                    <a href="#addNewUser" class="btn btn-secondary" style="color: #EB1616;margin-bottom: 5px;" data-bs-toggle="modal">Agregar Usuario <i class="fa fa-plus"></i></a>
                </div>

            </div>
        </div>
    </div>

    <?php
    $sqlSelect = "SELECT * FROM tusuario WHERE estado = 1";
    $querySelect = mysqli_query($conn, $sqlSelect);
    if (mysqli_num_rows($querySelect) != 0) {
        while ($row = mysqli_fetch_array($querySelect)) {
    ?>
    <div class="col-9">
            <table class="table">
                <thead>
                    <th>N° de usuario</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['usuario'] ?></td>
                        <td>
                            <a class="btn btn-light btnEditarUsuario" idEditar="<?= $row['id'] ?>"><i class="fa fa-pen"></i></a>
                            <a href="usuarios.php?idDelete=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm ('¿Está seguro(a) que desea eliminar este usuario?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
            }
        } else {
                ?>
                <h5 class="text-secondary text-center">No hay usuarios registrados. <i class="fa fa-ban"></i></tr>
                <?php } ?>
                </tbody>
            </table>
    </div>
</div>

<?php
include('modalUser.php');
include('../Modulos/buttom.php');
?>