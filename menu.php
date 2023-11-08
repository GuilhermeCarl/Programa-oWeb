<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
            background-color: #000000;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 115px;
            border-radius: 300px;
            box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
            
        }

        h2 {
            text-align: center;
        }

        label,
        input {
            display: block;
            margin: 10px 0;
        }

        #header {
            background-color: #FF670F;
            color: #black;
            text-align: center;
            padding: 20px 0;
        }

        #menu {
            background-color: #ccc;
            color: #fff;
            padding: 5px;
        }

        #menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        #menu ul li {
            display: inline;
            margin-right: 10px;
        }

        #timeline {
            background-color: #ccc;
            width: 56.4%;
            margin: 8px auto;
            padding: 10px;
            border-radius: 5px;
            border: 5px solid #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #user-name {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #photo-upload {
            display: block;
            margin: 20px 0;
        }

        #friend-list {
            background-color: #FF670F;
            width: 50%;
            margin: 1px auto;
            padding: 70px;
            border-radius: 5px;
            border: 5px solid #ffffff;
            display: flex;
     
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        #friend-list2 {
            background-color: #FF670F;
            width: 50%;
            margin: 1px auto;
            padding: 70px;
            border-radius: 5px;
            border: 5px solid #ffffff;
            display: flex;    
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        #chat-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: none;
        }

        #chat-header {
            background-color: #FF670F;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #chat-messages {
            height: 200px;
            padding: 10px;
            overflow-y: auto;
            border-bottom: 1px solid #ccc;
        }

        #message-input {
            width: 93%;
            padding: 10px;
            border: none;
        }

        #toggle-chat-button {
            background-color: #ccc;
            color: #fff;
            padding: 5px;
            text-align: center;
            cursor: pointer;
        }
        #friend-list .friend .start-conversation:hover {
            background-color: #FFA500;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>TimeLine</h1>
    </div>

    <div id="menu" align="right">
        <ul>
        <button type="button" onclick="window.location.href='http://127.0.0.1/Mais.php'">Mais</button>
        <button type="button" onclick="window.location.href='http://127.0.0.1/Configurações.php'">Configurações</button>
        <button type="button" onclick="window.location.href='http://127.0.0.1/Sobre.php'">Sobre</button>
        <button type="button" onclick="window.location.href='http://127.0.0.1/Check-ins.php'">Check-ins</button>
        <button type="button" onclick="window.location.href='http://127.0.0.1/index.php'">Sair</button>

        </ul>
    </div>
    <div id="timeline">
        <div id="user-name">
            Nome do Usuário
        </div>

        <input type="file" id="photo-upload" accept="image/*">
        <div id="uploaded-photos">

        </div>
    </div>

    <div id="friend-list">
        <div id="friend">
            <p>Nome do amigo </p>
            </div>
                <button id="start-conversation">Iniciar Conversa</button>
            </div>
            <div id="friend-list2">
                <div id="friend2">
                 <p>Nome do amigo </p>
                </div>
                    <button id="start-conversation2">Iniciar Conversa</button>
                </div>

                
        <div id="chat-container">
            <div id="chat-header">
                Mini Chat
                <div id="toggle-chat-button">Minimizar</div>
            </div>
            <div id="chat-messages">
                <!-- Mensagens de chat serão exibidas aqui -->
            </div>
            <input type="text" id="message-input" placeholder="Digite sua mensagem">

            

    <script>
        const photoUpload = document.getElementById("photo-upload");
        const uploadedPhotos = document.getElementById("uploaded-photos");

        photoUpload.addEventListener("change", (event) => {
            const file = event.target.files[0];

            if (file) {
                const photo = document.createElement("img");
                photo.src = URL.createObjectURL(file);
                photo.style.width = "150px";
                photo.style.margin = "10px";
                uploadedPhotos.appendChild(photo);
            }
        });
        const chatContainer = document.getElementById("chat-container");
        const toggleChatButton = document.getElementById("toggle-chat-button");
        const startConversationButton = document.getElementById("start-conversation");
        const messageInput = document.getElementById("message-input");
        const chatMessages = document.getElementById("chat-messages");

        let chatOpen = false;

        toggleChatButton.addEventListener("click", () => {
            if (chatOpen) {
                chatContainer.style.display = "none";
                toggleChatButton.textContent = "Minimizar";
            } else {
                chatContainer.style.display = "block";
                toggleChatButton.textContent = "Maximizar";
            }
            chatOpen = !chatOpen;
        });

        startConversationButton.addEventListener("click", () => {
            chatContainer.style.display = "block";
            chatOpen = true;
        });

        messageInput.addEventListener("keyup", function(event) {
            if (event.key === "Enter") {
                const message = messageInput.value;
                const messageElement = document.createElement("div");
                messageElement.textContent = "Voce: " + message;
                chatMessages.appendChild(messageElement);
                messageInput.value = "";
            }
        });
    </script>
</body>
</html>
