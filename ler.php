<?php
/* includes/conexao.php */
$dbname = 'chat2023';
$user = 'root';
$password = '';

$conexao = new PDO('mysql:host=localhost; dbname='.$dbname,$user,$password);

# pegar o id via post
$id = filter_input(INPUT_POST, 'id');
# somente as últimas 20
$stmt = $conexao->query("select *, $id as ultimo from msg where id>$id order by id desc limit 20");
$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
$dados = array_reverse($dados);
echo json_encode($dados);
