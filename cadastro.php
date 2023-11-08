<?php
if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['sobrenome'])&& !empty($_POST['email'])&& !empty($_POST['celular'])&& !empty($_POST['senha'])) {
    include_once('conectabanco.php');
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome, sobrenome, email, celular, senha)VALUES('$nome', '$sobrenome', '$email', '$celular', '$senha')");
    header('Location: cadastro.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>TimeLine</title>
    <style>

#header {
            background-color: #000000;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #FF670F;
            padding: 60px;
            border-radius: 50px;
            box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label,
        input {
            display: block;
            margin: 1px 0;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #000000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div id="header">
        <h1>TimeLine</h1>
    </div>

    <?php
    $nomeErr = $sobrenomeErr = $emailErr = $celularErr = $senhaErr = "";
    $nome = $sobrenome = $email = $celular = $senha = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nome"])) {
            $nomeErr = "Nome vazio!";
        }

        if (empty($_POST["sobrenome"])) {
            $sobrenomeErr = "Sobrenome vazio!";
        }


        if (empty($_POST["email"])) {
            $emailErr = "E-mail vazio!";
        }

        if (empty($_POST["senha"])) {
            $senhaErr = "Senha vazio!";
        }

        if (empty($_POST["celular"])) {
            $celularErr = "Celular vazio!";
        }

    }

    ?>

    <div class="container">

    </form>

    <p><br>Inscreva-se para salvar e rever suas fotos antigas na TimeLine e podendo compartilhar com seus amigos.<br/></p>

    <h2>Inscreva-se</h2>
    <form id="signup-form">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" required>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" required>

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" required>

        <label for="celular">Número de Celular:</label>
        <input type="tel" id="celular" name="celular" required>

        <button type="submit" formaction="http://127.0.0.1/index.php">Registrar</button>
        <button type="button" onclick="window.location.href='http://127.0.0.1/index.php'">Voltar</button>

            </form>


    </div>
</body>

</html>