<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Azul bebê claro */
            color: #00796b; /* Cor do texto em tom de ciano escuro */
            text-align: center;
            padding: 50px;
        }
        form {
            background-color: #ffffff; /* Branco para o fundo do formulário */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            color: #00796b; /* Cor do título em tom de ciano escuro */
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #004d40; /* Cor das labels em tom de ciano mais escuro */
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px); /* Ajusta a largura para se adequar ao padding */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #004d40; /* Cor da borda dos inputs em tom de ciano mais escuro */
            border-radius: 4px;
            box-sizing: border-box; /* Inclui o padding e a borda na largura total */
        }
        input[type="submit"] {
            background-color: #00bcd4; /* Azul ciano */
            color: #ffffff; /* Cor do texto do botão em branco */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0097a7; /* Azul ciano escuro ao passar o mouse */
        }
    </style>
</head>
<body>
    <form action="main.php" method="post">
        <h2>Utilize suas credenciais</h2>
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        
        <input type="submit" value="Acessar" id="btnSub">
    </form>
</body>
</html>
