<?php

require '../vendor/autoload.php';
include 'index.php';


use App\model\Usuario;

// Verificando se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuario = new Usuario($usuario, $senha);

    // Verificando se o usuário é o admin
    if ($usuario->verificarAdmin()) {
        echo '<p class="sucesso">Login realizado com <strong>SUCESSO!</strong></p>';
    } else {
        echo '<p class="incorreto">Usuário ou senha <strong>INCORRETOS! </strong><br>Entre em contato com seu superior</p>';
    }
} else {
    echo '<p>Método inválido.</p>';
}
?>
