<?php
/* includes/conexao.php */
$dbname = 'imobiliaria';
$user = 'root';
$password = '';

$conexao = new PDO('mysql:host=localhost; dbname='.$dbname,$user,$password);