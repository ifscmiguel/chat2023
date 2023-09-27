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
       
    </style>
</head>

<body>
    <div class="container chatcontainer">
        <div id="chat"></div>
        <form action="recebe.php" method="post" class="chat">
            <input type="hidden" name="nome" id="nome" value="<?= $nome ?>">
            <input type="text" id="msg" name="msg">
            <input type="submit" value="enviar" id="enviar">
        </form>
    </div>
    <script src="chat.js"></script>
</body>

</html>