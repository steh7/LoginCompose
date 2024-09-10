
<?php

require '../vendor/autoload.php';

use App\model\Usuario;

// Verificando se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuarioObj = new Usuario($usuario, $senha);

    // Verificando se é admin
    if ($usuarioObj->verificaAdmin()) {
        echo '<p>Login realizado com sucesso!</p>';
    } else {
        echo '<p>Usuário ou senha incorretos!</p>';
    }
} else {
    echo '<p>Método de requisição inválido.</p>';
}
?>
