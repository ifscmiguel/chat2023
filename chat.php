<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #chat p{
            padding:10px;
            margin:5px;
            border: 1px solid #CCC;;
        }
    </style>
</head>

<body>
    <div id="chat" style="padding:50px; border:3px solid red"></div>
    <input type="text" id="msg">
    <button id="enviar">enviar</button>
    <button id="receber">receber</button>
    <script>
        const chat = document.getElementById("chat");
        const msg = document.getElementById("msg");
        const botaoEnviar = document.getElementById("enviar");
        const botaoReceber = document.getElementById("receber");

        botaoReceber.addEventListener("click", () => {
            fetch('http://localhost/miguel/projetochat2023/chat2023/ler.php')
                .then((response) => response.json())
                .then((data) => {
                    data.forEach(function(msg) {
                        let p = document.createElement("p");
                        p.innerHTML = `${msg.nome}: ${msg.msg}`;
                        console.log(msg.nome);
                        chat.appendChild(p);
                    });
                });
        })
    </script>
</body>

</html>