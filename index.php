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

    <div class="container">

        <p>Faça o login para acessar a TimeLine.</p>
        
        <h2>Login</h2>
        <form id="login-form">
            <label for="login-username">Nome de Usuário:</label>
            <input type="text" id="login-username" required>

            <label for="login-password">Senha:</label>
            <input type="password" id="login-password" required>

            <button type="submit" formaction="http://127.0.0.1/TesteLogin.php">Login</button>
            <button type="button" onclick="window.location.href='http://127.0.0.1/cadastro.php'">Inscreva-se</button>



    </div>
</body>

</html>