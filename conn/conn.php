<?php 
$baseURL = "http://localhost/GitProject";

// if (!isset($_COOKIE['USUARIO'])) {
//     if (basename($_SERVER['PHP_SELF']) != 'login.php') {
//         header('location:' . $baseURL . 'login.php');
//     }
// }

$server = "localhost";
$user = "root";
$password = "";
$database = "sodaeden";
//URL BD
$conn = mysqli_connect($server, $user, $password);
mysqli_select_db($conn, $database);




?>
