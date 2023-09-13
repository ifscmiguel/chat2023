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
            <div id="input_area">
                    <input type="hidden" name="nome" id="nome" value="<?= $nome ?>">
                    <input type="text" id="msg" name="msg">
                    <input type="submit" value="enviar" id="enviar">
            </div>
        </form>
    </div>
    <script>
        function rolar() {
            let chatDiv = document.getElementById("chat");
            chatDiv.scrollTop = chatDiv.scrollHeight;
        }
        rolar();

        // elementos
        const nome = document.getElementById("nome");
        const msg = document.getElementById("msg");
        const form = document.querySelector("form");

        form.addEventListener("submit", function(e){
            e.preventDefault();
            enviar();
        });

        function enviar(){
            
        }

    </script>
</body>

</html>