<?php

session_start();

try {

    $con = new PDO('mysql:host=localhost;dbname=database', 'root', '');
    
    // echo "Conectado a la base de datos";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Genera la contraseña con hash
    // $pass_hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 10]);
    // var_dump($pass_hash);
    // exit();

    $sql = $con->prepare("SELECT id, nombre, password FROM usuarios WHERE email = ?;");
    $sql->bindParam(1, $usuario);
    $response = $sql->execute() or die('Falló en la query');

    // Valida si el query se ejecuta correctamente
    if($response) {
        $data = $sql->fetch(PDO::FETCH_OBJ);

        // Valida si el email está en la base de datos
        if(!$data) {
            echo json_encode([
                "error" => true,
                "msg" => "El usuario no existe en la base de datos."
            ]);
            return;
        }

        // Si la contraseña es incorrecta
        if(!password_verify($password, $data->password)) {
            echo json_encode([
                "error" => true,
                "msg" => "La contraseña es incorrecta."
            ]);
            return;
        }

        $_SESSION['id_usuario'] = $data->id;
        $_SESSION['nombre_usuario'] = $data->nombre;

        echo json_encode([
            "error" => false,
            "msg" => "¡Bienvenido!"
        ]);
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}