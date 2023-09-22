<?php
# recebe.php
# que deve receber o nome e a msg
# e salvar no BD 
# e redireciona para o chat.php
$dbname = 'chat2023';
$user = 'root';
$password = '';

$conexao = new PDO('mysql:host=localhost; dbname='.$dbname,$user,$password);

# recebe os dados
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_SPECIAL_CHARS);

# verifica e salva no banco
if($nome && $msg){
    $conexao->query("INSERT INTO msg(nome, msg, ip) VALUES ('$nome', '$msg', '".$_SERVER['REMOTE_ADDR']."')");
}
else{
    echo 'dados nao enviados '.count($_POST).count($_GET);
    print_r($_POST);
}