<?php
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
if (!trim($nome)) {
    header("Location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            height: 95vh;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        #chat {
            border: 1px solid black;
            border-radius: 5px;
            padding: 20px;
            box-sizing: border-box;
            flex-grow: 1;
            background-color: rgb(207, 194, 246);
            overflow-y: scroll;
            text-align: left;
        }

        #chat div {
            margin: 5px;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #666;
            background-color: #CCC;
        }

        #input_area {
            display: flex;
            gap: 10px;
        }

        input[type=submit] {
            min-width: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="chat">

        </div>
        <form action="recebe.php" method="post"">
            <input type="hidden" name="nome" id="nome" value="<?= $nome ?>">
            <input type="text" id="msg" name="msg">
            <input type="submit" value="enviar" id="enviar">
        </form>
    </div>
    <script>
        // elementos
        let chatDiv = document.getElementById("chat");
        const nome = document.getElementById("nome");
        const msg = document.getElementById("msg");
        const form = document.querySelector("form");

        function rolar() {
            chatDiv.scrollTop = chatDiv.scrollHeight;
        }

        form.addEventListener("submit", function(e) {
            e.preventDefault();
            enviar();
        });

        function enviar() {
            let data = new FormData();
            data.append("msg", msg.value);
            data.append("nome", nome.value);

            // enviar de forma assíncrona
            fetch("recebe.php", {
                method: "POST",
                body: data
            }).then(function(resposta) {
                if (!resposta.ok) {
                    alert("não foi possível enviar");
                } else {
                    msg.value = "";
                }
            });
        }
        // receber de forma assíncrona

        let id = 0;
        function ler() {
            let data = new FormData();
            data.append("id", id);
            fetch("ler.php", {
                    method: "POST",
                    body: data
                })
                .then(function(resposta) {
                    return resposta.json();
                })
                .then(function(resposta) {
                    resposta.forEach(function(r) {
                        let div = document.createElement('div');
                        div.innerHTML = `<strong>${r.nome}</strong>: ${r.msg}`;
                        chatDiv.appendChild(div);
                        id = r.id;
                        rolar();
                    });
                });
        }
        // chama a função ler() a cada 3 segundos
        setInterval(ler, 3000);
        ler();
    </script>
</body>

</html>