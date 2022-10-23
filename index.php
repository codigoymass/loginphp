<?php

session_start();

// Si la variable de sesión de php está definida, redirigir a dashboard
if(isset($_SESSION['id_usuario'])) {
    header('Location: dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <section class="h-screen bg-gray-200">
        <div class="px-6 h-full text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                <div class="xl:ml-20 xl:w-3/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form id="login-form" name="login-form" method="POST">

                        <div class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                            <p class="text-center font-semibold mx-4 mb-0">Ingresa con tus datos</p>
                        </div>

                        <!-- Email input -->
                        <div class="mb-6">
                            <input type="text" id="txt_usuario" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Usuario" />
                        </div>

                        <!-- Password input -->
                        <div class="mb-6">
                            <input type="password" id="txt_password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Contraseña" />
                        </div>

                        <div class="text-center">
                            <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                Iniciar sesión
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="app.js"></script>