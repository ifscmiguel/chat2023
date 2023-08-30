<?php
/* includes/conexao.php */
$dbname = 'chat2023';
$user = 'root';
$password = '';

$conexao = new PDO('mysql:host=localhost; dbname='.$dbname,$user,$password);

$stmt = $conexao->query("select * from msg order by id desc");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
