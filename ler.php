<?php
/* includes/conexao.php */
$dbname = 'chat2023';
$user = 'root';
$password = '';

$conexao = new PDO('mysql:host=localhost; dbname='.$dbname,$user,$password);

$stmt = $conexao->query("select * from msg order by id desc");
$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
$dados = array_reverse($dados);
echo json_encode($dados);
