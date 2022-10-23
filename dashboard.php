<?php

session_start();

// Si la variable de sesión no está definida, redirigir a index.php
if(!isset($_SESSION['id_usuario'])) {
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <section class="h-screen flex flex-col gap-3 justify-center items-center bg-gray-200">
    <h1 class="text-4xl">Hola, <?= $_SESSION['nombre_usuario'] ?></h1>
    <button class="bg-red-600 hover:bg-red-700 px-3 py-2 rounded text-white" type="button" onclick="cerrar_sesion()">Cerrar sesión</button>
  </section>

</body>

<script>

function cerrar_sesion() {

  fetch('logout.php', {method: 'GET'})
  .then(() => {
    location.reload();
  });

}

</script>

</html>