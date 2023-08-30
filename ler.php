<?php
/* includes/conexao.php */
$dbname = 'chat2023';
$user = 'root';
$password = '';

$conexao = new PDO('mysql:host=localhost; dbname='.$dbname,$user,$password);

$sql = 'select * from msg order by id desc';
$msgs = $conexao->query($sql);

foreach($msgs as $m){
    echo $m["nome"].': '.$m["msg"];
}