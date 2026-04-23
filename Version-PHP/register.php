<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST" || empty($_POST["nombre"])){
    header('Location: index.php');
    exit();
}

$name = $_POST["nombre"];
$surname = $_POST["apellidos"];
$fullname = ($name . " " . $surname);
$email = $_POST["email"];
$comentario = $_POST["comentario"];

if (!isset($_POST["newsletter"])) {
    $query = http_build_query(["error" => "error", "nombre" => $name, "apellido" => $surname, "email" => $email, "comentario" => $comentario]);
    header("Location: contacta.php?$query");
    exit();
}

if (isset($_COOKIE["usuario"])){
    header("Location: index.php");
}
else{
    setcookie("usuario", $fullname, time() + 60);
    header("Location: index.php");
}
exit();
?>